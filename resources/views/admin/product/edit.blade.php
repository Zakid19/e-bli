@extends('master')

@section('content')

<div class="card mb-3">
    <div class="card-header">
      <div class="row flex-between-end">
        <div class="col-auto align-self-center">
          <h5 class="mb-0" data-anchor="data-anchor" id="basic-form">Basic form<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#basic-form" style="padding-left: 0.375em;"></a></h5>
        </div>
        <div class="col-auto ms-auto">
          <div class="nav nav-pills nav-pills-falcon flex-grow-1" role="tablist"><button class="btn btn-sm active" data-bs-toggle="pill" data-bs-target="#dom-41c3196c-e98b-4371-85d8-664b32bc4105" type="button" role="tab" aria-controls="dom-41c3196c-e98b-4371-85d8-664b32bc4105" aria-selected="true" id="tab-dom-41c3196c-e98b-4371-85d8-664b32bc4105">Preview</button><button class="btn btn-sm" data-bs-toggle="pill" data-bs-target="#dom-5ba090b5-79e2-47b1-800b-7a994ea74b21" type="button" role="tab" aria-controls="dom-5ba090b5-79e2-47b1-800b-7a994ea74b21" aria-selected="false" id="tab-dom-5ba090b5-79e2-47b1-800b-7a994ea74b21" tabindex="-1">Code</button></div>
        </div>
      </div>
    </div>
    <div class="card-body bg-light">
      <div class="tab-content">
        <div class="tab-pane preview-tab-pane active show" role="tabpanel" aria-labelledby="tab-dom-41c3196c-e98b-4371-85d8-664b32bc4105" id="dom-41c3196c-e98b-4371-85d8-664b32bc4105">

        <form action="{{ route('product.update', $product->slug) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
                <label class="form-label" for="name">Name</label><input class="form-control" id="name" type="text" name="name" placeholder="Name" value="{{ old('name', $product->name) }}">
                @error('name')
                <div class="alert alert-danger alert-dismissible fade show mt-3">
                    <div class="mt-2 text-danger">{{ $message }}</div>
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label" for="details">Details</label><input class="form-control" id="details" type="text" name="details" placeholder="Details" value="{{ old('details', $product->details) }}">
                @error('details')
                <div class="alert alert-danger alert-dismissible fade show mt-3">
                    <div class="mt-2 text-danger">{{ $message }}</div>
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label" for="details">Price</label><input class="form-control" id="price" type="text" name="price" placeholder="Price" value="{{ old('price', $product->price) }}">
                @error('price')
                <div class="alert alert-danger alert-dismissible fade show mt-3">
                    <div class="mt-2 text-danger">{{ $message }}</div>
                </div>
                @enderror
            </div>

            <div class="form-check form-switch">
                <label class="form-check-label" for="featured">Featured</label>
                <input type="hidden" name="active" value="0">
                <input class="form-check-input" name="featured" id="featured" type="checkbox" checked="" value="1" {{ old('featured') ? 'checked="checked"' : '' }}>
            </div>

            <div class="mb-3">
                <label class="form-label">Upload Image</label>
                <div class="div mb-2">
                    <img src="{{ Storage::url($product->image) }}" alt="" class="img-fluid rounded" width="30%">
                </div>
                <input class="form-control" type="file" id="image" name="image">
                @error('image')
                <div class="alert alert-danger alert-dismissible fade show mt-3">
                    <div class="mt-2 text-danger">{{ $message }}</div>
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label" for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Description" value="{{ old('description', $product->description) }}">
                </textarea>
                @error('description')
                <div class="alert alert-danger alert-dismissible fade show mt-3">
                    <div class="mt-2 text-danger">{{ $message }}</div>
                </div>
                @enderror
            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
        </div>
        </div>
      </div>
    </div>
  </div>
@endsection
