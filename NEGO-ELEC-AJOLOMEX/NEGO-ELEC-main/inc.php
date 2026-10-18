<?php
session_start();
require __DIR__.'/config.php';
mysqli_report(MYSQLI_REPORT_ERROR|MYSQLI_REPORT_STRICT);
$db=new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME); $db->set_charset('utf8mb4');
const CATS=['Textiles y Vestimenta Tradicional','Alfarería y Cerámica','Joyería y Accesorios','Talla en Madera y Cartonería','Productos Agroartesanales y Gastronómicos','Cuidado Personal y Cosmética Natural'];
const ETQ=['pendiente'=>'Pendiente de pago','pagado'=>'Pagado','en_preparacion'=>'En preparación','enviado'=>'Enviado','entregado'=>'Entregado'];
function q($sql,$t='',...$p){global $db;$s=$db->prepare($sql);if($p)$s->bind_param($t,...$p);$s->execute();return $s;}
function rows($sql,$t='',...$p){return q($sql,$t,...$p)->get_result()->fetch_all(MYSQLI_ASSOC);}
function row($sql,$t='',...$p){return rows($sql,$t,...$p)[0]??null;}
function e($s){return htmlspecialchars((string)$s,ENT_QUOTES,'UTF-8');}
function money($n){return '$'.number_format((float)$n,2);}
function go($u){header("Location: $u");exit;}
function user(){static $u=false;if($u===false)$u=isset($_SESSION['uid'])?row('SELECT id,nombre,email,rol FROM usuarios WHERE id=?','i',$_SESSION['uid']):null;return $u;}
function need($roles=null){$u=user();if(!$u)go('login.php');if($roles&&!in_array($u['rol'],$roles)){http_response_code(403);exit('Acceso denegado');}return $u;}
function csrf(){return $_SESSION['t']??=bin2hex(random_bytes(16));}
function field(){return '<input type="hidden" name="t" value="'.csrf().'">';}
function chk(){if($_SERVER['REQUEST_METHOD']==='POST'&&!hash_equals(csrf(),$_POST['t']??''))exit('Token inválido');}
function cartCount(){return array_sum($_SESSION['cart']??[]);}
function cartItems(){$c=$_SESSION['cart']??[];if(!$c)return[];$ids=implode(',',array_map('intval',array_keys($c)));$r=rows("SELECT p.*,a.nombre an FROM productos p JOIN artesanos a ON a.id=p.artesano_id WHERE p.activo=1 AND p.id IN($ids)");foreach($r as &$p)$p['q']=min($c[$p['id']],$p['stock']);return array_filter($r,fn($p)=>$p['q']>0);}
function stripe($path,$data=null){$ch=curl_init("https://api.stripe.com/v1/$path");curl_setopt_array($ch,[CURLOPT_USERPWD=>STRIPE_SECRET.':',CURLOPT_RETURNTRANSFER=>1,CURLOPT_TIMEOUT=>20]);if($data!==null)curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query($data));return json_decode(curl_exec($ch),true);}
function head($t='AJOLOMEX'){$u=user();$n=cartCount();echo '<!DOCTYPE html><html lang="es"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>'.e($t).' · AJOLOMEX</title><link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@600;800&family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"><link rel="stylesheet" href="assets/ajolomex.css"></head><body><header><nav><a class="logo" href="index.php">🦎 AJOLOMEX</a><a href="index.php">Inicio</a><a href="catalogo.php">Catálogo</a><a href="artesanos.php">Artesanos</a><a href="como-comprar.php">Cómo comprar</a><a href="contacto.php">Contacto</a><span class="sp"></span><a href="carrito.php">🛒 Carrito'.($n?" ($n)":'').'</a>';
if($u){echo '<a href="pedidos.php">👤 '.e(explode(' ',$u['nombre'])[0]).'</a>';if(in_array($u['rol'],['artesano','admin']))echo '<a href="artesano.php">Mi tienda</a>';if($u['rol']=='admin')echo '<a href="admin.php">Admin</a>';echo '<a href="logout.php">Salir</a>';}else echo '<a class="btn" href="login.php">Entrar</a>';
echo '</nav></header><main class="wrap">';}
function foot(){echo '</main><footer><div><section><h3>AJOLOMEX</h3><span class="mut">Marketplace para artesanos y creadores locales. Proyecto académico del ITGAM — Negocios Electrónicos.</span></section><section><b>Navegación</b><br><a href="catalogo.php">Catálogo</a><br><a href="artesanos.php">Artesanos</a><br><a href="como-comprar.php">Cómo comprar</a></section><section><b>Contacto</b><br><a href="contacto.php">Formulario de contacto</a></section></div><p style="text-align:center;opacity:.6">© 2026 AJOLOMEX. Pagos en modo de prueba (Stripe test).</p></footer></body></html>';}
function pcard($p){$h=[ '#f1e1d6','#fbe9dc','#ede0d4','#efe3f7','#dff0f3','#eaf3de','#dff1e6','#fde3ef'][$p['id']%8];return '<a class="card pc" href="producto.php?id='.$p['id'].'"><div class="im" style="background:'.$h.'">'.e($p['icono']).'</div><div class="bd"><div class="cat">'.e(CATS[$p['categoria']]).'</div><h3>'.e($p['nombre']).'</h3><div class="mut">'.e($p['an']).' · '.e($p['ae']).'</div><div class="fl"><span class="price">'.money($p['precio']).'</span>'.($p['stock']<=3?'<span class="tag">Últimas '.$p['stock'].'</span>':'').'</div></div></a>';}
