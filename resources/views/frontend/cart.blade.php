@extends('layout')

@section('extra-css')

@endsection

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
                <li class="breadcrumb-item active">
                  Shopping Cart
                </li>
              </ol>

            </div>
          </div>
        </div>
    </nav>

      <!-- CONTENT -->
      <section class="pt-7 pb-12">
        <div class="container">
          <div class="row">
            <div class="col-12">

              <!-- Heading -->
              <h3 class="mb-10 text-center">Shopping Cart</h3>

            </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-7 mb-9">

                @include('partials.alert')

              <!-- List group -->
              <ul class="list-group list-group-lg list-group-flush-x mb-6">
                @if (Cart::count() > 0)
                    <h2>{{ Cart::count() }} Item(s) in Shopping Cart</h2>

                @foreach(Cart::content() as $item)
                <li class="list-group-item mb-3">
                  <div class="row align-items-center">
                    <div class="col-3">

                      <!-- Image -->
                      <a href="product.html">
                        <img src="assets/img/products/product-10.jpg" alt="..." class="img-fluid">
                      </a>

                    </div>
                    <div class="col">

                      <!-- Title -->
                      <div class="d-flex mb-2 fw-bold">
                        <a class="text-body" href="product.html">{{ $item->model->name }}</a> <span class="ms-auto">{{ $item->model->presentPrice() }}</span>
                      </div>

                      <!-- Text -->
                      <p class="mb-7 fs-sm text-muted">
                        Details: {{ $item->model->details }}
                      </p>

                      <!--Footer -->
                      <div class="d-flex align-items-center">

                        <select class="form-select form-select-xxs w-auto quantity" data-id="{{ $item->rowId }}" data-productQuantity="{{ $item->model->quantity }}" style="margin-right: 10px">
                            @for ($i = 1; $i < 5 + 1 ; $i++)
                                <option {{ $item->qty == $i ? 'selected' : '' }}>{{ $i }}</option>
                            @endfor
                        </select>

                        <!-- Remove -->
                        <form action="{{ route('cart.destroy', $item->rowId) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-light btn-xxs fs-xs ms-auto" style="margin-right: 10px"><i class="fe fe-x"></i> Remove</button>
                        </form>

                        <form action="{{ route('cart.switchToSaveForLater', $item->rowId) }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-light btn-xxs fs-xs ms-auto"><i class="fe fe-save"></i> Save for Later</button>
                        </form>
                      </div>

                    </div>
                  </div>
                </li>
                @endforeach
                @else

                <h3>No item in Cart</h3>
                @endif



              </ul>

              <!-- Footer -->
              <div class="row align-items-end justify-content-between mb-10 mb-md-0">
                <div class="col-12 col-md-auto">

                  <!-- Button -->
                  <button class="btn btn-sm btn-outline-dark">Update Cart</button>

                </div>
              </div>

            </div>
            <div class="col-12 col-md-5 col-lg-4 offset-lg-1">

              <!-- Total -->
              <div class="card mb-7 bg-light">
                <div class="card-body">
                  <ul class="list-group list-group-sm list-group-flush-y list-group-flush-x">
                    <li class="list-group-item d-flex">
                        <span>Subtotal</span> <span class="ms-auto fs-sm">{{ presentPrice(Cart::subtotal()) }}</span>
                      </li>
                      @if (session()->has('coupon'))
                      <li class="list-group-item d-flex">
                          <span>Discount ({{ session()->get('coupon')['name'] }})</span> <span class="ms-auto fs-sm">
                              -{{ presentPrice($discount) }}
                          <form action="{{ route('coupon.destroy') }}" method="post" class="d-inline">
                              @csrf
                              @method('delete')
                              <button type="submit" class="btn btn-light btn-xxs fs-xs ms-auto" style="margin-right: 10px"><i class="fe fe-x text-danger"></i></button>
                          </form>
                          </span>
                    </li>
                    <li class="list-group-item d-flex">
                      <span>Subtotal</span> <span class="ms-auto fs-sm">{{ presentPrice($newSubtotal) }}</span>
                    </li>
                    @endif
                    <li class="list-group-item d-flex">
                      <span>Tax (13%)</span> <span class="ms-auto fs-sm">{{ presentPrice($newTax) }}</span>
                    </li>
                    <li class="list-group-item d-flex fs-lg fw-bold">
                      <span>Total</span> <span class="ms-auto fs-sm">{{ presentPrice($newTotal) }}</span>
                    </li>
                    <li class="list-group-item fs-sm text-center text-gray-500">
                      Shipping cost calculated at Checkout *
                    </li>
                  </ul>
                </div>
              </div>

              <!-- Button -->
              <a class="btn w-100 btn-dark mb-2" href="{{ route('checkout.index') }}">Proceed to Checkout</a>

              <!-- Link -->
              <a class="btn btn-link btn-sm px-0 text-body" href="{{ route('shop.index') }}">
                <i class="fe fe-arrow-left me-2"></i> Continue Shopping
              </a>

            </div>

            <h3 class="mb-10 text-center">Saved For Later</h3>

            <div class="col-12 col-md-7">
              <ul class="list-group list-group-lg list-group-flush-x mb-6">

                @if (Cart::instance('saveForLater')->count() > 0)
                <h2>{{ Cart::instance('saveForLater')->count() }} item(s) Saved For Later</h2>

                @foreach (Cart::instance('saveForLater')->content() as $item)
                <li class="list-group-item mb-3">
                  <div class="row align-items-center">
                    <div class="col-3">

                      <!-- Image -->
                      <a href="product.html">
                        <img src="assets/img/products/product-10.jpg" alt="..." class="img-fluid">
                      </a>

                    </div>
                    <div class="col">

                      <!-- Title -->
                      <div class="d-flex mb-2 fw-bold">
                        <a class="text-body" href="product.html">{{ $item->model->name }}</a> <span class="ms-auto">{{ $item->model->presentPrice() }}</span>
                      </div>

                      <!-- Text -->
                      <p class="mb-7 fs-sm text-muted">
                        Details: {{ $item->model->details }}
                      </p>

                      <!--Footer -->
                      <div class="d-flex align-items-center">

                        <select class="form-select form-select-xxs w-auto quantity" data-id="{{ $item->rowId }}" data-productQuantity="{{ $item->model->quantity }}" style="margin-right: 10px">
                            @for ($i = 1; $i < 5 + 1 ; $i++)
                                <option {{ $item->qty == $i ? 'selected' : '' }}>{{ $i }}</option>
                            @endfor
                        </select>

                        <!-- Remove -->
                        <form action="{{ route('saveForLater.destroy', $item->rowId) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-light btn-xxs fs-xs ms-auto" style="margin-right: 10px"><i class="fe fe-x"></i> Remove</button>
                        </form>

                        <form action="{{ route('saveForLater.switchToCart', $item->rowId) }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-light btn-xxs fs-xs ms-auto"><i class="fe fe-save"></i> Switch to Cart</button>
                        </form>
                      </div>

                    </div>
                  </div>
                </li>
                @endforeach
                @else

                <h3>No item in Saved</h3>
                @endif
              </ul>
            </div>
          </div>
        </div>
      </section>

      @include('partials.might-also-like')
@endsection

@section('extra-js')

<script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
<script src="https://unpkg.com/axios@1.1.2/dist/axios.min.js"></script>

<script>
    (function(){
        const classname = document.querySelectorAll('.quantity')

        Array.from(classname).forEach(function(element) {
            element.addEventListener('change', function() {
                const id = element.getAttribute('data-id')
                const productQuantity = element.getAttribute('data-productQuantity')

                axios.patch(`/cart/${id}`, {
                    quantity: this.value,
                    productQuantity: productQuantity
                })
                .then(function (response) {
                    // console.log(response);
                    window.location.href = '{{ route('cart.index') }}'
                })
                .catch(function (error) {
                    // console.log(error);
                    window.location.href = '{{ route('cart.index') }}'
                });
            })
        })
    })();
</script>
@endsection
