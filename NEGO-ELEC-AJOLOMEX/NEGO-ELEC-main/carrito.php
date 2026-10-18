<?php require 'inc.php'; chk();
if($_SERVER['REQUEST_METHOD']==='POST'){$id=(int)$_POST['id'];$n=(int)$_POST['qty'];if($n<=0)unset($_SESSION['cart'][$id]);else $_SESSION['cart'][$id]=$n;go('carrito.php');}
$I=cartItems();$sub=array_sum(array_map(fn($p)=>$p['precio']*$p['q'],$I));head('Carrito');?><h1>Tu carrito</h1>
<?php if(!$I):?><div class="card" style="text-align:center"><div style="font-size:50px">🛒</div><p class="mut">Tu carrito está vacío.</p><a class="btn" href="catalogo.php">Ir al catálogo</a></div>
<?php else:?><div class="card sc"><table><?php foreach($I as $p):?><tr><td><?=e($p['icono'].' '.$p['nombre'])?><br><small class="mut"><?=e($p['an'])?></small></td><td><?=money($p['precio'])?></td>
<td><form method="post" style="display:flex;gap:6px"><?=field()?><input type="hidden" name="id" value="<?=$p['id']?>"><input type="number" name="qty" min="0" max="<?=$p['stock']?>" value="<?=$p['q']?>" style="width:80px"><button class="btn o s">Actualizar</button></form></td><td><?=money($p['precio']*$p['q'])?></td></tr><?php endforeach;?></table>
<div class="bar"><span>Subtotal</span><b><?=money($sub)?></b></div><div class="bar"><span>Envío</span><b><?=money(ENVIO)?></b></div><div class="bar tot"><span>Total</span><span><?=money($sub+ENVIO)?></span></div><br><a class="btn" href="checkout.php">Continuar al pago</a></div><?php endif;foot();
