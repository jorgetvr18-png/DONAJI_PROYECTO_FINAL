<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/flickity.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
   
    <header>
        <div class="bg-gray">
            <!-- START FIRST SECTION -->
            <div class="container">
              <div class="navbar navbar-expand-lg d-flex py-2">
                <div class="d-flex" style="margin-right: 2.5rem;">
                  <ion-icon class="me-1" name="airplane-outline"></ion-icon>
                  <span class="fs-small">FREE SHIPPING WORLDWIDE</span>
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
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                              </ul>
                          </div>
                      </li>
                      <li class="me-3 nav-item pl-0"> 
                          <div class="dropdown">
                              <span class="dropdown-toggle fs-small" data-bs-toggle="dropdown" aria-expanded="false">
                                  USD
                              </span>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                              </ul>
                          </div>
                      </li>
                      <li class="nav-item pl-0">
                          <div class="dropdown">
                              <span class="dropdown-toggle fs-small" data-bs-toggle="dropdown" aria-expanded="false">
                                  English
                              </span>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                              </ul>
                          </div>
                      </li>
                    </ul>
  
                    <ul class="navbar-nav d-flex list-inline mb-0 ff-jost me-5 fw-500 fs-small" style="margin-right: 0px !important;">
                      <li class="me-3 nav-item">
                          <span>SHIPPING</span>
                      </li>
                      <li class="me-3 nav-item">
                          <span>FAQ</span>
                      </li>
                      <li class="nav-item">
                          <a class="text-dc text-dark" href="./contact.html">CONTACT</a>
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
                        <a class="nav-link active" aria-current="page" href="./index.html">Home</a>
                      </li>
                      <li class="nav-item pl-0 fw-500">
                        <a class="nav-link active" href="#">Shop</a>
                      </li>
                      <li class="nav-item pl-0 fw-500 dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Pages
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
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
                          <a href="">
                            <ion-icon class="fs-1-2 text-dark" name="person-outline"></ion-icon>
                          </a>
                        </li>
                        <li class="me-3">
                          <a href="">
                            <ion-icon class="fs-1-2 text-dark" name="heart-outline"></ion-icon>
                          </a>
                        </li>
                        <li>
                          <a class="cursor-pointer" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">
                            <ion-icon class="fs-1-2 text-dark" name="cart-outline"></ion-icon>
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

    <!-- START BLOG -->
    <section>
        <div class="container">
            <div class="row py-3" style="margin-bottom: 5rem;">
                <div class="col-12">
                    <ul class="breadcrumb list-inline">
                        <li class="breadcrumb-item">
                            <a class="text-dc text-dark" style="font-size: .9rem;" href="./index.html">
                                Home
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a class="text-dc text-muted" style="font-size: .9rem;">Blog</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 py-5 text-center ff-jost">
                    <h2>Our Blog</h2>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <div class="card border-none" style="border-radius: 0px !important;">
                                <img src="assets/media/blogs/blog-1.jpg" class="w-100">
                                <div class="card-body ff-jost px-0">
                                    <h4>
                                        So isn't land signs greater void face replenish.
                                    </h4>
                                    <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, temporibus esse amet reprehenderit debitis iste?</p>

                                    <a class="text-dark text-dc fw-500 d-flex align-items-center">
                                        Read More
                                        <ion-icon class="ms-3" name="arrow-forward-outline"></ion-icon>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="card border-none" style="border-radius: 0px !important;">
                                <img src="assets/media/blogs/blog-2.jpg" class="w-100">
                                <div class="card-body ff-jost px-0">
                                    <h4>
                                        So isn't land signs greater void face replenish.
                                    </h4>
                                    <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, temporibus esse amet reprehenderit debitis iste?</p>

                                    <a class="text-dark text-dc fw-500 d-flex align-items-center">
                                        Read More
                                        <ion-icon class="ms-3" name="arrow-forward-outline"></ion-icon>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="card border-none" style="border-radius: 0px !important;">
                                <img src="assets/media/blogs/blog-3.jpg" class="w-100">
                                <div class="card-body ff-jost px-0">
                                    <h4>
                                        So isn't land signs greater void face replenish.
                                    </h4>
                                    <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, temporibus esse amet reprehenderit debitis iste?</p>

                                    <a class="text-dark text-dc fw-500 d-flex align-items-center">
                                        Read More
                                        <ion-icon class="ms-3" name="arrow-forward-outline"></ion-icon>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="card border-none" style="border-radius: 0px !important;">
                                <img src="assets/media/blogs/blog-4.jpg" class="w-100">
                                <div class="card-body ff-jost px-0">
                                    <h4>
                                        So isn't land signs greater void face replenish.
                                    </h4>
                                    <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, temporibus esse amet reprehenderit debitis iste?</p>

                                    <a class="text-dark text-dc fw-500 d-flex align-items-center">
                                        Read More
                                        <ion-icon class="ms-3" name="arrow-forward-outline"></ion-icon>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 mx-auto text-center">
                    <div class="mb-4">
                        <span class="fs-small text-muted">Showing 16 of 24 products</span>
                    </div>
                    <div class="progress mb-4" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 3px !important;">
                        <div class="progress-bar" style="width: 25%;background-color: #1f1f1f !important;"></div>
                    </div>
                    <button class="btn btn-style-dark">Load More</button>
                </div>
            </div>
        </div>
    </section>
    <!-- END BLOG -->

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
              <li><a href="" class="text-gray text-dc">1-202-555-0105</a></li>
              <li><a href="" class="text-gray text-dc">1-202-555-0106</a></li>
              <li><a href="" class="text-gray text-dc">help@shopper.com</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-12 d-flex justify-content-between pb-1">
            <p class="text-gray ff-jost fs-small">
              © 2019 All rights reserved. Designed by CodeTeam
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
        <h5 class="offcanvas-title mx-auto ff-jost" id="offcanvasRightLabel">Cart (2)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body py-0">
        <div class="row align-items-center border-bottom py-3">
          <div class="col-4 col-lg-4 col-sm-4">
            <img class="w-100" src="assets/media/products/product-6.jpg" alt="">
          </div>
          <div class="col-8 col-lg-8 col-sm-8 ff-jost">
            <div class="mb-3">
              <h6 class="fw-500" style="margin-bottom: 0.1rem;">
                Leather mid-heel Sandals
              </h6>
              <span class="fw-500 text-muted">$129.00</span>
            </div>
            <div class="d-flex justify-content-between">
              <select class="form-select form-select-sm" style="max-width: 70px;">
                <option value="1" selected>1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>

              <small class="d-flex align-items-center text-muted">
                <ion-icon name="close-outline"></ion-icon>
                Remove
              </small>
            </div>
          </div>
        </div>
        <div class="row align-items-center border-bottom py-3">
          <div class="col-4 col-lg-4 col-sm-4">
            <img class="w-100" src="assets/media/products/product-10.jpg" alt="">
          </div>
          <div class="col-8 col-lg-8 col-sm-8 ff-jost">
            <div class="mb-3">
              <h6 class="fw-500" style="margin-bottom: 0.1rem;">
                Leather mid-heel Sandals
              </h6>
              <span class="fw-500 text-muted">$129.00</span>
            </div>
            <div class="d-flex justify-content-between">
              <select class="form-select form-select-sm" style="max-width: 70px;">
                <option value="1" selected>1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>

              <small class="d-flex align-items-center text-muted">
                <ion-icon name="close-outline"></ion-icon>
                Remove
              </small>
            </div>
          </div>
        </div>
      </div>
      <div class="offcanvas-footer mt-auto ff-jost d-flex justify-content-between py-3 px-3" style="background-color: #f5f5f5;">
        <span class="fw-500">
          Subtotal
        </span>
        <span>
          $89.00
        </span>
      </div>
      <div class="offcanvas-footer p-3">
        <button class="btn btn-style-dark w-100 mb-3">Continue to Checkout</button>
        <button class="btn btn-style w-100" style="border: 1px #1f1f1f solid !important;">
          View Cart
        </button>
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