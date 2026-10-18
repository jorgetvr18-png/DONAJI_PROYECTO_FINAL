<?php
include 'dbConfig.php';
include 'Cart.php';
$cart = new Cart;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tu Carrito - Theme</title>
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    // Script para actualizar cantidad automáticamente
    function updateCartItem(obj,id){
        $.get("cartAction.php", {action:"updateCartItem", id:id, qty:obj.value}, function(data){
            if(data == 'ok'){ location.reload(); }else{ alert('Error al actualizar'); }
        });
    }
    </script>
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-white border-bottom py-3">
        <div class="container">
            <a class="navbar-brand ff-jost fw-bold" href="index.php">Theme.</a>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="index.php">Seguir Comprando</a></li>
            </ul>
        </div>
    </nav>

    <div class="container py-5 ff-jost">
        <h2 class="mb-4">Tu Carrito de Compras</h2>
        
        <div class="row">
            <div class="col-lg-8">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                th>Producto</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                                <th>Subtotal</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if($cart->total_items() > 0){
                                $cartItems = $cart->contents();
                                foreach($cartItems as $item){
                                    $img = isset($item['image']) ? 'assets/media/products/'.$item['image'] : 'assets/media/products/1.webp';
                            ?>
                            <tr class="align-middle">
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="<?php echo $img; ?>" width="60" class="me-3">
                                        <span><?php echo $item["name"]; ?></span>
                                    </div>
                                </td>
                                <td>$<?php echo number_format($item["price"], 2); ?></td>
                                <td>
                                    <input type="number" class="form-control text-center" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')" style="width: 70px;">
                                </td>
                                <td class="fw-bold">$<?php echo number_format($item["subtotal"], 2); ?></td>
                                <td>
                                    <a href="cartAction.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>" class="text-danger" onclick="return confirm('¿Borrar?')">
                                        Eliminar
                                    </a>
                                </td>
                            </tr>
                            <?php } } else { ?>
                            <tr><td colspan="5" class="text-center py-4">Tu carrito está vacío.</td></tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="card bg-light border-0 p-4">
                    <h5 class="mb-3">Resumen</h5>
                    <div class="d-flex justify-content-between mb-3">
                        <span>Subtotal</span>
                        <strong>$<?php echo number_format($cart->total(), 2); ?></strong>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <span>Envío</span>
                        <span class="text-success">Gratis</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between mb-4">
                        <span class="fs-5 fw-bold">Total</span>
                        <span class="fs-5 fw-bold">$<?php echo number_format($cart->total(), 2); ?></span>
                    </div>
                    <?php if($cart->total_items() > 0){ ?>
                        <a href="checkout.php" class="btn btn-dark w-100 py-2">PROCEDER AL PAGO</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

</body>
</html>