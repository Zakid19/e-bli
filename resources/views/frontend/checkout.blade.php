@extends('layout')

@section('extra-css')
    <script src="https://js.stripe.com/v3/"></script>
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
            <li class="breadcrumb-item">
              <a class="text-gray-400" href="shopping-cart.html">Shopping Cart</a>
            </li>
            <li class="breadcrumb-item active">
              Checkout
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
        @include('partials.alert')
        <div class="col-12 text-center">

          <!-- Heading -->
          <h3 class="mb-4">Checkout</h3>

          <!-- Subheading -->
          <p class="mb-10">
            Already have an account? <a class="fw-bold text-reset" href="#!">Click here to login</a>
          </p>

        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-7">
          <!-- Form -->
          <form action="{{ route('checkout.store') }}" method="POST" id="payment-form">
            @csrf
            <!-- Heading -->
            <h6 class="mb-7">Billing Details</h6>

            <!-- Billing details -->
            <div class="row mb-9">
              <div class="col-12">

                <!-- First Name -->
                <div class="form-group">
                  <label class="form-label" for="checkoutBillingFirstName">Name *</label>
                  <input class="form-control form-control-sm" id="name" name="name" type="text" placeholder="First Name" required>
                </div>

              </div>
              <div class="col-12">

                <!-- Email -->
                <div class="form-group">
                  <label class="form-label" for="checkoutBillingEmail">Email *</label>
                  <input class="form-control form-control-sm" id="email" name="email" type="email" placeholder="Email" required>
                </div>

              </div>
              <div class="col-12">

                <!-- Country -->
                <div class="form-group">
                  <label class="form-label" for="checkoutBillingCountry">Country *</label>
                  <input class="form-control form-control-sm" id="country" name="country" type="text" placeholder="Country" required>
                </div>

              </div>


              <div class="col-12">

                <!-- Company Name -->
                <div class="form-group">
                  <label class="form-label" for="checkoutBillingCompany">Province</label>
                  <input class="form-control form-control-sm" id="province" name="province" type="text" placeholder="Province">
                </div>

              </div>

              <div class="col-12">

                <!-- Address Line 1 -->
                <div class="form-group">
                  <label class="form-label" for="checkoutBillingAddress">Address</label>
                  <input class="form-control form-control-sm" id="address" name="address" type="text" placeholder="Address" required>
                </div>

              </div>
              <div class="col-12 col-md-6">

                <!-- Town / City -->
                <div class="form-group">
                  <label class="form-label" for="checkoutBillingTown">Town / City *</label>
                  <input class="form-control form-control-sm" id="city" name="city" type="text" placeholder="Town / City" required>
                </div>

              </div>
              <div class="col-12 col-md-6">

                <!-- ZIP / Postcode -->
                <div class="form-group">
                  <label class="form-label" for="checkoutBillingZIP">ZIP / Postcode *</label>
                  <input class="form-control form-control-sm" id="postalcode" name="postalcode" type="text" placeholder="ZIP / Postcode" required>
                </div>

              </div>
              <div class="col-12">

                <!-- Mobile Phone -->
                <div class="form-group mb-0">
                  <label class="form-label" for="checkoutBillingPhone">Mobile Phone *</label>
                  <input class="form-control form-control-sm" id="phone"  name="phone" type="tel" placeholder="Mobile Phone" required>
                </div>

              </div>
            </div>

            <!-- Heading -->
            <h6 class="mb-7">Payment</h6>

            <!-- List group -->
            <div class="list-group list-group-sm mb-7">
              <div class="list-group-item">

                <!-- Radio -->
                <div class="form-check custom-radio">

                  <!-- Input -->
                  <input class="form-check-input" id="checkoutPaymentCard" name="payment" type="radio" data-collapse="show" data-target="#checkoutPaymentCardCollapse">

                  <!-- Label -->
                  <label class="form-check-label fs-sm text-body text-nowrap" for="checkoutPaymentCard">
                    Credit Card <img class="ms-2" src="assets/img/brands/color/cards.svg" alt="...">
                  </label>

                </div>

              </div>
              <div class="list-group-item collapse py-0" id="checkoutPaymentCardCollapse">

                <!-- Form -->
                <div class="row gx-5 py-5">
                  <div class="col-12">
                    <div class="form-group mb-4">
                      <label class="visually-hidden" for="checkoutPaymentCardNumber">Card Number</label>
                      <input class="form-control form-control-sm" id="card_number" name="card_number" type="text" placeholder="Card Number *" required>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group mb-4">
                      <label class="visually-hidden" for="checkoutPaymentCardName">Name on Card</label>
                      <input class="form-control form-control-sm" id="name_on_card" name="name_on_card" type="text" placeholder="Name on Card *" required>
                    </div>
                  </div>
                  <div class="col-12 col-md-4">
                    <div class="form-group mb-md-0">
                      <label class="visually-hidden" for="expiry_month">Month</label>
                      <select class="form-select form-select-sm" id="expiry_month" name="expiry_month">
                        <option>January</option>
                        <option>February</option>
                        <option>March</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-12 col-md-4">
                    <div class="form-group mb-md-0">
                      <label class="visually-hidden" for="expiry_year">Year</label>
                      <select class="form-select form-select-sm" id="expiry_year" name="expiry_year">
                        <option>2017</option>
                        <option>2018</option>
                        <option>2019</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-12 col-md-4">
                    <div class="input-group input-group-merge">
                      <input class="form-control form-control-sm" id="cvv" name="cvv" type="text" placeholder="CVV *" required>
                      <div class="input-group-append">
                        <span class="input-group-text" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="The CVV Number on your credit card or debit card is a 3 digit number on VISA, MasterCard and Discover branded credit and debit cards.">
                          <span><i class="fe fe-help-circle"></i></span>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="list-group-item">

                <!-- Radio -->
                <div class="form-check custom-radio">

                  <!-- Input -->
                  <input class="form-check-input" id="checkoutPaymentPaypal" name="payment" type="radio" data-collapse="hide" data-target="#checkoutPaymentCardCollapse">

                  <!-- Label -->
                  <label class="form-check-label fs-sm text-body text-nowrap" for="checkoutPaymentPaypal">
                    <img src="assets/img/brands/color/paypal.svg" alt="...">
                  </label>

                </div>

              </div>
            </div>

            <!-- Notes -->
            <textarea class="form-control form-control-sm mb-9 mb-md-0 fs-xs" rows="5" placeholder="Order Notes (optional)"></textarea>

            <button type="submit" id="place-order" class="btn w-100 btn-dark">
                Place Order
              </button>

          </form>

        </div>
        <div class="col-12 col-md-5 col-lg-4 offset-lg-1">

          <!-- Heading -->
          <h6 class="mb-7">Order Items ({{ Cart::count() }})</h6>

          <!-- Divider -->
          <hr class="my-7">

          <!-- List group -->

          <ul class="list-group list-group-lg list-group-flush-y list-group-flush-x mb-7">
            @foreach(Cart::content() as $item)
            <li class="list-group-item">
              <div class="row align-items-center">
                <div class="col-4">

                  <!-- Image -->
                  <a href="{{ route('shop.show', $item->model->slug) }}">
                    <img src="assets/img/products/product-6.jpg" alt="..." class="img-fluid">
                  </a>

                </div>
                <div class="col">

                  <!-- Title -->
                  <p class="mb-4 fs-sm fw-bold">
                    <a class="text-body" href="product.html">{{ $item->model->name }}</a> <br>
                    <span class="text-muted">{{ $item->model->presentPrice() }}</span>
                  </p>

                  <!-- Text -->
                  <div class="fs-sm text-muted">
                    Details: {{ $item->model->details }} <br>
                  </div>

                </div>
              </div>
            </li>
            @endforeach
          </ul>

          <!-- Card -->
          <div class="card mb-9 bg-light">
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
                    <span>New Subtotal</span> <span class="ms-auto fs-sm">{{ presentPrice($newSubtotal) }}</span>
                </li>
                @endif
                <li class="list-group-item d-flex">
                  <span>Tax</span> <span class="ms-auto fs-sm">{{ presentPrice($newTax) }}</span>
                </li>
                <li class="list-group-item d-flex fs-lg fw-bold">
                  <span>Total</span> <span class="ms-auto">{{ presentPrice($newTotal) }}</span>
                </li>
              </ul>
            </div>
          </div>

          @if (! session()->has('coupon'))
          <div class="col-12 col-md-12 mb-5">

            <!-- Coupon -->
            <form action="{{ route('coupon.store') }}" class="mb-7 mb-md-0" method="post">
              @csrf
              <label class="form-label fs-sm fw-bold" for="cartCouponCode">
                Coupon code:
              </label>
              <div class="row row gx-5">
                <div class="col">

                  <!-- Input -->
                  <input class="form-control form-control-sm" id="coupon_code" name="coupon_code" type="text" placeholder="Enter coupon code*">

                </div>
                <div class="col-auto">

                  <!-- Button -->
                  <button class="btn btn-sm btn-dark" type="submit">
                    Apply
                  </button>

                </div>
              </div>
            </form>

          </div>
          @endif

          <!-- Disclaimer -->
          <p class="mb-7 fs-xs text-gray-500">
            Your personal data will be used to process your order, support
            your experience throughout this website, and for other purposes
            described in our privacy policy.
          </p>

          <!-- Button -->
          <button type="submit" id="place-order" class="btn w-100 btn-dark">
            Place Order
          </button>

        </div>
      </div>
    </div>
  </section>
