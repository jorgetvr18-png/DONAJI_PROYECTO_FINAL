<?php
include 'dbConfig.php';
include 'Cart.php';
$cart = new Cart;
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <title>Famms - Catálogo</title>
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
      <link href="css/font-awesome.min.css" rel="stylesheet" />
      <link href="css/style.css" rel="stylesheet" />
      <link href="css/responsive.css" rel="stylesheet" />
   </head>
   <body class="sub_page"> <div class="hero_area">
         <header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="index.php"><img width="250" src="images/logo.png" alt="#" /></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                           <a class="nav-link" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item active">
                           <a class="nav-link" href="product.php">Productos <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="blog.php">Blog</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="contact.php">Contacto</a>
                        </li>
                         <li class="nav-item">
                           <a class="nav-link" href="viewCart.php">
                              <i class="fa fa-shopping-cart"></i>
                              <?php if($cart->total_items() > 0){ ?>
                                 <span class="badge badge-danger"><?php echo $cart->total_items(); ?></span>
                              <?php } ?>
                           </a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
         </header>
         </div>
      
      <section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Todos los <span>Productos</span>
               </h2>
            </div>
            <div class="row">
               
               <?php
               // Consulta sin límite para ver todo
               $query = $db->query("SELECT * FROM productos ORDER BY id DESC");
               if($query->num_rows > 0){
                   while($row = $query->fetch_assoc()){
               ?>
               
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="cartAction.php?action=addToCart&id=<?php echo $row['id']; ?>" class="option1">
                           Agregar al Carrito
                           </a>
                           <a href="cartAction.php?action=addToCart&id=<?php echo $row['id']; ?>" class="option2">
                           Comprar Ahora
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="images/<?php echo !empty($row['imagen']) ? $row['imagen'] : 'p1.png'; ?>" alt="">
                     </div>
                     <div class="detail-box">
                        <h5><?php echo $row['nombre']; ?></h5>
                        <h6>$<?php echo number_format($row['precio'], 2); ?></h6>
                     </div>
                  </div>
               </div>
               
               <?php 
                   } 
               } else { echo "<p class='text-center w-100'>No hay productos disponibles.</p>"; } 
               ?>

            </div>
         </div>
      </section>
      <footer class="footer_section">
         <div class="container">
            <div class="row">
               <div class="col-md-4 footer-col">
                  <div class="footer_contact">
                     <h4>Contacto</h4>
                     <div class="contact_link_box">
                        <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i><span>Ubicación</span></a>
                        <a href=""><i class="fa fa-phone" aria-hidden="true"></i><span>+01 1234567890</span></a>
                        <a href=""><i class="fa fa-envelope" aria-hidden="true"></i><span>demo@gmail.com</span></a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 footer-col">
                  <div class="footer_detail">
                     <a href="index.php" class="footer-logo">Famms</a>
                     <p>Tienda oficial.</p>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <script src="js/jquery-3.4.1.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>