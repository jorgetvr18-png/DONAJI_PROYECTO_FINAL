<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>¡Gracias!</title>
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
</head>
<body class="d-flex align-items-center justify-content-center" style="height: 100vh; background-color: #f8f9fa;">
    <div class="text-center">
        <h1 class="display-1 text-success">✔</h1>
        <h1 class="fw-bold">¡Gracias por tu compra!</h1>
        <p class="lead text-muted">Tu pedido #<?php echo $_GET['id']; ?> ha sido confirmado correctamente.</p>
        <a href="index.php" class="btn btn-dark mt-3 px-5">Volver a la Tienda</a>
    </div>
</body>
</html>