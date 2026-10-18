<?php
include 'Cart.php';
$cart = new Cart;
include 'dbConfig.php';

if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])){
    if($_REQUEST['action'] == 'addToCart' && !empty($_REQUEST['id'])){
        $productID = $_REQUEST['id'];
        $query = $db->query("SELECT * FROM productos WHERE id = ".$productID);
        $row = $query->fetch_assoc();
        $itemData = array(
            'id' => $row['id'],
            'name' => $row['nombre'],
            'price' => $row['precio'],
            'qty' => 1,
            'image' => $row['imagen']
        );
        $insertItem = $cart->insert($itemData);
        // Regresa a la misma pagina para que veas el cambio
        header("Location: index.php");
    }
    elseif($_REQUEST['action'] == 'removeCartItem' && !empty($_REQUEST['id'])){
        $deleteItem = $cart->remove($_REQUEST['id']);
        header("Location: index.php");
    }
    elseif($_REQUEST['action'] == 'placeOrder'){
        // Guarda la orden
        $insertOrder = $db->query("INSERT INTO ordenes (cliente_id, total, fecha) VALUES (1, '".$cart->total()."', NOW())");
        if($insertOrder){
            $orderID = $db->insert_id;
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
                $db->query("INSERT INTO detalles_orden (orden_id, producto_id, cantidad) VALUES ('".$orderID."', '".$item['id']."', '".$item['qty']."')");
            }
            $cart->destroy();
            header("Location: orderSuccess.php?id=$orderID");
        }
    }
}
?>