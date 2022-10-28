@extends('layout')

@section('content')
        <!-- BREADCRUMB -->
    <nav class="py-5">
        <div class="container">
          <div class="row">
            <div class="col-12">

              <!-- Breadcrumb -->
              <ol class="breadcrumb mb-0 fs-xs text-gray-400">
                <li class="breadcrumb-item">
                  <a class="text-gray-400" href="index-2.html">Home</a>
                </li>
                <li class="breadcrumb-item">
                  <a class="text-gray-400" href="shop.html">Women's Shoes</a>
                </li>
                <li class="breadcrumb-item active">
                  Leather Sneakers
                </li>
              </ol>

            </div>
          </div>
        </div>
    </nav>

        <!-- PRODUCT -->
        <section>
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="row">
                    <div class="col-12 col-md-6">

                      <!-- Card -->
                      <div class="card">

                        <!-- Badge -->
                        <div class="badge bg-primary card-badge text-uppercase">
                          Sale
                        </div>

                        <!-- Slider -->
                        <div class="mb-4" data-flickity='{"draggable": false, "fade": true}' id="productSlider">

                          <!-- Item -->
                          <a href="#" data-bigpicture='{ "imgSrc": "/assets/img/products/product-7.jpg"}'>
                            <img src="/assets/img/products/product-7.jpg" alt="..." class="card-img-top">
                          </a>

                          <!-- Item -->
                          <a href="#" data-bigpicture='{ "imgSrc": "/assets/img/products/product-122.jpg"}'>
                            <img src="/assets/img/products/product-122.jpg" alt="..." class="card-img-top">
                          </a>

                          <!-- Item -->
                          <a href="#" data-bigpicture='{ "imgSrc": "/assets/img/products/product-146.jpg"}'>
                            <img src="/assets/img/products/product-146.jpg" alt="..." class="card-img-top">
                          </a>

                        </div>

                      </div>

                      <!-- Slider -->
                      <div class="flickity-nav mx-n2 mb-10 mb-md-0" data-flickity='{"asNavFor": "#productSlider", "contain": true, "wrapAround": false}'>

                        <!-- Item -->
                        <div class="col-12 px-2" style="max-width: 113px;">

                          <!-- Image -->
                          <div class="ratio ratio-1x1 bg-cover" style="background-image: url(assets/img/products/product-7.jpg);"></div>

                        </div>

                        <!-- Item -->
                        <div class="col-12 px-2" style="max-width: 113px;">

                          <!-- Image -->
                          <div class="ratio ratio-1x1 bg-cover" style="background-image: url(assets/img/products/product-122.jpg);"></div>

                        </div>

                        <!-- Item -->
                        <div class="col-12 px-2" style="max-width: 113px;">

                          <!-- Image -->
                          <div class="ratio ratio-1x1 bg-cover" style="background-image: url(assets/img/products/product-146.jpg);"></div>

                        </div>

                      </div>

                    </div>
                    <div class="col-12 col-md-6 ps-lg-10">

                      <!-- Header -->
                      <div class="row mb-1">
                        <div class="col">

                          <!-- Preheading -->
                          <a class="text-muted" href="shop.html">Sneakers</a>

                        </div>
                        <div class="col-auto">

                          <!-- Rating -->
                          <div class="rating fs-xs text-dark" data-value="4">
                            <div class="rating-item">
                              <i class="fas fa-star"></i>
                            </div>
                            <div class="rating-item">
                              <i class="fas fa-star"></i>
                            </div>
                            <div class="rating-item">
                              <i class="fas fa-star"></i>
                            </div>
                            <div class="rating-item">
                              <i class="fas fa-star"></i>
                            </div>
                            <div class="rating-item">
                              <i class="fas fa-star"></i>
                            </div>
                          </div>

                          <a class="fs-sm text-reset ms-2" href="#reviews">
                            Reviews (6)
                          </a>

                        </div>
                      </div>

                      <!-- Heading -->
                      <h3 class="mb-2">{{ $product->name }}</h3>

                      <!-- Price -->
                      <div class="mb-7">
                        <span class="fs-lg fw-bold text-gray-350 text-decoration-line-through"></span>
                        <span class="ms-1 fs-5 fw-bolder text-primary">{{ $product->price }}</span>
                        <span class="fs-sm ms-1">(In Stock)</span>
                      </div>

                      <!-- Form -->
                      {{-- <form> --}}
                        <div class="form-group">

                          <!-- Label -->
                          <p class="mb-5">
                            Color: <strong id="colorCaption">White</strong>
                          </p>

                          <!-- Radio -->
                          <div class="mb-8 ms-n1">
                            <div class="form-check form-check-inline form-check-img">
                              <input type="radio" class="form-check-input" id="imgRadioOne" name="imgRadio" data-toggle="form-caption" data-target="#colorCaption" value="White" style="background-image: url(assets/img/products/product-7.jpg);" checked>
                            </div>
                            <div class="form-check form-check-inline form-check-img">
                              <input type="radio" class="form-check-input" id="imgRadioTwo" name="imgRadio" data-toggle="form-caption" data-target="#colorCaption" value="Black" style="background-image: url(assets/img/products/product-49.jpg);">
                            </div>
                          </div>

                        </div>
                        <div class="form-group">

                          <!-- Label -->
                          <p class="mb-5">
                            Size: <strong><span id="sizeCaption">7.5</span> US</strong>
                          </p>


                          <!-- Size chart -->
                          <p class="mb-8">
                            <img src="assets/img/icons/icon-ruler.svg" alt="..." class="img-fluid"> <a class="text-reset text-decoration-underline ms-3" data-bs-toggle="modal" href="#modalSizeChart">Size chart</a>
                          </p>

                          <div class="row gx-5 mb-7">
                            <div class="col-12 col-lg-auto">

                              <!-- Quantity -->
                              <select class="form-select mb-2">
                                <option value="1" selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                              </select>

                            </div>
                            <div class="col-12 col-lg">
                                <form action="{{ route('cart.store') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                    <input type="hidden" name="name" value="{{ $product->name }}">
                                    <input type="hidden" name="price" value="{{ $product->price }}">
                                    <button type="submit" class="btn w-100 btn-dark mb-2">
                                    Add to Cart <i class="fe fe-shopping-cart ms-2"></i>
                                </button>
                                </form>
                            </div>
                            <div class="col-12 col-lg-auto">

                              <!-- Wishlist -->
                              <button class="btn btn-outline-dark w-100 mb-2" data-toggle="button">
                                Wishlist <i class="fe fe-heart ms-2"></i>
                              </button>

                            </div>
                          </div>

                          <!-- Text -->
                          <p>
                            <span class="text-gray-500">Is your size/color sold out?</span>
                            <a class="text-reset text-decoration-underline" data-bs-toggle="modal" href="#modalWaitList">Join the Wait List!</a>
                          </p>

                          <!-- Share -->
                          <p class="mb-0">
                            <span class="me-4">Share:</span>
                            <a class="btn btn-xxs btn-circle btn-light fs-xxxs text-gray-350" href="#!">
                              <i class="fab fa-twitter"></i>
                            </a>
                            <a class="btn btn-xxs btn-circle btn-light fs-xxxs text-gray-350" href="#!">
                              <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="btn btn-xxs btn-circle btn-light fs-xxxs text-gray-350" href="#!">
                              <i class="fab fa-pinterest-p"></i>
                            </a>
                          </p>

                        </div>
                      {{-- </form> --}}

                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>

          <!-- DESCRIPTION -->
          <section class="pt-11">
            <div class="container">
              <div class="row">
                <div class="col-12">

                  <!-- Nav -->
                  <div class="nav nav-tabs nav-overflow justify-content-start justify-content-md-center border-bottom">
                    <a class="nav-link active" data-bs-toggle="tab" href="#descriptionTab">
                      Description
                    </a>
                    <a class="nav-link" data-bs-toggle="tab" href="#sizeTab">
                      Size & Fit
                    </a>
                    <a class="nav-link" data-bs-toggle="tab" href="#shippingTab">
                      Shipping & Return
                    </a>
                  </div>

                  <!-- Content -->
                  <div class="tab-content">
                    <div class="tab-pane fade show active" id="descriptionTab">
                      <div class="row justify-content-center py-9">
                        <div class="col-12 col-lg-10 col-xl-8">
                          <div class="row">
                            <div class="col-12">

                              <!-- Text -->
                              <p class="text-gray-500">
                                {{ $product->description }}
                              </p>

                            </div>
                            <div class="col-12 col-md-6">

                              <!-- List -->
                              <ul class="list list-unstyled mb-md-0 text-gray-500">
                                <li>
                                  <strong class="text-body">SKU</strong>: #61590437
                                </li>
                                <li>
                                  <strong class="text-body">Occasion</strong>: Lifestyle, Sport
                                </li>
                                <li>
                                  <strong class="text-body">Country</strong>: Italy
                                </li>
                              </ul>

                            </div>
                            <div class="col-12 col-md-6">

                              <!-- List -->
                              <ul class="list list-unstyled mb-0">
                                <li>
                                  <strong>Outer</strong>: Leather 100%, Polyamide 100%
                                </li>
                                <li>
                                  <strong>Lining</strong>: Polyester 100%
                                </li>
                                <li>
                                  <strong>CounSoletry</strong>: Rubber 100%
                                </li>
                              </ul>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="sizeTab">
                      <div class="row justify-content-center py-9">
                        <div class="col-12 col-lg-10 col-xl-8">
                          <div class="row">
                            <div class="col-12 col-md-6">

                              <!-- Text -->
                              <p class="mb-4">
                                <strong>Fitting information:</strong>
                              </p>

                              <!-- List -->
                              <ul class="mb-md-0 text-gray-500">
                                <li>
                                  Upon seas hath every years have whose
                                  subdue creeping they're it were.
                                </li>
                                <li>
                                  Make great day bearing.
                                </li>
                                <li>
                                  For the moveth is days don't said days.
                                </li>
                              </ul>

                            </div>
                            <div class="col-12 col-md-6">

                              <!-- Text -->
                              <p class="mb-4">
                                <strong>Model measurements:</strong>
                              </p>

                              <!-- List -->
                              <ul class="list-unstyled text-gray-500">
                                <li>Height: 1.80 m</li>
                                <li>Bust/Chest: 89 cm</li>
                                <li>Hips: 91 cm</li>
                                <li>Waist: 65 cm</li>
                                <li>Model size: M</li>
                              </ul>

                              <!-- Size -->
                              <p class="mb-0">
                                <img src="assets/img/icons/icon-ruler.svg" alt="..." class="img-fluid">
                                <a class="text-reset text-decoration-underline ms-3" data-bs-toggle="modal" href="#modalSizeChart">Size chart</a>
                              </p>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="shippingTab">
                      <div class="row justify-content-center py-9">
                        <div class="col-12 col-lg-10 col-xl-8">

                          <!-- Table -->
                          <div class="table-responsive">
                            <table class="table table-bordered table-sm table-hover">
                              <thead>
                                <tr>
                                  <th>Shipping Options</th>
                                  <th>Delivery Time</th>
                                  <th>Price</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Standard Shipping</td>
                                  <td>Delivery in 5 - 7 working days</td>
                                  <td>$8.00</td>
                                </tr>
                                <tr>
                                  <td>Express Shipping</td>
                                  <td>Delivery in 3 - 5 working days</td>
                                  <td>$12.00</td>
                                </tr>
                                <tr>
                                  <td>1 - 2 day Shipping</td>
                                  <td>Delivery in 1 - 2 working days</td>
                                  <td>$12.00</td>
                                </tr>
                                <tr>
                                  <td>Free Shipping</td>
                                  <td>
                                    Living won't the He one every subdue meat replenish
                                    face was you morning firmament darkness.
                                  </td>
                                  <td>$0.00</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>

                          <!-- Caption -->
                          <p class="mb-0 text-gray-500">
                            May, life blessed night so creature likeness their, for. <a class="text-body text-decoration-underline" href="#!">Find out more</a>
                          </p>

                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </section>

          <!-- PRODUCTS -->
          @include('partials.might-also-like')

          <!-- REVIEWS -->
          <section class="pt-9 pb-11" id="reviews">
            <div class="container">
              <div class="row">
                <div class="col-12">

                  <!-- Heading -->
                  <h4 class="mb-10 text-center">Customer Reviews</h4>

                  <!-- Header -->
                  <div class="row align-items-center">
                    <div class="col-12 col-md-auto">

                      <!-- Dropdown -->
                      <div class="dropdown mb-4 mb-md-0">

                        <!-- Toggle -->
                        <a class="dropdown-toggle text-reset" data-bs-toggle="dropdown" href="#">
                          <strong>Sort by: Newest</strong>
                        </a>

                        <!-- Menu -->
                        <div class="dropdown-menu mt-3">
                          <a class="dropdown-item" href="#!">Newest</a>
                          <a class="dropdown-item" href="#!">Oldest</a>
                        </div>

                      </div>

                    </div>
                    <div class="col-12 col-md text-md-center">

                      <!-- Rating -->
                      <div class="rating text-dark h6 mb-4 mb-md-0" data-value="4">
                        <div class="rating-item">
                          <i class="fas fa-star"></i>
                        </div>
                        <div class="rating-item">
                          <i class="fas fa-star"></i>
                        </div>
                        <div class="rating-item">
                          <i class="fas fa-star"></i>
                        </div>
                        <div class="rating-item">
                          <i class="fas fa-star"></i>
                        </div>
                        <div class="rating-item">
                          <i class="fas fa-star"></i>
                        </div>
                      </div>

                      <!-- Count -->
                      <strong class="fs-sm ms-2">Reviews (3)</strong>

                    </div>
                    <div class="col-12 col-md-auto">

                      <!-- Button -->
                      <a class="btn btn-sm btn-dark" data-bs-toggle="collapse" href="#reviewForm">
                        Write Review
                      </a>

                    </div>
                  </div>

                  <!-- New Review -->
                  <div class="collapse" id="reviewForm">

                    <!-- Divider -->
                    <hr class="my-8">

                    <!-- Form -->
                    <form>
                      <div class="row">
                        <div class="col-12 mb-6 text-center">

                          <!-- Text -->
                          <p class="mb-1 fs-xs">
                            Score:
                          </p>

                          <!-- Rating form -->
                          <div class="rating-form">

                            <!-- Input -->
                            <input class="rating-input" type="range" min="1" max="5" value="5">

                            <!-- Rating -->
                            <div class="rating h5 text-dark" data-value="5">
                              <div class="rating-item">
                                <i class="fas fa-star"></i>
                              </div>
                              <div class="rating-item">
                                <i class="fas fa-star"></i>
                              </div>
                              <div class="rating-item">
                                <i class="fas fa-star"></i>
                              </div>
                              <div class="rating-item">
                                <i class="fas fa-star"></i>
                              </div>
                              <div class="rating-item">
                                <i class="fas fa-star"></i>
                              </div>
                            </div>

                          </div>

                        </div>
                        <div class="col-12 col-md-6">

                          <!-- Name -->
                          <div class="form-group">
                            <label class="visually-hidden" for="reviewName">Your Name:</label>
                            <input class="form-control form-control-sm" id="reviewName" type="text" placeholder="Your Name *" required>
                          </div>

                        </div>
                        <div class="col-12 col-md-6">

                          <!-- Email -->
                          <div class="form-group">
                            <label class="visually-hidden" for="reviewEmail">Your Email:</label>
                            <input class="form-control form-control-sm" id="reviewEmail" type="email" placeholder="Your Email *" required>
                          </div>

                        </div>
                        <div class="col-12">

                          <!-- Name -->
                          <div class="form-group">
                            <label class="visually-hidden" for="reviewTitle">Review Title:</label>
                            <input class="form-control form-control-sm" id="reviewTitle" type="text" placeholder="Review Title *" required>
                          </div>

                        </div>
                        <div class="col-12">

                          <!-- Name -->
                          <div class="form-group">
                            <label class="visually-hidden" for="reviewText">Review:</label>
                            <textarea class="form-control form-control-sm" id="reviewText" rows="5" placeholder="Review *" required></textarea>
                          </div>

                        </div>
                        <div class="col-12 text-center">

                          <!-- Button -->
                          <button class="btn btn-outline-dark" type="submit">
                            Post Review
                          </button>

                        </div>
                      </div>
                    </form>

                  </div>

                  <!-- Reviews -->
                  <div class="mt-8">

                    <!-- Review -->
                    <div class="review">
                      <div class="review-body">
                        <div class="row">
                          <div class="col-12 col-md-auto">

                            <!-- Avatar -->
                            <div class="avatar avatar-xxl mb-6 mb-md-0">
                              <span class="avatar-title rounded-circle">
                                <i class="fa fa-user"></i>
                              </span>
                            </div>

                          </div>
                          <div class="col-12 col-md">

                            <!-- Header -->
                            <div class="row mb-6">
                              <div class="col-12">

                                <!-- Rating -->
                                <div class="rating fs-sm text-dark" data-value="5">
                                  <div class="rating-item">
                                    <i class="fas fa-star"></i>
                                  </div>
                                  <div class="rating-item">
                                    <i class="fas fa-star"></i>
                                  </div>
                                  <div class="rating-item">
                                    <i class="fas fa-star"></i>
                                  </div>
                                  <div class="rating-item">
                                    <i class="fas fa-star"></i>
                                  </div>
                                  <div class="rating-item">
                                    <i class="fas fa-star"></i>
                                  </div>
                                </div>

                              </div>
                              <div class="col-12">

                                <!-- Time -->
                                <span class="fs-xs text-muted">
                                  Logan Edwards, <time datetime="2019-07-25">25 Jul 2019</time>
                                </span>

                              </div>
                            </div>

                            <!-- Title -->
                            <p class="mb-2 fs-lg fw-bold">
                              So cute!
                            </p>

                            <!-- Text -->
                            <p class="text-gray-500">
                              Justo ut diam erat hendrerit. Morbi porttitor, per eu. Sodales curabitur diam sociis. Taciti lobortis nascetur. Ante laoreet odio hendrerit.
                              Dictumst curabitur nascetur lectus potenti dis sollicitudin habitant quis vestibulum.
                            </p>

                            <!-- Footer -->
                            <div class="row align-items-center">
                              <div class="col-auto d-none d-lg-block">

                                <!-- Text -->
                                <p class="mb-0 fs-sm">Was this review helpful?</p>

                              </div>
                              <div class="col-auto me-auto">

                                <!-- Rate -->
                                <div class="rate">
                                  <a class="rate-item" data-toggle="vote" data-count="3" href="#" role="button">
                                    <i class="fe fe-thumbs-up"></i>
                                  </a>
                                  <a class="rate-item" data-toggle="vote" data-count="0" href="#" role="button">
                                    <i class="fe fe-thumbs-down"></i>
                                  </a>
                                </div>

                              </div>
                              <div class="col-auto d-none d-lg-block">

                                <!-- Text -->
                                <p class="mb-0 fs-sm">Comments (0)</p>

                              </div>
                              <div class="col-auto">

                                <!-- Button -->
                                <a class="btn btn-xs btn-outline-border" href="#!">
                                  Comment
                                </a>

                              </div>
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Review -->
                    <div class="review">

                      <!-- Body -->
                      <div class="review-body">
                        <div class="row">
                          <div class="col-12 col-md-auto">

                            <!-- Avatar -->
                            <div class="avatar avatar-xxl mb-6 mb-md-0">
                              <span class="avatar-title rounded-circle">
                                <i class="fa fa-user"></i>
                              </span>
                            </div>

                          </div>
                          <div class="col-12 col-md">

                            <!-- Header -->
                            <div class="row mb-6">
                              <div class="col-12">

                                <!-- Rating -->
                                <div class="rating fs-sm text-dark" data-value="3">
                                  <div class="rating-item">
                                    <i class="fas fa-star"></i>
                                  </div>
                                  <div class="rating-item">
                                    <i class="fas fa-star"></i>
                                  </div>
                                  <div class="rating-item">
                                    <i class="fas fa-star"></i>
                                  </div>
                                  <div class="rating-item">
                                    <i class="fas fa-star"></i>
                                  </div>
                                  <div class="rating-item">
                                    <i class="fas fa-star"></i>
                                  </div>
                                </div>

                              </div>
                              <div class="col-12">

                                <!-- Time -->
                                <span class="fs-xs text-muted">
                                  Sophie Casey, <time datetime="2019-07-07">07 Jul 2019</time>
                                </span>

                              </div>
                            </div>

                            <!-- Title -->
                            <p class="mb-2 fs-lg fw-bold">
                              Cute, but too small
                            </p>

                            <!-- Text -->
                            <p class="text-gray-500">
                              Shall good midst can't. Have fill own his multiply the divided. Thing great. Of heaven whose signs.
                            </p>

                            <!-- Footer -->
                            <div class="row align-items-center">
                              <div class="col-auto d-none d-lg-block">

                                <!-- Text -->
                                <p class="mb-0 fs-sm">Was this review helpful?</p>

                              </div>
                              <div class="col-auto me-auto">

                                <!-- Rate -->
                                <div class="rate">
                                  <a class="rate-item" data-toggle="vote" data-count="2" href="#" role="button">
                                    <i class="fe fe-thumbs-up"></i>
                                  </a>
                                  <a class="rate-item" data-toggle="vote" data-count="1" href="#" role="button">
                                    <i class="fe fe-thumbs-down"></i>
                                  </a>
                                </div>

                              </div>
                              <div class="col-auto d-none d-lg-block">

                                <!-- Text -->
                                <p class="mb-0 fs-sm">Comments (1)</p>

                              </div>
                              <div class="col-auto">

                                <!-- Button -->
                                <a class="btn btn-xs btn-outline-border" href="#!">
                                  Comment
                                </a>

                              </div>
                            </div>

                          </div>
                        </div>
                      </div>

                      <!-- Child review -->
                      <div class="review review-child">
                        <div class="review-body">

                          <!-- Content -->
                          <div class="row">
                            <div class="col-12 col-md-auto">

                              <!-- Avatar -->
                              <div class="avatar avatar-xxl mb-6 mb-md-0">
                                <span class="avatar-title rounded-circle">
                                  <i class="fa fa-user"></i>
                                </span>
                              </div>

                            </div>
                            <div class="col-12 col-md">

                              <!-- Header -->
                              <div class="row mb-6">
                                <div class="col-12">

                                  <!-- Rating -->
                                  <div class="rating fs-sm text-dark" data-value="4">
                                    <div class="rating-item">
                                      <i class="fas fa-star"></i>
                                    </div>
                                    <div class="rating-item">
                                      <i class="fas fa-star"></i>
                                    </div>
                                    <div class="rating-item">
                                      <i class="fas fa-star"></i>
                                    </div>
                                    <div class="rating-item">
                                      <i class="fas fa-star"></i>
                                    </div>
                                    <div class="rating-item">
                                      <i class="fas fa-star"></i>
                                    </div>
                                  </div>

                                </div>
                                <div class="col-12">

                                  <!-- Time -->
                                  <span class="fs-xs text-muted">
                                    William Stokes, <time datetime="2019-07-14">14 Jul 2019</time>
                                  </span>

                                </div>
                              </div>

                              <!-- Title -->
                              <p class="mb-2 fs-lg fw-bold">
                                Very good
                              </p>

                              <!-- Text -->
                              <p class="text-gray-500">
                                Made face lights yielding forth created for image behold blessed seas.
                              </p>

                              <!-- Footer -->
                              <div class="row align-items-center">
                                <div class="col-auto d-none d-lg-block">

                                  <!-- Text -->
                                  <p class="mb-0 fs-sm">Was this review helpful?</p>

                                </div>
                                <div class="col-auto me-auto">

                                  <!-- Rate -->
                                  <div class="rate">
                                    <a class="rate-item" data-toggle="vote" data-count="7" href="#" role="button">
                                      <i class="fe fe-thumbs-up"></i>
                                    </a>
                                    <a class="rate-item" data-toggle="vote" data-count="0" href="#" role="button">
                                      <i class="fe fe-thumbs-down"></i>
                                    </a>
                                  </div>

                                </div>
                                <div class="col-auto d-none d-lg-block">

                                  <!-- Text -->
                                  <p class="mb-0 fs-sm">Comments (0)</p>

                                </div>
                                <div class="col-auto">

                                  <!-- Button -->
                                  <a class="btn btn-xs btn-outline-border" href="#!">
                                    Comment
                                  </a>

                                </div>
                              </div>

                            </div>
                          </div>

                        </div>
                      </div>

                    </div>

                  </div>

                  <!-- Pagination -->
                  <nav class="d-flex justify-content-center mt-9">
                    <ul class="pagination pagination-sm text-gray-400">
                      <li class="page-item">
                        <a class="page-link page-link-arrow" href="#">
                          <i class="fa fa-caret-left"></i>
                        </a>
                      </li>
                      <li class="page-item active">
                        <a class="page-link" href="#">1</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">2</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">3</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link page-link-arrow" href="#">
                          <i class="fa fa-caret-right"></i>
                        </a>
                      </li>
                    </ul>
                  </nav>

                </div>
              </div>
            </div>
          </section>

@endsection
