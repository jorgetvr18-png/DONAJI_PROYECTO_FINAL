<?php
include 'dbConfig.php';
include 'Cart.php';
$cart = new Cart;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theme</title>
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/flickity.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  </head>
<body>
   
    <header>
        <div class="bg-gray">

            <div class="container">
              <div class="navbar navbar-expand-lg d-flex py-2">
                <div class="d-flex" style="margin-right: 2.5rem;">
                  <ion-icon class="me-1" name="airplane-outline"></ion-icon>
                  <span class="fs-small">Compras A Todo El Mundo</span>
                </div>
                <button class="navbar-toggler border-none" type="button" data-bs-toggle="collapse" data-bs-target="#contentTopBar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="contentTopBar">
                  <div class="d-flex justify-content-between" style="flex-grow: 1;">
                    <ul class="navbar-nav d-flex list-inline mb-0 ff-jost fw-500">
                      <li class="me-3 nav-item pl-0">
                          <div class="dropdown">
                              <span class="dropdown-toggle fs-small" data-bs-toggle="dropdown" aria-expanded="false">
                                  <img class="me-1" src="assets/media/flags/usa.svg" alt="">
                                  United State
                              </span>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">México</a></li>
                                <li><a class="dropdown-item" href="#">Japon</a></li>
                                <li><a class="dropdown-item" href="#">China</a></li>
                              </ul>
                          </div>
                      </li>
                      <li class="me-3 nav-item pl-0"> 
                          <div class="dropdown">
                              <span class="dropdown-toggle fs-small" data-bs-toggle="dropdown" aria-expanded="false">
                                  USD
                              </span>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">MXN</a></li>
                                <li><a class="dropdown-item" href="#">JPY</a></li>
                                <li><a class="dropdown-item" href="#">CHF</a></li>
                              </ul>
                          </div>
                      </li>
                      <li class="nav-item pl-0">
                          <div class="dropdown">
                              <span class="dropdown-toggle fs-small" data-bs-toggle="dropdown" aria-expanded="false">
                                  Español
                              </span>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Latino America</a></li>
                                <li><a class="dropdown-item" href="#">日本語</a></li>
                                <li><a class="dropdown-item" href="#">中国人</a></li>
                              </ul>
                          </div>
                      </li>
                    </ul>
  
                    <ul class="navbar-nav d-flex list-inline mb-0 ff-jost me-5 fw-500 fs-small" style="margin-right: 0px !important;">
                      <li class="me-3 nav-item">
                          <span>Compras</span>
                      </li>
                      <li class="me-3 nav-item">
                          <span>FAQ</span>
                      </li>
                      <li class="nav-item">
                          <a class="text-dc text-dark" href="./contact.html">CONTACTO</a>
                      </li>
                    </ul>

                    <ul class="d-flex list-inline mb-0 text-muted">
                        <li class="me-2 ">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </li>
                        <li class="me-2 ">
                            <ion-icon name="logo-tiktok"></ion-icon>
                        </li>
                        <li class="me-2 ">
                            <ion-icon name="logo-youtube"></ion-icon>
                        </li>
                        <li class="">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- END FIRST SECTION -->

            <!-- START SECOND SECTION -->
            <nav class="navbar navbar-expand-lg bg-white pbt-1">
                <div class="container">
                  <a class="navbar-brand ff-jost" id="nb-brand" href="#">Theme.</a>
                  <button class="navbar-toggler border-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ff-jost mx-auto mb-2 mb-lg-0">
                      <li class="nav-item pl-0 fw-500">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                      </li>
                      <li class="nav-item pl-0 fw-500">
                        <a class="nav-link active" href="#">Compras</a>
                      </li>
                      <li class="nav-item pl-0 fw-500 dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          PAGOS
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Visa</a></li>
                          <li><a class="dropdown-item" href="#">OPEN PAYMENTS</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">American Express</a></li>
                        </ul>
                      </li>
                      <li class="nav-item pl-0 fw-500">
                        <a class="nav-link active" href="#">Blog</a>
                      </li>
                    </ul>
                    <div class="d-flex align-items-center">
                      <ul class="d-flex list-inline mb-0">
                        <li class="me-3">
                          <a href="">
                            <ion-icon class="fs-1-2 text-dark" name="search-outline"></ion-icon>
                          </a>
                        </li>
                        <li class="me-3">
                          <a href="./auth.html">
                            <ion-icon class="fs-1-2 text-dark" name="person-outline"></ion-icon>
                          </a>
                        </li>
                        <li class="me-3">
                          <a href="">
                            <ion-icon class="fs-1-2 text-dark" name="heart-outline"></ion-icon>
                          </a>
                        </li>
                        <li>
                          <a class="cursor-pointer position-relative" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">
    <ion-icon class="fs-1-2 text-dark" name="cart-outline"></ion-icon>
    <?php if($cart->total_items() > 0){ ?>
    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 0.6rem;">
        <?php echo $cart->total_items(); ?>
    </span>
    <?php } ?>
