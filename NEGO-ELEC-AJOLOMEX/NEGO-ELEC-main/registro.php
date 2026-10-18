<?php require 'inc.php'; chk();$err='';
if($_SERVER['REQUEST_METHOD']==='POST'){$n=trim($_POST['n']);$e=strtolower(trim($_POST['e']));$p=$_POST['p'];
if(!$n||!filter_var($e,FILTER_VALIDATE_EMAIL)||strlen($p)<8)$err='Completa tu nombre, un correo válido y una contraseña de 8+ caracteres.';
elseif(row('SELECT id FROM usuarios WHERE email=?','s',$e))$err='Ese correo ya está registrado.';
else{$rol=row('SELECT COUNT(*) c FROM usuarios')['c']?'cliente':'admin'; // el primer usuario es administrador
$s=q('INSERT INTO usuarios(nombre,email,pass_hash,rol) VALUES(?,?,?,?)','ssss',$n,$e,password_hash($p,PASSWORD_DEFAULT),$rol);session_regenerate_id(true);$_SESSION['uid']=$s->insert_id;go('index.php');}}
head('Registro');?><h1>Crear cuenta</h1><p class="mut">El primer usuario registrado queda como administrador.</p>
<form method="post" class="card" style="max-width:560px"><?=field()?><?=$err?"<div class='msg err'>$err</div>":''?><label>Nombre completo</label><input name="n" required><label>Correo electrónico</label><input name="e" type="email" required><label>Contraseña (mín. 8)</label><input name="p" type="password" required><br><br><button class="btn" style="width:100%">Registrarme</button></form><?php foot();
