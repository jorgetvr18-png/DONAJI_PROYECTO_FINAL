<?php
include 'dbConfig.php';
include 'Cart.php';
$cart = new Cart;

if($cart->total_items() <= 0){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Checkout - Theme</title>
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container py-5 ff-jost">
        <div class="text-center mb-5">
            <h2>Finalizar Compra</h2>
        </div>

        <div class="row">
            <div class="col-md-7 mb-4">
                <div class="card p-4 border-0 shadow-sm">
                    <h4 class="mb-3">Datos de Envío</h4>
                    <form>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label class="form-label">Nombre</label>
                                <input type="text" class="form-control" placeholder="" required>
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label">Apellidos</label>
                                <input type="text" class="form-control" placeholder="" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" placeholder="tu@email.com">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Dirección</label>
                                <input type="text" class="form-control" placeholder="Calle 123" required>
                            </div>
                        </div>
                        
                        <hr class="my-4">
                        
                        <h4 class="mb-3">Método de Pago</h4>
                        <div class="form-check">
                            <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked>
                            <label class="form-check-label" for="credit">Tarjeta de Crédito / Débito</label>
                        </div>
                        <div class="form-check">
                            <input id="paypal" name="paymentMethod" type="radio" class="form-check-input">
                            <label class="form-check-label" for="paypal">PayPal</label>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-5">
                <div class="card p-4 border-0 shadow-sm">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-primary">Tu Pedido</span>
                        <span class="badge bg-primary rounded-pill"><?php echo $cart->total_items(); ?></span>
                    </h4>
                    <ul class="list-group mb-3">
                        <?php
                        if($cart->total_items() > 0){
                            $cartItems = $cart->contents();
                            foreach($cartItems as $item){
                        ?>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0"><?php echo $item['name']; ?></h6>
                                <small class="text-muted">Cant: <?php echo $item['qty']; ?></small>
                            </div>
                            <span class="text-muted">$<?php echo number_format($item['subtotal'], 2); ?></span>
                        </li>
                        <?php } } ?>
                        <li class="list-group-item d-flex justify-content-between bg-light">
                            <span class="fw-bold">Total (MXN)</span>
                            <strong class="fw-bold">$<?php echo number_format($cart->total(), 2); ?></strong>
                        </li>
                    </ul>

                    <a href="cartAction.php?action=placeOrder" class="w-100 btn btn-dark btn-lg py-3">CONFIRMAR COMPRA</a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>