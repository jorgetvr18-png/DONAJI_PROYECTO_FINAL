<?php require 'inc.php'; chk();$err='';
if($_SERVER['REQUEST_METHOD']==='POST'){$u=row('SELECT * FROM usuarios WHERE email=?','s',strtolower(trim($_POST['e'])));if($u&&password_verify($_POST['p'],$u['pass_hash'])){session_regenerate_id(true);$_SESSION['uid']=$u['id'];go(cartCount()?'checkout.php':'index.php');}$err='Correo o contraseña incorrectos.';}
head('Iniciar sesión');?><h1>Iniciar sesión</h1><p class="mut">Entra para comprar, ver tus pedidos o administrar tu tienda.</p>
<form method="post" class="card" style="max-width:560px"><?=field()?><?=$err?"<div class='msg err'>$err</div>":''?><label>Correo electrónico</label><input name="e" type="email" required><label>Contraseña</label><input name="p" type="password" required><br><br><button class="btn" style="width:100%">Entrar</button></form>
<p>¿No tienes cuenta? <a style="color:var(--pink)" href="registro.php">Regístrate</a></p><?php foot();
