<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/favicon/favicon.ico" type="image/x-icon" />

    <!-- Libs CSS -->
    <link rel="stylesheet" href="/assets/css/libs.bundle.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="/assets/css/theme.bundle.css" />

    <!-- Title -->
    <title>Shopper</title>
  </head>
  <body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <div class="container">

        <!-- Brand -->
        <a class="navbar-brand" href="overview.html">
          Shopper.
        </a>

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbarCollapse">

          <!-- Nav -->
          <ul class="navbar-nav mx-auto">
            <li class="nav-item dropdown">

              <!-- Toggle -->
              <a class="nav-link" href="{{ route('landing-page') }}">Home</a>

            </li>
            <li class="nav-item dropdown position-static">

              <!-- Toggle -->
              <a class="nav-link" data-bs-toggle="dropdown" href="#">Catalog</a>
            </li>
            <li class="nav-item dropdown">

              <!-- Toggle -->
              <a class="nav-link" href="{{ route('shop.index') }}">Shop</a>
            </li>
            <li class="nav-item dropdown">

              <!-- Toggle -->
              <a class="nav-link" data-bs-toggle="dropdown" href="#">Pages</a>

            </li>
            <li class="nav-item dropdown">

              <!-- Toggle -->
              <a class="nav-link" data-bs-toggle="dropdown" href="#">Blog</a>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="docs/getting-started.html">Docs</a>
            </li>
          </ul>

          <!-- Nav -->
          <ul class="navbar-nav flex-row">
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="offcanvas" href="#modalSearch">
                <i class="fe fe-search"></i>
              </a>
            </li>
            <li class="nav-item ms-lg-n4">
              <a class="nav-link" href="account-orders.html">
                <i class="fe fe-user"></i>
              </a>
            </li>
            <li class="nav-item ms-lg-n4">
              <a class="nav-link" href="account-wishlist.html">
                <i class="fe fe-heart"></i>
              </a>
            </li>
            <li class="nav-item ms-lg-n4">
              <a class="nav-link" href="{{ route('login') }}">
                @if (Cart::instance('default')->count() > 0)
                <span data-cart-items="{{ Cart::instance('default')->count() }}">
                @endif
                  <i class="fe fe-shopping-cart"></i>
                </span>
              </a>
            </li>
          </ul>

        </div>

      </div>
    </nav>

    <section class="py-13 bg-cover" style="background-image: url(assets/img/covers/cover-4.jpg)">
        <div class="container">
          <div class="row justify-content-end">
            <div class="col-12 col-md-8 col-lg-6">

              <!-- Heading -->
              <h3 class="mb-7">
                Get -50% from <br />Summer Collection
              </h3>

              <!-- Counter -->
              <div class="d-flex mb-9" data-countdown data-date="Dec 31, 2025 00:00:00">
                <div class="text-center">
                  <div class="fs-1 fw-bolder text-primary" data-days>00</div>
                  <div class="heading-xxs text-muted">Days</div>
                </div>
                <div class="px-1 px-md-4">
                  <div class="fs-2 fw-bolder text-primary">:</div>
                </div>
                <div class="text-center">
                  <div class="fs-1 fw-bolder text-primary" data-hours>00</div>
                  <div class="heading-xxs text-muted">Hours</div>
                </div>
                <div class="px-1 px-md-4">
                  <div class="fs-2 fw-bolder text-primary">:</div>
                </div>
                <div class="text-center">
                  <div class="fs-1 fw-bolder text-primary" data-minutes>00</div>
                  <div class="heading-xxs text-muted">Minutes</div>
                </div>
                <div class="px-1 px-md-4">
                  <div class="fs-2 fw-bolder text-primary">:</div>
                </div>
                <div class="text-center">
                  <div class="fs-1 fw-bolder text-primary" data-seconds>00</div>
                  <div class="heading-xxs text-muted">Seconds</div>
                </div>
              </div>

              <!-- Button -->
              <a class="btn btn-dark" href="shop.html">
                Shop Now <i class="fe fe-arrow-right ms-2"></i>
              </a>

            </div>
          </div>
        </div>
      </section>

    <!-- TOP SELLERS -->
    <section class="py-12">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8 col-xl-6">

            <!-- Heading -->
            <h2 class="mb-4 text-center">Top month Sellers</h2>

            <!-- Nav -->
            <div class="nav justify-content-center mb-10">
              <a class="nav-link active" href="#topSellersTab" data-bs-toggle="tab">Women</a>
              <a class="nav-link" href="#topSellersTab" data-bs-toggle="tab">Men</a>
              <a class="nav-link" href="#topSellersTab" data-bs-toggle="tab">Kids</a>
            </div>

          </div>
        </div>
        <div class="tab-content">
          <div class="tab-pane fade show active" id="topSellersTab">
            <div class="row">
                @foreach($products as $product)
              <div class="col-6 col-md-4 col-lg-3">

                <!-- Card -->
                <div class="card mb-7">
                  <!-- Badge -->
                  <div class="badge bg-dark card-badge card-badge-start text-uppercase">
                    Sale
                  </div>
                  <!-- Image -->
                  <div class="card-img">

                    <!-- Image -->
                    <a class="card-img-hover" href="{{ route('shop.show', $product->slug) }}">
                      <img class="card-img-top card-img-back" src="assets/img/products/product-122.jpg" alt="...">
                      <img class="card-img-top card-img-front" src="assets/img/products/product-7.jpg" alt="...">
                    </a>

                    <!-- Actions -->
                    <div class="card-actions">
                      <span class="card-action">
                        <button class="btn btn-xs btn-circle btn-white-primary" data-bs-toggle="modal" data-bs-target="#modalProduct">
                          <i class="fe fe-eye"></i>
                        </button>
                      </span>
                      <span class="card-action">
                        <button class="btn btn-xs btn-circle btn-white-primary" data-toggle="button">
                          <i class="fe fe-shopping-cart"></i>
                        </button>
                      </span>
                      <span class="card-action">
                        <button class="btn btn-xs btn-circle btn-white-primary" data-toggle="button">
                          <i class="fe fe-heart"></i>
                        </button>
                      </span>
                    </div>

                  </div>

                  <!-- Body -->
                  <div class="card-body px-0">

                    <!-- Category -->
                    <div class="fs-xs">
                      <a class="text-muted" href="{{ route('shop.show', $product->slug) }}">{{ $product->details }}</a>
                    </div>

                    <!-- Title -->
                    <div class="fw-bold">
                      <a class="text-body" href="{{ route('shop.show', $product->slug) }}">
                        {{ $product->name }}
                      </a>
                    </div>

                    <!-- Price -->
                    <div class="fw-bold">
                      <span class="fs-xs text-gray-350 text-decoration-line-through"></span>
                      <span class="text-primary">{{ ($product->presentPrice()) }}</span>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">

            <!-- Link  -->
            <div class="mt-7 text-center">
              <a class="link-underline" href="#!">Discover more</a>
            </div>

          </div>
        </div>
      </div>
    </section>

    <!-- BRANDS -->
    <section class="py-12 bg-light">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">

            <!-- Heading -->
            <h2 class="mb-3">@shopper</h2>

            <!-- Subheading -->
            <p class="mb-10 fs-lg text-gray-500">
              Appear, dry there darkness they're seas, dry waters.
            </p>

          </div>
        </div>
        <div class="row mx-n1 mb-10">
          <div class="col-6 col-sm-4 col-md px-1">

            <!-- Card -->
            <div class="card mb-2">

              <!-- Image -->
              <img src="assets/img/products/product-16.jpg" alt="..." class="card-img">

              <!-- Overlay -->
              <a class="card-img-overlay card-img-overlay-hover align-items-center bg-dark-40" href="blog-post.html">
                <p class="my-0 fs-xxs text-center text-white">
                  <i class="fe fe-heart me-2"></i> 248 <i class="fe fe-message-square me-2 ms-3"></i> 7
                </p>
              </a>

            </div>

          </div>
          <div class="col-6 col-sm-4 col-md px-1">

            <!-- Card -->
            <div class="card mb-2">

              <!-- Image -->
              <img src="assets/img/products/product-17.jpg" alt="..." class="card-img">

              <!-- Overlay -->
              <a class="card-img-overlay card-img-overlay-hover align-items-center bg-dark-40" href="blog-post.html">
                <p class="my-0 fs-xxs text-center text-white">
                  <i class="fe fe-heart me-2"></i> 248 <i class="fe fe-message-square me-2 ms-3"></i> 7
                </p>
              </a>

            </div>

          </div>
          <div class="col-6 col-sm-4 col-md px-1">

            <!-- Card -->
            <div class="card mb-2">

              <!-- Image -->
              <img src="assets/img/products/product-18.jpg" alt="..." class="card-img">

              <!-- Overlay -->
              <a class="card-img-overlay card-img-overlay-hover align-items-center bg-dark-40" href="blog-post.html">
                <p class="my-0 fs-xxs text-center text-white">
                  <i class="fe fe-heart me-2"></i> 248 <i class="fe fe-message-square me-2 ms-3"></i> 7
                </p>
              </a>

            </div>

          </div>
          <div class="col-6 col-sm-4 col-md px-1">

            <!-- Card -->
            <div class="card mb-2">

              <!-- Image -->
              <img src="assets/img/products/product-19.jpg" alt="..." class="card-img">

              <!-- Overlay -->
              <a class="card-img-overlay card-img-overlay-hover align-items-center bg-dark-40" href="blog-post.html">
                <p class="my-0 fs-xxs text-center text-white">
                  <i class="fe fe-heart me-2"></i> 248 <i class="fe fe-message-square me-2 ms-3"></i> 7
                </p>
              </a>

            </div>

          </div>
          <div class="col-6 col-sm-4 col-md px-1">

            <!-- Card -->
            <div class="card">

              <!-- Image -->
              <img src="assets/img/products/product-20.jpg" alt="..." class="card-img">

              <!-- Overlay -->
              <a class="card-img-overlay card-img-overlay-hover align-items-center bg-dark-40" href="blog-post.html">
                <p class="my-0 fs-xxs text-center text-white">
                  <i class="fe fe-heart me-2"></i> 248 <i class="fe fe-message-square me-2 ms-3"></i> 7
                </p>
              </a>

            </div>

          </div>
          <div class="col-6 col-sm-4 col-md px-1">

            <!-- Card -->
            <div class="card">

              <!-- Image -->
              <img src="assets/img/products/product-21.jpg" alt="..." class="card-img">

              <!-- Overlay -->
              <a class="card-img-overlay card-img-overlay-hover align-items-center bg-dark-40" href="blog-post.html">
                <p class="my-0 fs-xxs text-center text-white">
                  <i class="fe fe-heart me-2"></i> 248 <i class="fe fe-message-square me-2 ms-3"></i> 7
                </p>
              </a>

            </div>

          </div>
        </div>
        <div class="row">
          <div class="col-4 col-sm-3 col-md text-center">

            <!-- Brand -->
            <img src="assets/img/brands/gray-350/mango.svg" alt="..." class="img-fluid mb-7 mb-md-0">

          </div>
          <div class="col-4 col-sm-3 col-md text-center">

            <!-- Brand -->
            <img src="assets/img/brands/gray-350/zara.svg" alt="..." class="img-fluid mb-7 mb-md-0">

          </div>
          <div class="col-4 col-sm-3 col-md text-center">

            <!-- Brand -->
            <img src="assets/img/brands/gray-350/reebok.svg" alt="..." class="img-fluid mb-7 mb-md-0">

          </div>
          <div class="col-4 col-sm-3 col-md text-center">

            <!-- Brand -->
            <img src="assets/img/brands/gray-350/asos.svg" alt="..." class="img-fluid mb-7 mb-md-0">

          </div>
          <div class="col-4 col-sm-3 col-md text-center">

            <!-- Brand -->
            <img src="assets/img/brands/gray-350/stradivarius.svg" alt="..." class="img-fluid mb-6 mb-sm-0">

          </div>
          <div class="col-4 col-sm-3 col-md text-center">

            <!-- Brand -->
            <img src="assets/img/brands/gray-350/adidas.svg" alt="..." class="img-fluid mb-6 mb-sm-0">

          </div>
          <div class="col-4 col-sm-3 col-md text-center">

            <!-- Brand -->
            <img src="assets/img/brands/gray-350/bershka.svg" alt="..." class="img-fluid">

          </div>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-dark bg-cover " style="background-image: url(assets/img/patterns/pattern-2.svg)">
      <div class="py-12 border-bottom border-gray-700">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-6">

              <!-- Heading -->
              <h5 class="mb-7 text-center text-white">Want style Ideas and Treats?</h5>

              <!-- Form -->
              <form class="mb-11">
                <div class="row gx-5 align-items-start">
                  <div class="col">
                    <input type="email" class="form-control form-control-gray-700 form-control-lg" placeholder="Enter Email *">
                  </div>
                  <div class="col-auto">
                    <button type="submit" class="btn btn-gray-500 btn-lg">Subscribe</button>
                  </div>
                </div>
              </form>

            </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-3">

              <!-- Heading -->
              <h4 class="mb-6 text-white">Shopper.</h4>

              <!-- Social -->
              <ul class="list-unstyled list-inline mb-7 mb-md-0">
                <li class="list-inline-item">
                  <a href="#!" class="text-gray-350">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#!" class="text-gray-350">
                    <i class="fab fa-youtube"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#!" class="text-gray-350">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#!" class="text-gray-350">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#!" class="text-gray-350">
                    <i class="fab fa-medium"></i>
                  </a>
                </li>
              </ul>

            </div>
            <div class="col-6 col-sm">

              <!-- Heading -->
              <h6 class="heading-xxs mb-4 text-white">
                Support
              </h6>

              <!-- Links -->
              <ul class="list-unstyled mb-7 mb-sm-0">
                <li>
                  <a class="text-gray-300" href="contact-us.html">Contact Us</a>
                </li>
                <li>
                  <a class="text-gray-300" href="faq.html">FAQs</a>
                </li>
                <li>
                  <a class="text-gray-300" data-bs-toggle="modal" href="#modalSizeChart">Size Guide</a>
                </li>
                <li>
                  <a class="text-gray-300" href="shipping-and-returns.html">Shipping & Returns</a>
                </li>
              </ul>

            </div>
            <div class="col-6 col-sm">

              <!-- Heading -->
              <h6 class="heading-xxs mb-4 text-white">
                Shop
              </h6>

              <!-- Links -->
              <ul class="list-unstyled mb-7 mb-sm-0">
                <li>
                  <a class="text-gray-300" href="shop.html">Men's Shopping</a>
                </li>
                <li>
                  <a class="text-gray-300" href="shop.html">Women's Shopping</a>
                </li>
                <li>
                  <a class="text-gray-300" href="shop.html">Kids' Shopping</a>
                </li>
                <li>
                  <a class="text-gray-300" href="shop.html">Discounts</a>
                </li>
              </ul>

            </div>
            <div class="col-6 col-sm">

              <!-- Heading -->
              <h6 class="heading-xxs mb-4 text-white">
                Company
              </h6>

              <!-- Links -->
              <ul class="list-unstyled mb-0">
                <li>
                  <a class="text-gray-300" href="about.html">Our Story</a>
                </li>
                <li>
                  <a class="text-gray-300" href="#!">Careers</a>
                </li>
                <li>
                  <a class="text-gray-300" href="#!">Terms & Conditions</a>
                </li>
                <li>
                  <a class="text-gray-300" href="#!">Privacy & Cookie policy</a>
                </li>
              </ul>

            </div>
            <div class="col-6 col-sm">

              <!-- Heading -->
              <h6 class="heading-xxs mb-4 text-white">
                Contact
              </h6>

              <!-- Links -->
              <ul class="list-unstyled mb-0">
                <li>
                  <a class="text-gray-300" href="#!">1-202-555-0105</a>
                </li>
                <li>
                  <a class="text-gray-300" href="#!">1-202-555-0106</a>
                </li>
                <li>
                  <a class="text-gray-300" href="#!">help@shopper.com</a>
                </li>
              </ul>

            </div>
          </div>
        </div>
      </div>
      <div class="py-6">
        <div class="container">
          <div class="row">
            <div class="col">

              <!-- Copyright -->
              <p class="mb-3 mb-md-0 fs-xxs text-muted">
                © 2019 All rights reserved. Designed by Unvab.
              </p>

            </div>
            <div class="col-auto">

              <!-- Payment methods -->
              <img class="footer-payment" src="assets/img/payment/mastercard.svg" alt="...">
              <img class="footer-payment" src="assets/img/payment/visa.svg" alt="...">
              <img class="footer-payment" src="assets/img/payment/amex.svg" alt="...">
              <img class="footer-payment" src="assets/img/payment/paypal.svg" alt="...">
              <img class="footer-payment" src="assets/img/payment/maestro.svg" alt="...">
              <img class="footer-payment" src="assets/img/payment/klarna.svg" alt="...">

            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- JAVASCRIPT -->
    <!-- Map (replace the API key to enable) -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnKt8_N4-FKOnhI_pSaDL7g_g-XI1-R9E"></script>

    <!-- Vendor JS -->
    <script src="/assets/js/vendor.bundle.js"></script>

    <!-- Theme JS -->
    <script src="/assets/js/theme.bundle.js"></script>

  </body>

<!-- Mirrored from yevgenysim-turkey.github.io/shopper/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Oct 2022 03:50:24 GMT -->
</html>
