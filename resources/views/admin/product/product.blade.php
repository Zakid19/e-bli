@extends('master')

@section('content')
<div class="card mb-3">
    <div class="card-body">
      <div class="row flex-between-center">
        <div class="col-sm-auto mb-2 mb-sm-0">
          <h6 class="mb-0">Showing 1-24 of 205 Products</h6>
        </div>
        <div class="col-sm-auto">
          <div class="row gx-2 align-items-center">
            <div class="col-auto">
                <a href="{{ route('product.create') }}" type="button" class="btn btn-sm btn-primary">Add</a>
            </div>
            <div class="col-auto pe-0"> <a class="text-600 px-1" href="product-list.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Product List"><span class="fas fa-list-ul"></span></a></div>
          </div>
        </div>
      </div>
    </div>
</div>
  <div class="card mb-3">
    <div class="card-body">
      <div class="row">
        @foreach($products as $product)
        <div class="mb-4 col-md-6 col-lg-4">
          <div class="border rounded-1 h-100 d-flex flex-column justify-content-between pb-3">
            <div class="overflow-hidden">
              <div class="position-relative rounded-top overflow-hidden"><a class="d-block" href="product-details.html"><img class="img-fluid rounded-top" src="{{ Storage::url($product->image) }}" alt="" /></a><span class="badge rounded-pill bg-success position-absolute mt-2 me-2 z-index-2 top-0 end-0">New</span></div>
              <div class="p-3">
                <h5 class="fs-0"><a class="text-dark" href="product-details.html">{{ $product->name }} ({{ $product->details }})</a></h5>
                <p class="fs--1 mb-3"><a class="text-500" href="">{{ $product->categories()->get()->implode('name', ', ') }}</a></p>
                <h5 class="fs-md-2 text-warning mb-0 d-flex align-items-center mb-3">{{ $product->presentPrice() }}<del class="ms-2 fs--1 text-500"> </del></h5>
                <p class="fs--1 mb-1">Stock: <strong class="text-success">Available</strong></p>
              </div>
            </div>
            <div class="d-flex flex-between-center px-3">
              <div><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-300"></span><span class="ms-1">(8)</span>
            </div>
              <div class="d-flex">
                <a class="btn btn-sm btn-primary me-2" href="{{ route('product.edit', $product) }}">Edit</a>
                <form action="{{ route('product.destroy', $product->slug) }}" method="post">
                    @csrf
                    @method('delete')
                <button type="submit" class="btn btn-sm btn-danger me-2" href="#!">Delete</button>
                </form>
               </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <div class="card-footer bg-light d-flex justify-content-center">
      <div><button class="btn btn-falcon-default btn-sm me-2" type="button" disabled="disabled" data-bs-toggle="tooltip" data-bs-placement="top" title="Prev"><span class="fas fa-chevron-left"></span></button><a class="btn btn-sm btn-falcon-default text-primary me-2" href="#!">1</a><a class="btn btn-sm btn-falcon-default me-2" href="#!">2</a><a class="btn btn-sm btn-falcon-default me-2" href="#!"> <span class="fas fa-ellipsis-h"></span></a><a class="btn btn-sm btn-falcon-default me-2" href="#!">35</a><button class="btn btn-falcon-default btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Next"><span class="fas fa-chevron-right">     </span></button></div>
    </div>
  </div>
@endsection
