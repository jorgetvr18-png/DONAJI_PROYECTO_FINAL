<?php require 'inc.php'; $u=need();
$o=row('SELECT * FROM ordenes WHERE folio=? AND usuario_id=?','si',$_GET['folio']??'',$u['id']);if(!$o)go('pedidos.php');
$ok=$o['estado']!=='pendiente';
if(!$ok){$s=stripe('checkout/sessions/'.$o['stripe_session']); // se verifica el pago en el servidor, no se confía en la URL
 if(($s['payment_status']??'')==='paid'){global $db;$db->begin_transaction();
  $c=q("UPDATE ordenes SET estado='pagado',stripe_pi=? WHERE id=? AND estado='pendiente'",'si',$s['payment_intent'],$o['id']);
  if($c->affected_rows){foreach(rows('SELECT producto_id,cantidad FROM detalles_orden WHERE orden_id=?','i',$o['id']) as $d)q('UPDATE productos SET stock=GREATEST(stock-?,0) WHERE id=?','ii',$d['cantidad'],$d['producto_id']);}
  $db->commit();$_SESSION['cart']=[];$ok=true;}}
head('Confirmación');?><div class="steps"><span>1. Carrito</span><span>2. Datos de envío</span><span>3. Pago (Stripe)</span><span class="on">4. Confirmación</span></div>
<div class="card" style="max-width:700px;margin:auto;text-align:center"><?php if($ok):?><div style="font-size:60px">🎉</div><h1>¡Pedido confirmado!</h1><p>Tu folio es <b style="color:var(--pink)"><?=e($o['folio'])?></b></p><p class="mut">Pago aprobado por <?=money($o['total'])?> (modo prueba de Stripe).</p><div class="msg">Guarda tu folio: con él puedes consultar el estado en «Mis pedidos» y descargar tu comprobante.</div><a class="btn" href="pedido.php?folio=<?=e($o['folio'])?>">Ver comprobante</a> <a class="btn o" href="catalogo.php">Seguir comprando</a>
<?php else:?><h1>Pago no completado</h1><p class="mut">Stripe aún no confirma el pago del pedido <?=e($o['folio'])?>.</p><a class="btn" href="checkout.php">Intentar de nuevo</a><?php endif;?></div><?php foot();
