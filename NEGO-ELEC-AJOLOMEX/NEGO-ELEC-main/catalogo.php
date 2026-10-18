<?php require 'inc.php'; head('Catálogo');
$c=isset($_GET['c'])&&$_GET['c']!==''?(int)$_GET['c']:-1;$s='%'.($_GET['q']??'').'%';
$L=rows('SELECT p.*,a.nombre an,a.estado ae FROM productos p JOIN artesanos a ON a.id=p.artesano_id WHERE p.activo=1 AND (?=-1 OR p.categoria=?) AND p.nombre LIKE ? ORDER BY p.id','iis',$c,$c,$s);?>
<h1>Catálogo</h1><p class="mut">Todas las piezas disponibles de nuestros artesanos.</p>
<form style="display:flex;gap:10px;max-width:700px;margin:18px 0"><input name="q" placeholder="Buscar huipil, café, alebrije…" value="<?=e($_GET['q']??'')?>"><button class="btn">Buscar</button></form>
<div><a class="chip <?=$c<0?'on':''?>" href="catalogo.php">Todas</a><?php foreach(CATS as $i=>$n)echo '<a class="chip '.($c===$i?'on':'').'" href="catalogo.php?c='.$i.'">'.e($n).'</a>';?></div>
<div class="grid" style="margin-top:20px"><?php foreach($L as $p)echo pcard($p); if(!$L)echo '<p>No hay resultados.</p>';?></div><?php foot();