@endsection

@section('extra-js')
<script src="https://js.braintreegateway.com/web/dropin/1.13.0/js/dropin.min.js"></script>

<script>
    (function(){
        // Create a Stripe client
        var stripe = Stripe('{{ config('services.stripe.key') }}');

        // Create an instance of Elements
        var elements = stripe.elements();

        // Custom styling can be passed to options when creating an Element.
        // (Note that this demo uses a wider set of styles than the guide below.)
        var style = {
          base: {
            color: '#32325d',
            lineHeight: '18px',
            fontFamily: '"Roboto", Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
              color: '#aab7c4'
            }
          },
          invalid: {
            color: '#fa755a',
            iconColor: '#fa755a'
          }
        };

        // Create an instance of the card Element
        var card = elements.create('card', {
            style: style,
            hidePostalCode: true
        });

        // Add an instance of the card Element into the `card-element` <div>
        card.mount('#card-element');

        // Handle real-time validation errors from the card Element.
        card.addEventListener('change', function(event) {
          var displayError = document.getElementById('card-errors');
          if (event.error) {
            displayError.textContent = event.error.message;
          } else {
            displayError.textContent = '';
          }
        });

        // Handle form submission
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
          event.preventDefault();

          // Disable the submit button to prevent repeated clicks
          document.getElementById('place-order').disabled = true;

          var options = {
            name: document.getElementById('name_on_card').value,
            address_line1: document.getElementById('address').value,
            address_city: document.getElementById('city').value,
            address_state: document.getElementById('province').value,
            address_zip: document.getElementById('postalcode').value,
            address_county: document.getElementById('country').value,
            cvc: document.getElementById('cvv').value,
            exp_month: document.getElementById('expiry_month').value,
            exp_year: document.getElementById('expiry_year').val()
          }

          stripe.createToken(card, options).then(function(result) {
            if (result.error) {
              // Inform the user if there was an error
              var errorElement = document.getElementById('card-errors');
              errorElement.textContent = result.error.message;

              // Enable the submit button
              document.getElementById('place-order').disabled = false;
            } else {
              // Send the token to your server
              stripeTokenHandler(result.token);
            }
          });
        });

        function stripeTokenHandler(token) {
          // Insert the token ID into the form so it gets submitted to the server
          var form = document.getElementById('payment-form');
          var hiddenInput = document.createElement('input');
          hiddenInput.setAttribute('type', 'hidden');
          hiddenInput.setAttribute('name', 'stripeToken');
          hiddenInput.setAttribute('value', token.id);
          form.appendChild(hiddenInput);

          // Submit the form
          form.submit();
        }
    })();
</script>
@endsection
