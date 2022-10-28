@extends('layout')

@section('content')
    <!-- CONTENT -->
    <section class="py-11">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-4 col-lg-3">
                @include('partials.alert')
              <!-- Filters -->
              <form class="mb-10 mb-md-0">
                <ul class="nav nav-vertical" id="filterNav">
                  <li class="nav-item">

                    <!-- Toggle -->
                    <a class="nav-link dropdown-toggle fs-lg text-reset border-bottom mb-6" data-bs-toggle="collapse" href="#categoryCollapse">
                      Category
                    </a>

                    <!-- Collapse -->
                    <div class="collapse show" id="categoryCollapse">
                      <div class="form-group">
                        <ul class="list-styled mb-0" id="productsNav">
                            @foreach($categories as $category)
                          <li class="list-styled-item">
                            <a class="list-styled-link {{ ($category->slug) }}" href="{{ route('shop.index', ['category' => $category->slug]) }}">
                              {{ $category->name }}
                            </a>
                          </li>
                          @endforeach
                        </ul>
                      </div>
                    </div>

                  </li>
                </ul>
              </form>

            </div>
            <div class="col-12 col-md-8 col-lg-9">

              <!-- Header -->
              <div class="row align-items-center mb-7">
                <div class="col-12 col-md">

                  <!-- Heading -->
                  <h3 class="mb-1">{{ $categoryName }}</h3>

                  <!-- Breadcrumb -->
                  <ol class="breadcrumb mb-md-0 fs-xs text-gray-400">
                    <li class="breadcrumb-item">
                      <a class="text-gray-400" href="index-2.html">Home</a>
                    </li>
                    <li class="breadcrumb-item active">
                      {{ $categoryName }}
                    </li>
                  </ol>

                </div>
                <div class="col-12 col-md-auto">

                  <!-- Select -->
                  {{-- <select class="form-select form-select-xs">
                    <option selected>High to Low</option>
                    <option selected>High to Low</option>
                  </select> --}}

                  <div>
                    <strong>Price: </strong>
                  <a type="button" class="btn btn-dark btn-xxs" href="{{ route('shop.index', ['category' => request()->category, 'sort' => 'low_high']) }}">Low to High</a>

                  <a type="button" class="btn btn-dark btn-xxs" href="{{ route('shop.index', ['category' => request()->category, 'sort' => 'high_low']) }}">High to Low</a>
                </div>

                </div>
              </div>

              <!-- Tags -->
              <div class="row mb-7">
                <div class="col-12">

                </div>
              </div>

              <!-- Products -->
              <div class="row">
                @forelse($products as $product)
                <div class="col-6 col-md-4">

                  <!-- Card -->
                  <div class="card mb-7">

                    <!-- Image -->
                    <div class="card-img">

                      <!-- Image -->
                      <a class="card-img" href="{{ route('shop.show', $product->slug) }}">
                        <img class="card-img-top card-img" src="assets/img/products/product-11.jpg" alt="...">
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
                        <a class="text-muted {{ ($category->slug) }}" href="{{ route('shop.index', ['category' => $category->slug]) }}">{{ $product->categories()->get()->implode('name', ', ') }}</a>
                      </div>

                      <!-- Title -->
                      <div class="fw-bold">
                        <a class="text-body" href="{{ route('shop.show', $product->slug) }}">
                          {{ $product->name }}
                        </a>
                      </div>

                      <!-- Price -->
                      <div class="fw-bold text-muted">
                        {{ $product->presentPrice() }}
                      </div>

                    </div>

                  </div>

                </div>
                @empty
                <h4>No items found</h4>
                @endforelse
              </div>

              <!-- Pagination -->
              <nav class="d-flex justify-content-center justify-content-md-start">
                {{ $products->links() }}
              </nav>

            </div>
          </div>
        </div>
      </section>
@endsection
