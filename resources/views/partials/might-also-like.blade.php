<section class="pt-11">
    <div class="container">
      <div class="row">
        <div class="col-12">

          <!-- Heading -->
          <h4 class="mb-10 text-center">You might also like</h4>

          <!-- Items -->
          <div class="row">
            @foreach($mightAlsoLike as $product)
            <div class="col-6 col-sm-6 col-md-4 col-lg-3">

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
                    <img class="card-img-top card-img-back" src="/assets/img/products/product-122.jpg" alt="...">
                    <img class="card-img-top card-img-front" src="/assets/img/products/product-7.jpg" alt="...">
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
                    <a class="text-muted" href="{{ route('shop.show', $product->slug) }}">Shoes</a>
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
                    <span class="text-primary">{{ $product->presentPrice() }}</span>
                  </div>

                </div>

              </div>

            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
