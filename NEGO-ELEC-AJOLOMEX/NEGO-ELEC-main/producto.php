<?php require 'inc.php'; chk();
$p=row('SELECT p.*,a.nombre an,a.estado ae FROM productos p JOIN artesanos a ON a.id=p.artesano_id WHERE p.id=? AND p.activo=1','i',(int)($_GET['id']??0));if(!$p)go('catalogo.php');
if($_SERVER['REQUEST_METHOD']==='POST'){$n=max(1,min((int)$_POST['qty'],$p['stock']));$_SESSION['cart'][$p['id']]=min(($_SESSION['cart'][$p['id']]??0)+$n,$p['stock']);go('carrito.php');}
head($p['nombre']);?>
<a class="mut" href="catalogo.php">← Catálogo</a><div class="card hero" style="margin-top:14px"><div style="background:var(--beige);border-radius:16px;height:300px;display:grid;place-items:center;font-size:110px"><?=e($p['icono'])?></div>
<div><div class="cat"><?=e(CATS[$p['categoria']])?></div><h1><?=e($p['nombre'])?></h1><p class="mut"><?=e($p['descripcion'])?></p><p>Artesano: <b><?=e($p['an'])?></b> · <?=e($p['ae'])?></p><div class="price"><?=money($p['precio'])?></div><p><?=$p['stock']>0?'Existencias: '.$p['stock']:'Agotado'?></p>
<?php if($p['stock']>0):?><form method="post" style="display:flex;gap:10px"><?=field()?><input type="number" name="qty" min="1" max="<?=$p['stock']?>" value="1" style="width:90px"><button class="btn">Agregar al carrito</button></form><?php endif;?></div></div><?php foot();