</a>                          
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
            </nav>
            <!-- END SECOND SECTION -->
        </div>
    </header>

    <!-- START THIRD SECTION -->
    <div class="ff-jost text-center bg-dark py-3 bg-pattern">
      <span class="text-white fw-500" style="font-size: 0.9rem;">⚡️ HAPPY HOLIDAY DEALS ON EVERYTHING ⚡️</span>
    </div>
    <!-- END THIRD SECTION -->

    <!-- START MAIN SECTION -->
    <div class="row main-carousel" style="margin-right: 0px;">
      <div class="col-12 col-lg-4 col-md-6 col-sm-12 col-xs-12 px-0 h-470px bg-img" style="background-image: url(./assets/media/bg/cover-1.jpg);">
        <div class="card h-470px card-hover bg-transparent border-none h-100">
          <div class="card-body d-flex align-items-end justify-content-center">
            <h1 class="ff-jost fw-600 fs-2-8 text-white" >Women</h1>
          </div>
          <div class="card-body d-flex align-items-end justify-content-center">
            <button class="btn mb-4 btn-primary btn-style d-flex align-items-center">
              Excesión Mujer
              <ion-icon class="ms-2" name="arrow-forward-outline"></ion-icon>
            </button>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4 col-md-6 col-sm-12 col-xs-12 px-0 h-470px bg-img" style="background-image: url(./assets/media/bg/cover-2.jpg);">
        <div class="card h-470px card-hover bg-transparent border-none h-100">
          <div class="card-body d-flex align-items-end justify-content-center">
            <h1 class="ff-jost fw-600 fs-2-8 text-white" >Men</h1>
          </div>
          <div class="card-body d-flex align-items-end justify-content-center">
            <button class="btn mb-4 btn-primary btn-style d-flex align-items-center">
              Shop Women
              <ion-icon class="ms-2" name="arrow-forward-outline"></ion-icon>
            </button>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4 col-md-6 col-sm-12 col-xs-12 px-0 h-470px bg-img" style="background-image: url(./assets/media/bg/cover-3.jpg);">
        <div class="card h-470px card-hover bg-transparent border-none h-100">
          <div class="card-body d-flex align-items-end justify-content-center">
            <h1 class="ff-jost fw-600 fs-2-8 text-white" >Kids</h1>
          </div>
          <div class="card-body d-flex align-items-end justify-content-center">
            <button class="btn mb-4 btn-primary btn-style d-flex align-items-center">
              Shop Mujer
              <ion-icon class="ms-2" name="arrow-forward-outline"></ion-icon>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- START MAIN SECTION -->
    <!-- START FEATURES SECTION -->
    <div class="container">
      <div class="row pt-5 pb-4 border-bottom">
        <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
          <div class="d-flex">
            <ion-icon class="icon-style" name="airplane-outline"></ion-icon>
            <div class="d-flex flex-column ms-3 ff-jost">
              <span class="fw-500 fs-small text-spacing">Compras Mujer</span>
              <small class="text-muted">From all orders over $100</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
          <div class="d-flex">
         
            <ion-icon class="icon-style" name="refresh-outline"></ion-icon>
            <div class="d-flex flex-column ms-3 ff-jost">
              <span class="fw-500 fs-small text-spacing"></span>
              <small class="text-muted">Puedes Regresar El Pedido Durante Los Proximos 30 Días.</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
          <div class="d-flex">
            <ion-icon class="icon-style" name="lock-closed-outline"></ion-icon>
            <div class="d-flex flex-column ms-3 ff-jost">
              <span class="fw-500 fs-small text-spacing">SECURE SHOPPING</span>
              <small class="text-muted">You're in safe hands</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
          <div class="d-flex">
            <ion-icon class="icon-style" name="cube-outline"></ion-icon>
            <div class="d-flex flex-column ms-3 ff-jost">
              <span class="fw-500 fs-small text-spacing">OVER 10,000 STYLES</span>
              <small class="text-muted">We have everything you need</small>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END FEATURES SECTION -->
    <!-- START BEST PICKS SECTION -->
    <section class="py-28">
      <div class="container">
        <div class="row" style="margin-bottom: 3rem;">
          <div class="col-12 text-center ff-jost">
            <div class="mb-2">
              <small class="text-muted fw-500">Nueva Colección</small>
            </div>
            <div class="mb-3">
              <h1>Best Picks 2025</h1>
            </div>
            <p>Appear, dry there darkness they're seas, dry waters thing fly midst. Beast, above fly brought Very green.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 mb-4 h-400px">
            <div class="card h-100 border-none" style="background-image: url(./assets/media/bg/product-1.jpg);background-size: cover;border-radius: 0px;">
              <div class="card-body d-flex flex-column justify-content-center align-items-center ff-jost">
                <span class="text-white fw-500 fs-2">Bags Collection</span>
                <a href=""  class="text-white fw-500" style="text-decoration: none;">
                  Comprea Ahora
                  <ion-icon name="arrow-forward-outline"></ion-icon>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 mb-4 h-400px">
            <div class="card h-100 border-none" style="background-image: url(./assets/media/bg/product-2.jpg);background-size: cover;border-radius: 0px;">
              <div class="card-body px-4 d-flex flex-column justify-content-center align-items-start ff-jost" style="position: relative;">
                <span class="text-dark fw-500 fs-2">Printed men’s Shirts</span>
                <a href=""  class="text-dark fw-500" style="text-decoration: none;">
                  Shop Now
                  <ion-icon name="arrow-forward-outline"></ion-icon>
                </a>

                <div class="d-flex justify-content-center align-items-center flex-column content-round ff-jost" style="position: absolute;">
                  <small class="text-white">save</small>
                  <span class="text-white fs-3 fw-500">30%</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8 mb-4 h-400px">
            <div class="card h-100 border-none" style="background-image: url(./assets/media/bg/product-3.jpg);background-size: cover;border-radius: 0px;">
              <div class="card-body px-4 d-flex flex-column justify-content-center align-items-start ff-jost">
                <span class="text-dark fw-500 fs-2">
                  Basic women’s Dresses
                </span>
                <a href=""  class="text-dark fw-500" style="text-decoration: none;">
                  Shop Now
                  <ion-icon name="arrow-forward-outline"></ion-icon>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4 h-400px">
            <div class="card h-100 border-none" style="background-image: url(./assets/media/bg/product-4.jpg);background-size: cover;border-radius: 0px;">
              <div class="card-body d-flex flex-column justify-content-center align-items-center ff-jost">
                <span class="text-white fw-500 fs-2">Bags Collection</span>
                <a href=""  class="text-white fw-500" style="text-decoration: none;">
                  Shop Now
                  <ion-icon name="arrow-forward-outline"></ion-icon>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END BEST PICKS SECTION -->
    <!-- START TOP SELLERS SECTION -->
    <section class="pb-5">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-4 ff-jost">
            <h1>
              Top month Sellers
            </h1>
          </div>
          <div class="col-12">
            
            <div class="row">
              <?php
              // Consultamos la base de datos (8 productos)
              $query = $db->query("SELECT * FROM productos ORDER BY id DESC LIMIT 8");
              
              if($query->num_rows > 0){
                  while($row = $query->fetch_assoc()){
                      // Validar si existe la imagen, si no, poner la por defecto
                      $img = !empty($row['imagen']) ? 'assets/media/products/'.$row['imagen'] : 'assets/media/products/1.webp';
              ?>
              
              <div class="col-6 col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-3">
                <div class="card border-none">
                  <div class="card-img position-relative">
                    <img class="w-100" src="<?php echo $img; ?>" alt="<?php echo $row['nombre']; ?>">
                    
                    <div class="d-flex justify-content-center gap-2 position-absolute w-100" style="bottom: 1.2rem;">
                      
                      <button class="content-round-1 d-flex align-items-center justify-content-center">
                        <ion-icon class="fs-1-2 text-dark" name="eye-outline"></ion-icon>
                      </button>
                      
                      <a href="cartAction.php?action=addToCart&id=<?php echo $row['id']; ?>" class="content-round-1 d-flex align-items-center justify-content-center text-dark" style="text-decoration:none;">
                        <ion-icon class="fs-1-2" name="cart-outline"></ion-icon>
                      </a>

                      <button class="content-round-1 d-flex align-items-center justify-content-center">
                        <ion-icon class="fs-1-2 text-dark" name="heart-outline"></ion-icon>
                      </button>
                    </div>
                  </div>
                  
                  <div class="card-body px-0">
                    <small class="fw-500 text-muted">Theme Store</small>
                    <h6 class="fw-500" style="margin-bottom: 0.1rem;">
                      <?php echo $row['nombre']; ?>
                    </h6>
                    <span class="fw-500 text-muted">$<?php echo number_format($row['precio'], 2); ?></span>
                  </div>
                </div>
              </div>
              <?php 
                  } // Fin del while
              } else { 
                  echo "<p class='text-center w-100 py-5'>No hay productos cargados en la base de datos.</p>"; 
              } 
              ?>
            </div>
            </div>
                <div class="card border-none">
                  <div class="card-img position-relative">
                    <img class="w-100" src="./assets/media/products/1.webp" alt="">
                    <div class="d-flex justify-content-center gap-2 position-absolute w-100" style="bottom: 1.2rem;">
                      <button class="content-round-1 d-flex align-items-center justify-content-center">
                        <ion-icon class="fs-1-2 text-dark" name="eye-outline"></ion-icon>
                      </button>
                      <button class="content-round-1 d-flex align-items-center justify-content-center">
                        <ion-icon class="fs-1-2 text-dark" name="cart-outline"></ion-icon>
                      </button>
                      <button class="content-round-1 d-flex align-items-center justify-content-center">
                        <ion-icon class="fs-1-2 text-dark" name="heart-outline"></ion-icon>
                      </button>
                    </div>
                  </div>
                  
                  <div class="card-body px-0">
                    <small class="fw-500 text-muted">Shoes</small>
                    <h6 class="fw-500" style="margin-bottom: 0.1rem;">
                      Leather
                    </h6>
                    <span class="fw-500 text-muted">$129.00</span>
                  </div>
                </div>
              </div>
              <div class="col-6 col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-3">
                <div class="card border-none">
                  <div class="card-img position-relative">
                    <img class="w-100" src="./assets/media/products/2.webp" alt="">
                    <div class="d-flex justify-content-center gap-2 position-absolute w-100" style="bottom: 1.2rem;">
                      <button class="content-round-1 d-flex align-items-center justify-content-center">
                        <ion-icon class="fs-1-2 text-dark" name="eye-outline"></ion-icon>
                      </button>
                      <button class="content-round-1 d-flex align-items-center justify-content-center">
                        <ion-icon class="fs-1-2 text-dark" name="cart-outline"></ion-icon>
                      </button>
                      <button class="content-round-1 d-flex align-items-center justify-content-center">
                        <ion-icon class="fs-1-2 text-dark" name="heart-outline"></ion-icon>
                      </button>
                    </div>
                  </div>
                  
                  <div class="card-body px-0">
                    <small class="fw-500 text-muted">Shoes</small>
                    <h6 class="fw-500" style="margin-bottom: 0.1rem;">
                      Leather mid-heel Sandals
                    </h6>
                    <span class="fw-500 text-muted">$129.00</span>
                  </div>
                </div>
              </div>
              <div class="col-6 col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-3">
                <div class="card border-none">
                  <div class="card-img position-relative">
                    <img class="w-100" src="./assets/media/products/3.webp" alt="">
                    <div class="d-flex justify-content-center gap-2 position-absolute w-100" style="bottom: 1.2rem;">
                      <button class="content-round-1 d-flex align-items-center justify-content-center">
                        <ion-icon class="fs-1-2 text-dark" name="eye-outline"></ion-icon>
                      </button>
                      <button class="content-round-1 d-flex align-items-center justify-content-center">
                        <ion-icon class="fs-1-2 text-dark" name="cart-outline"></ion-icon>
                      </button>
                      <button class="content-round-1 d-flex align-items-center justify-content-center">
                        <ion-icon class="fs-1-2 text-dark" name="heart-outline"></ion-icon>
                      </button>
                    </div>
                  </div>
                  
                  <div class="card-body px-0">
                    <small class="fw-500 text-muted">Shoes</small>
                    <h6 class="fw-500" style="margin-bottom: 0.1rem;">
                      Leather mid-heel Sandals
                    </h6>
                    <span class="fw-500 text-muted">$129.00</span>
                  </div>
                </div>
              </div>
              <div class="col-6 col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-3">
                <div class="card border-none">
                  <div class="card-img position-relative">
                    <img class="w-100" src="./assets/media/products/4.webp" alt="">
                    <div class="d-flex justify-content-center gap-2 position-absolute w-100" style="bottom: 1.2rem;">
                      <button class="content-round-1 d-flex align-items-center justify-content-center">
                        <ion-icon class="fs-1-2 text-dark" name="eye-outline"></ion-icon>
                      </button>
                      <button class="content-round-1 d-flex align-items-center justify-content-center">
                        <ion-icon class="fs-1-2 text-dark" name="cart-outline"></ion-icon>
                      </button>
                      <button class="content-round-1 d-flex align-items-center justify-content-center">
                        <ion-icon class="fs-1-2 text-dark" name="heart-outline"></ion-icon>
                      </button>
                    </div>
                  </div>
                  
                  <div class="card-body px-0">
                    <small class="fw-500 text-muted">Shoes</small>
                    <h6 class="fw-500" style="margin-bottom: 0.1rem;">
                      Leather mid-heel Sandals
                    </h6>
                    <span class="fw-500 text-muted">$129.00</span>
                  </div>
                </div>
              </div>

              <div class="col-6 col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-3">
                <div class="card border-none">
                  <div class="card-img position-relative">
                    <img class="w-100" src="./assets/media/products/5.webp" alt="">
                    <div class="d-flex justify-content-center gap-2 position-absolute w-100" style="bottom: 1.2rem;">
                      <button class="content-round-1 d-flex align-items-center justify-content-center">
                        <ion-icon class="fs-1-2 text-dark" name="eye-outline"></ion-icon>
                      </button>
                      <button class="content-round-1 d-flex align-items-center justify-content-center">
                        <ion-icon class="fs-1-2 text-dark" name="cart-outline"></ion-icon>
                      </button>
                      <button class="content-round-1 d-flex align-items-center justify-content-center">
                        <ion-icon class="fs-1-2 text-dark" name="heart-outline"></ion-icon>
                      </button>
                    </div>
                  </div>
                  
                  <div class="card-body px-0">
                    <small class="fw-500 text-muted">Shoes</small>
                    <h6 class="fw-500" style="margin-bottom: 0.1rem;">
                      Leather mid-heel Sandals
                    </h6>
                    <span class="fw-500 text-muted">$129.00</span>
                  </div>
                </div>
              </div>

              <div class="col-6 col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-3">
                <div class="card border-none">
                  <div class="card-img position-relative">
                    <img class="w-100" src="./assets/media/products/6.webp" alt="">
                    <div class="d-flex justify-content-center gap-2 position-absolute w-100" style="bottom: 1.2rem;">
                      <button class="content-round-1 d-flex align-items-center justify-content-center">
                        <ion-icon class="fs-1-2 text-dark" name="eye-outline"></ion-icon>
                      </button>
                      <button class="content-round-1 d-flex align-items-center justify-content-center">
                        <ion-icon class="fs-1-2 text-dark" name="cart-outline"></ion-icon>
                      </button>
                      <button class="content-round-1 d-flex align-items-center justify-content-center">
                        <ion-icon class="fs-1-2 text-dark" name="heart-outline"></ion-icon>
                      </button>
                    </div>
                  </div>
                  
                  <div class="card-body px-0">
                    <small class="fw-500 text-muted">Shoes</small>
                    <h6 class="fw-500" style="margin-bottom: 0.1rem;">
                      Leather mid-heel Sandals
                    </h6>
                    <span class="fw-500 text-muted">$129.00</span>
                  </div>
                </div>
              </div>
              <div class="col-6 col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-3">
                <div class="card border-none">
                  <div class="card-img position-relative">
                    <img class="w-100" src="./assets/media/products/7.webp" alt="">
                    <div class="d-flex justify-content-center gap-2 position-absolute w-100" style="bottom: 1.2rem;">
                      <button class="content-round-1 d-flex align-items-center justify-content-center">
                        <ion-icon class="fs-1-2 text-dark" name="eye-outline"></ion-icon>
                      </button>
                      <button class="content-round-1 d-flex align-items-center justify-content-center">
                        <ion-icon class="fs-1-2 text-dark" name="cart-outline"></ion-icon>
                      </button>
                      <button class="content-round-1 d-flex align-items-center justify-content-center">
                        <ion-icon class="fs-1-2 text-dark" name="heart-outline"></ion-icon>
                      </button>
                    </div>
                  </div>
                  
                  <div class="card-body px-0">
                    <small class="fw-500 text-muted">Shoes</small>
                    <h6 class="fw-500" style="margin-bottom: 0.1rem;">
                      Leather mid-heel Sandals
                    </h6>
                    <span class="fw-500 text-muted">$129.00</span>
                  </div>
                </div>
              </div>
              <div class="col-6 col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-3">
                <div class="card border-none">
                  <div class="card-img position-relative">
                    <img class="w-100" src="./assets/media/products/8.webp" alt="">
                    <div class="d-flex justify-content-center gap-2 position-absolute w-100" style="bottom: 1.2rem;">
                      <button class="content-round-1 d-flex align-items-center justify-content-center">
                        <ion-icon class="fs-1-2 text-dark" name="eye-outline"></ion-icon>
                      </button>
                      <button class="content-round-1 d-flex align-items-center justify-content-center">
                        <ion-icon class="fs-1-2 text-dark" name="cart-outline"></ion-icon>
                      </button>
                      <button class="content-round-1 d-flex align-items-center justify-content-center">
                        <ion-icon class="fs-1-2 text-dark" name="heart-outline"></ion-icon>
                      </button>
                    </div>
                  </div>
                  
                  <div class="card-body px-0">
                    <small class="fw-500 text-muted">Shoes</small>
                    <h6 class="fw-500" style="margin-bottom: 0.1rem;">
                      Leather mid-heel Sandals
                    </h6>
                    <span class="fw-500 text-muted">$129.00</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END TOP SELLERS SECTION -->
    <!-- START COUNTDOWN SECTION -->
    <section>
      <div style="background-image: url(assets/media/bg/cover-4.jpg);    background-size: cover;">
         <div class="container">
          <div class="row justify-content-end" style="margin-right: 0px;">
            <div class="col-lg-7 col-md-10 col-sm-12 py-10rem">
              <h3 class="ff-jost" style="font-size: 2.3rem;">
                Get -50% from <br>
                Summer Collection
              </h3>
              <div id="countdown">
              
              </div>
              <button class="btn btn-style-dark">
                Shop Now
                <ion-icon name="arrow-forward-outline"></ion-icon>
              </button>
            </div>
          </div>
         </div>
      </div>
    </section>
    <!-- END COUNTDOWN SECTION -->
    <!-- START REVIEWS SECTION -->
    <section class="py-7rem">
      <div class="container">
        <div class="row" style="margin-bottom: 3rem;">
          <div class="col-12 text-center ff-jost">
            <div class="mb-2">
              <small class="text-muted fw-500">WHAT BUYERS SAY</small>
            </div>
            <div class="mb-3">
              <h1>Latest buyers Reviews</h1>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="swiper mySwiper">
              <div class="swiper-wrapper" style="margin-bottom: 5rem;">
                <div class="swiper-slide">
                  <div class="card ff-jost" style="border-radius: 0px;border: 1px solid #e5e5e5;">
                    <div class="card-body" style="padding: 2rem !important;">
                      <div class="d-flex mb-3">
                        <div class="me-3" style="
                        background-image: url(assets/media/products/1.webp);
                        height: 80px;
                        width: 80px;
                        background-size: cover;
                        background-position: 50%;
                        ">
                        </div>
                        <div class="d-flex flex-column"> 
                          <small class="text-uppercase text-muted fw-500 fs-small">
                            T-Shirts
                          </small>
                          <div class="py-1">
                            <span class="text-dark fw-500">
                              Leather mid-heel Sandals
                            </span>
                          </div>
                          <ul class="list-inline d-flex">
                            <li><ion-icon style="font-size: 1.1rem;color: #fb9f24 !important;" name="star-outline"></ion-icon></li>
                            <li><ion-icon style="font-size: 1.1rem;color: #fb9f24 !important;" name="star-outline"></ion-icon></li>
                            <li><ion-icon style="font-size: 1.1rem;color: #fb9f24 !important;" name="star-outline"></ion-icon></li>
                            <li><ion-icon style="font-size: 1.1rem;color: #fb9f24 !important;" name="star-outline"></ion-icon></li>
                            <li><ion-icon style="font-size: 1.1rem;color: #fb9f24 !important;" name="star-outline"></ion-icon></li>
                          </ul>
                        </div>
                      </div>
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur distinctio veritatis fuga, inventore esse aspernatur.
                      </p>
                      <small class="text-muted">
                        Jane Jefferson,
                        <i>29 May.</i>
                      </small>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="card ff-jost" style="border-radius: 0px;border: 1px solid #e5e5e5;">
                    <div class="card-body" style="padding: 2rem !important;">
                      <div class="d-flex mb-3">
                        <div class="me-3" style="
                        background-image: url(assets/media/products/2.webp);
                        height: 80px;
                        width: 80px;
                        background-size: cover;
                        background-position: 50%;
                        ">
                        </div>
                        <div class="d-flex flex-column"> 
                          <small class="text-uppercase text-muted fw-500 fs-small">
                            T-Shirts
                          </small>
                          <div class="py-1">
                            <span class="text-dark fw-500">
                              Leather mid-heel Sandals
                            </span>
                          </div>
                          <ul class="list-inline d-flex">
                            <li><ion-icon style="font-size: 1.1rem;color: #fb9f24 !important;" name="star-outline"></ion-icon></li>
                            <li><ion-icon style="font-size: 1.1rem;color: #fb9f24 !important;" name="star-outline"></ion-icon></li>
                            <li><ion-icon style="font-size: 1.1rem;color: #fb9f24 !important;" name="star-outline"></ion-icon></li>
                            <li><ion-icon style="font-size: 1.1rem;color: #fb9f24 !important;" name="star-outline"></ion-icon></li>
                            <li><ion-icon style="font-size: 1.1rem;color: #fb9f24 !important;" name="star-outline"></ion-icon></li>
                          </ul>
                        </div>
                      </div>
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur distinctio veritatis fuga, inventore esse aspernatur.
                      </p>
                      <small class="text-muted">
                        Jane Jefferson,
                        <i>29 May.</i>
                      </small>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="card ff-jost" style="border-radius: 0px;border: 1px solid #e5e5e5;">
                    <div class="card-body" style="padding: 2rem !important;">
                      <div class="d-flex mb-3">
                        <div class="me-3" style="
                        background-image: url(assets/media/products/3.webp);
                        height: 80px;
                        width: 80px;
                        background-size: cover;
                        background-position: 50%;
                        ">
                        </div>
                        <div class="d-flex flex-column"> 
                          <small class="text-uppercase text-muted fw-500 fs-small">
                            T-Shirts
                          </small>
                          <div class="py-1">
                            <span class="text-dark fw-500">
                              Leather mid-heel Sandals
                            </span>
                          </div>
                          <ul class="list-inline d-flex">
                            <li><ion-icon style="font-size: 1.1rem;color: #fb9f24 !important;" name="star-outline"></ion-icon></li>
                            <li><ion-icon style="font-size: 1.1rem;color: #fb9f24 !important;" name="star-outline"></ion-icon></li>
                            <li><ion-icon style="font-size: 1.1rem;color: #fb9f24 !important;" name="star-outline"></ion-icon></li>
                            <li><ion-icon style="font-size: 1.1rem;color: #fb9f24 !important;" name="star-outline"></ion-icon></li>
                            <li><ion-icon style="font-size: 1.1rem;color: #fb9f24 !important;" name="star-outline"></ion-icon></li>
                          </ul>
                        </div>
                      </div>
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur distinctio veritatis fuga, inventore esse aspernatur.
                      </p>
                      <small class="text-muted">
                        Jane Jefferson,
                        <i>29 May.</i>
                      </small>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="card ff-jost" style="border-radius: 0px;border: 1px solid #e5e5e5;">
                    <div class="card-body" style="padding: 2rem !important;">
                      <div class="d-flex mb-3">
                        <div class="me-3" style="
                        background-image: url(assets/media/products/4.webp);
                        height: 80px;
                        width: 80px;
                        background-size: cover;
                        background-position: 50%;
                        ">
                        </div>
                        <div class="d-flex flex-column"> 
                          <small class="text-uppercase text-muted fw-500 fs-small">
                            T-Shirts
                          </small>
                          <div class="py-1">
                            <span class="text-dark fw-500">
                              Leather mid-heel Sandals
                            </span>
                          </div>
                          <ul class="list-inline d-flex">
                            <li><ion-icon style="font-size: 1.1rem;color: #fb9f24 !important;" name="star-outline"></ion-icon></li>
                            <li><ion-icon style="font-size: 1.1rem;color: #fb9f24 !important;" name="star-outline"></ion-icon></li>
                            <li><ion-icon style="font-size: 1.1rem;color: #fb9f24 !important;" name="star-outline"></ion-icon></li>
                            <li><ion-icon style="font-size: 1.1rem;color: #fb9f24 !important;" name="star-outline"></ion-icon></li>
                            <li><ion-icon style="font-size: 1.1rem;color: #fb9f24 !important;" name="star-outline"></ion-icon></li>
                          </ul>
                        </div>
                      </div>
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur distinctio veritatis fuga, inventore esse aspernatur.
                      </p>
                      <small class="text-muted">
                        Jane Jefferson,
                        <i>29 May.</i>
                      </small>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="card ff-jost" style="border-radius: 0px;border: 1px solid #e5e5e5;">
                    <div class="card-body" style="padding: 2rem !important;">
                      <div class="d-flex mb-3">
                        <div class="me-3" style="
                        background-image: url(assets/media/products/5.webp);
                        height: 80px;
                        width: 80px;
                        background-size: cover;
                        background-position: 50%;
                        ">
                        </div>
                        <div class="d-flex flex-column"> 
                          <small class="text-uppercase text-muted fw-500 fs-small">
                            T-Shirts
                          </small>
                          <div class="py-1">
                            <span class="text-dark fw-500">
                              Leather mid-heel Sandals
                            </span>
                          </div>
                          <ul class="list-inline d-flex">
                            <li><ion-icon style="font-size: 1.1rem;color: #fb9f24 !important;" name="star-outline"></ion-icon></li>
                            <li><ion-icon style="font-size: 1.1rem;color: #fb9f24 !important;" name="star-outline"></ion-icon></li>
                            <li><ion-icon style="font-size: 1.1rem;color: #fb9f24 !important;" name="star-outline"></ion-icon></li>
                            <li><ion-icon style="font-size: 1.1rem;color: #fb9f24 !important;" name="star-outline"></ion-icon></li>
                            <li><ion-icon style="font-size: 1.1rem;color: #fb9f24 !important;" name="star-outline"></ion-icon></li>
                          </ul>
                        </div>
                      </div>
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur distinctio veritatis fuga, inventore esse aspernatur.
                      </p>
                      <small class="text-muted">
                        Jane Jefferson,
                        <i>29 May.</i>
                      </small>
                    </div>
                  </div>
                </div>

              </div>
              <div class="swiper-pagination">

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END REVIEWS SECTION -->
    <!-- START BRANDS SECTION -->
    <section style="padding-bottom: 7rem;">
      <div class="container" style="padding-right: 0px !important;">
        <div class="row" style="margin-right: 0px !important;">
          <div class="col-12 text-center ff-jost mb-5">
            <h1>@Theme</h1>
            <span>Appear, dry there darkness they're seas, dry waters.</span>
          </div>
          <div class="col-12 mb-5">
            <div class="row">
              <div class="col-6 col-lg-2 col-md-4 col-sm-6 px-0 position-relative">
                <img class="w-100" src="assets/media/products/product-16.jpg" alt="">
                <a class="card-overly position-absolute text-white d-flex justify-content-center align-items-center" style="text-decoration: none;">
                  <div>
                    <ion-icon name="heart-outline"></ion-icon>
                    29
                  </div>
                </a>
              </div>
              <div class="col-6 col-lg-2 col-md-4 col-sm-6 px-0 position-relative">
                <img class="w-100" src="assets/media/products/product-17.jpg" alt="">
                <a class="card-overly position-absolute text-white d-flex justify-content-center align-items-center" style="text-decoration: none;">
                  <div>
                    <ion-icon name="heart-outline"></ion-icon>
                    29
                  </div>
                </a>
              </div>
              <div class="col-6 col-lg-2 col-md-4 col-sm-6 px-0 position-relative">
                <img class="w-100" src="assets/media/products/product-18.jpg" alt="">
                <a class="card-overly position-absolute text-white d-flex justify-content-center align-items-center" style="text-decoration: none;">
                  <div>
                    <ion-icon name="heart-outline"></ion-icon>
                    29
                  </div>
                </a>
              </div>
              <div class="col-6 col-lg-2 col-md-4 col-sm-6 px-0 position-relative">
                <img class="w-100" src="assets/media/products/product-19.jpg" alt="">
                <a class="card-overly position-absolute text-white d-flex justify-content-center align-items-center" style="text-decoration: none;">
                  <div>
                    <ion-icon name="heart-outline"></ion-icon>
                    29
                  </div>
                </a>
              </div>
              <div class="col-6 col-lg-2 col-md-4 col-sm-6 px-0 position-relative">
                <img class="w-100" src="assets/media/products/product-20.jpg" alt="">
                <a class="card-overly position-absolute text-white d-flex justify-content-center align-items-center" style="text-decoration: none;">
                  <div>
                    <ion-icon name="heart-outline"></ion-icon>
                    29
                  </div>
                </a>
              </div>
              <div class="col-6 col-lg-2 col-md-4 col-sm-6 px-0 position-relative">
                <img class="w-100" src="assets/media/products/product-21.jpg" alt="">
                <a class="card-overly position-absolute text-white d-flex justify-content-center align-items-center" style="text-decoration: none;">
                  <div>
                    <ion-icon name="heart-outline"></ion-icon>
                    29
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="row">
              <div class="col-lg-2 col-md-4 col-sm-6 text-center mb-5">
                <img class="w-100" src="assets/media/bg/adidas.svg" alt="">
              </div>
              <div class="col-lg-2 col-md-4 col-sm-6 text-center mb-5">
                <img class="w-100" src="assets/media/bg/asos.svg" alt="">
              </div>
              <div class="col-lg-2 col-md-4 col-sm-6 text-center mb-5">
                <img class="w-100" src="assets/media/bg/bershka.svg" alt="">
              </div>
              <div class="col-lg-2 col-md-4 col-sm-6 text-center">
                <img class="w-100" src="assets/media/bg/mango.svg" alt="">
              </div>
              <div class="col-lg-2 col-md-4 col-sm-6 text-center">
                <img class="w-100" src="assets/media/bg/reebok.svg" alt="">
              </div>
              <div class="col-lg-2 col-md-4 col-sm-6 text-center">
                <img class="w-100" src="assets/media/bg/stradivarius.svg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END BRANDS SECTION -->
    <!-- START FOOTER SECTION -->
    <footer style="background-color: #1f1f1f;
    background-image: url(assets/media/bg/pattern-2.svg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: 50%;
    padding-top: 6rem;
    ">
      <div class="container">
        <div class="row ff-jost">
          <div class="col-12 text-center mb-4">
            <h3 class="text-white">Want style Ideas and Treats?</h3>
          </div>
          <div class="col-12 col-md-10 col-lg-6 col-sm-12 mx-auto text-center">
            <div class="d-flex">
              <input type="text" class="form-control form-control-lg me-2 input-style" placeholder="Email Address">
              <button class="btn btn-style-dark" style="background-color: #464646 !important;">Subscribe</button>
            </div>
          </div>
        </div>
        <div class="row py-5 ff-jost">
          <div class="col-sm-12 mb-3">
            <div class="mb-4">
              <h2 class="text-white">Theme</h2>
            </div>
            <ul class="d-flex list-inline mb-0 text-muted">
                <li class="me-2">
                    <ion-icon style="color: #ccc;" name="logo-facebook"></ion-icon>
                </li>
                <li class="me-2">
                    <ion-icon style="color: #ccc;" name="logo-tiktok"></ion-icon>
                </li>
                <li class="me-2">
                    <ion-icon style="color: #ccc;" name="logo-youtube"></ion-icon>
                </li>
                <li>
                    <ion-icon style="color: #ccc;" name="logo-instagram"></ion-icon>
                </li>
            </ul>
          </div>
          <div class="col-6 col-sm-6 col-lg-3">
     
            <div class="mb-3">
              <span class="text-white fs-small fw-500">SUPPORT</span>
            </div>
            <ul class="list-inline">
              <li><a href="./contact.html" class="text-gray text-dc">Contact Us</a></li>
              <li><a href="" class="text-gray text-dc">FAQs</a></li>
              <li><a href="" class="text-gray text-dc">Size Guide</a></li>
              <li><a href="" class="text-gray text-dc">Shipping & Returns</a></li>
            </ul>
          </div>
          <div class="col-6 col-sm-6 col-lg-3">
            <div class="mb-3">
              <span class="text-white fs-small fw-500">SHOP</span>
            </div>
            <ul class="list-inline">
              <li><a href="" class="text-gray text-dc">Men's Shopping</a></li>
              <li><a href="" class="text-gray text-dc">Women's Shopping</a></li>
              <li><a href="" class="text-gray text-dc">Kids' Shopping</a></li>
              <li><a href="" class="text-gray text-dc">Discounts</a></li>
            </ul>
          </div>
          <div class="col-6 col-sm-6 col-lg-3">
            <div class="mb-3">
              <span class="text-white fs-small fw-500">COMPANY</span>
            </div>
            <ul class="list-inline">
              <li><a href="" class="text-gray text-dc">Our Story</a></li>
              <li><a href="" class="text-gray text-dc">Careers</a></li>
              <li><a href="" class="text-gray text-dc">Terms & Conditions</a></li>
              <li><a href="" class="text-gray text-dc">Privacy & Cookie policy</a></li>
            </ul>
          </div>
          <div class="col-6 col-sm-6 col-lg-3">
            <div class="mb-3">
              <span class="text-white fs-small fw-500">CONTACT</span>
            </div>
            <ul class="list-inline">
              <li><a href="" class="text-gray text-dc">55-6621-9728</a></li>
              <li><a href="" class="text-gray text-dc">55-6621-9728</a></li>
              <li><a href="" class="text-gray text-dc">jorgecampos6918@gmail.com</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-12 d-flex justify-content-between pb-1">
            <p class="text-gray ff-jost fs-small">
              <br>
              ©Díaz Leyte Maria Fernanda
              © Vargas Cruz José Daniel
              <br>
              © Vázquez Rodríguez Jorge Tadeo
              © 2025 Todos LOs Derechos Estan Reservados Para El Equipo De Jorge Tadeo Vázquez Rodríguez Del ITGAM Carrrera TIC´s 5 semestre - Porfesora Carmona
            </p>
            <div>
              <img src="assets/media/bg/mastercard.svg" alt="">
              <img src="assets/media/bg/visa.svg" alt="">
              <img src="assets/media/bg/paypal.svg" alt="">
              <img src="assets/media/bg/maestro.svg" alt="">
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- END FOOTER SECTION -->

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  
  <div class="offcanvas-header border-bottom">
    <h5 class="offcanvas-title mx-auto ff-jost" id="offcanvasRightLabel">
        Tu Carrito (<?php echo $cart->total_items(); ?>)
    </h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  
  <div class="offcanvas-body py-0">
    
    <?php
    if($cart->total_items() > 0){
        // BUCLE: Recorre los productos que agregaste
        $cartItems = $cart->contents();
        foreach($cartItems as $item){
            // Lógica de imagen: si no tiene, usa la 1.webp por defecto
            $img = isset($item['image']) ? 'assets/media/products/'.$item['image'] : 'assets/media/products/1.webp';
    ?>
    
    <div class="row align-items-center border-bottom py-3">
      <div class="col-4 col-lg-4 col-sm-4">
        <img class="w-100" src="<?php echo $img; ?>" alt="<?php echo $item['name']; ?>">
      </div>
      
      <div class="col-8 col-lg-8 col-sm-8 ff-jost">
        <div class="mb-3">
          <h6 class="fw-500" style="margin-bottom: 0.1rem;">
            <?php echo $item["name"]; ?>
          </h6>
          <span class="fw-500 text-muted">
            $<?php echo number_format($item["price"], 2); ?> x <?php echo $item["qty"]; ?>
          </span>
        </div>
        
        <div class="d-flex justify-content-between align-items-center">
           <strong class="text-dark">$<?php echo number_format($item["subtotal"], 2); ?></strong>
           
           <a href="cartAction.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>" class="d-flex align-items-center text-muted" style="text-decoration: none; cursor: pointer;">
             <ion-icon name="trash-outline" class="me-1"></ion-icon>
             <small>Eliminar</small>
           </a>
        </div>
      </div>
    </div>
    <?php 
        } // Fin del foreach
    } else { 
        // Mensaje si está vacío
        echo '
        <div class="d-flex flex-column align-items-center justify-content-center h-100 text-muted">
            <ion-icon name="cart-outline" style="font-size: 4rem; margin-bottom: 1rem;"></ion-icon>
            <p>Tu carrito está vacío.</p>
        </div>'; 
    } 
    ?>

  </div>
  
  <div class="offcanvas-footer mt-auto ff-jost d-flex justify-content-between py-3 px-3" style="background-color: #f5f5f5;">
    <span class="fw-500">Subtotal</span>
    <span class="fw-bold text-dark">$<?php echo number_format($cart->total(), 2); ?></span>
  </div>
  
  <div class="offcanvas-footer p-3">
    <?php if($cart->total_items() > 0){ ?>
        <a href="checkout.php" class="btn btn-style-dark w-100 mb-3" style="background-color: #000; color: #fff;">
            PROCEDER AL PAGO
        </a>
        <a href="viewCart.php" class="btn btn-style w-100" style="border: 1px #1f1f1f solid !important;">
            Ver Carrito Completo
        </a>
    <?php } else { ?>
        <button class="btn btn-secondary w-100" disabled>Carrito Vacío</button>
    <?php } ?>
  </div>

</div>
    </div>
    

    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="assets/js/flickity.pkgd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="assets/js/app.js"></script>
  
  </body>
</html>