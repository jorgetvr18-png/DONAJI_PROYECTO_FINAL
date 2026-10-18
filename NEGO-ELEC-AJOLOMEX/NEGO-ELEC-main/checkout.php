<?php require 'inc.php'; $u=need(); chk();
$I=cartItems();if(!$I)go('carrito.php');$sub=array_sum(array_map(fn($p)=>$p['precio']*$p['q'],$I));$err=isset($_GET['cancel'])?'Pago cancelado. Tu pedido sigue pendiente; puedes intentarlo de nuevo.':'';$f=$_POST;
if($_SERVER['REQUEST_METHOD']==='POST'){
 if(!trim($f['n'])||!trim($f['tel'])||!trim($f['dir'])||!trim($f['ciu'])||!trim($f['cp']))$err='Completa tus datos de envío.';
 elseif(strpos(STRIPE_SECRET,'PEGA_AQUI')!==false)$err='Falta configurar STRIPE_SECRET en config.php.';
 else{global $db;$db->begin_transaction();
  $s=q('INSERT INTO ordenes(usuario_id,subtotal,envio,total,envio_nombre,envio_tel,envio_dir,envio_ciudad,envio_cp,notas) VALUES(?,?,?,?,?,?,?,?,?,?)','idddssssss',$u['id'],$sub,ENVIO,$sub+ENVIO,$f['n'],$f['tel'],$f['dir'],$f['ciu'],$f['cp'],$f['nota']);
  $oid=$s->insert_id;$folio='AJX-'.(1000+$oid);q('UPDATE ordenes SET folio=? WHERE id=?','si',$folio,$oid);
  $li=[];$k=0;foreach($I as $p){q('INSERT INTO detalles_orden(orden_id,producto_id,nombre,precio,cantidad) VALUES(?,?,?,?,?)','iisdi',$oid,$p['id'],$p['nombre'],$p['precio'],$p['q']);
   $li[$k++]=['price_data'=>['currency'=>'mxn','product_data'=>['name'=>$p['nombre']],'unit_amount'=>(int)round($p['precio']*100)],'quantity'=>$p['q']];}
  $li[$k]=['price_data'=>['currency'=>'mxn','product_data'=>['name'=>'Envío'],'unit_amount'=>(int)round(ENVIO*100)],'quantity'=>1];
  $r=stripe('checkout/sessions',['mode'=>'payment','customer_email'=>$u['email'],'line_items'=>$li,'metadata'=>['folio'=>$folio],'success_url'=>BASE_URL.'/pago_ok.php?folio='.$folio,'cancel_url'=>BASE_URL.'/checkout.php?cancel=1']);
  if(empty($r['url'])){$db->rollback();$err='Stripe respondió con un error: '.e($r['error']['message']??'sin respuesta');}
  else{q('UPDATE ordenes SET stripe_session=? WHERE id=?','si',$r['id'],$oid);$db->commit();go($r['url']);}}}
head('Pago');?><div class="steps"><span>1. Carrito</span><span class="on">2. Datos de envío</span><span>3. Pago (Stripe)</span><span>4. Confirmación</span></div>
<form method="post" class="two"><?=field()?><div class="card"><h3>Datos de envío</h3><?=$err?"<div class='msg err'>$err</div>":''?><label>Nombre</label><input name="n" value="<?=e($f['n']??$u['nombre'])?>"><label>Teléfono</label><input name="tel" value="<?=e($f['tel']??'')?>"><label>Dirección</label><input name="dir" value="<?=e($f['dir']??'')?>"><div class="row"><div><label>Ciudad</label><input name="ciu" value="<?=e($f['ciu']??'')?>"></div><div><label>C.P.</label><input name="cp" value="<?=e($f['cp']??'')?>"></div></div><label>Notas</label><input name="nota" value="<?=e($f['nota']??'')?>"></div>
<div class="card"><h3>Tu pedido</h3><?php foreach($I as $p)echo '<div class="bar"><span>'.e($p['nombre']).' × '.$p['q'].'</span>'.money($p['precio']*$p['q']).'</div>';?><div class="bar"><span>Envío</span><?=money(ENVIO)?></div><div class="bar tot"><span>Total</span><span><?=money($sub+ENVIO)?> MXN</span></div><br><button class="btn" style="width:100%">Pagar con Stripe</button><p class="mut" style="font-size:14px">Serás redirigido a Stripe. AJOLOMEX no guarda datos de tu tarjeta.</p></div></form><?php foot();
