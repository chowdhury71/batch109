@extends('layouts.backend')

@section('main')
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <h3 class="text-center pt-3">Create New Product</h3>
    <form action="{{route('admin.product.create')}}" method="post">
        @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Product Name</label>
    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Product Name">
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Product Price</label>
    <input type="number" name="price" class="form-control" id="price" placeholder="Enter Product Price">
  </div>
  <div class="mb-3">
    <label for ="desc" class="form-label">Description</label>
    <textarea name ="desc" class="form-control" id ="desc" placeholder ="Enter Product Description" rows="5"></textarea>
  </div>
  <button type="submit"class="btn btn-primary">Submit</button>
</form>
    </div>
</div>

@endsection
