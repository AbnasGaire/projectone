@extends('master')

@section('context')
{{-- <div class="col-md-4 offset-md-4">
    <a href="/product" class="btn btn-success">Product</a>
    <a href="/productcategory" class="btn btn-primary">Productcategory</a>
    <a href="/unit" class="btn btn-success">Unit</a>
</div> --}}

<div class="jumbotron">
    <h1 class="display-4">Hello, world!</h1>
    <p class="lead">This is a simple hero unit.</p>
    <hr class="my-4">
    <p>Product category product unit</p>
    <a href="/product" class="btn btn-success">Product</a>
    <a href="/productcategory" class="btn btn-primary">Productcategory</a>
    <a href="/unit" class="btn btn-success">Unit</a>
  </div>

@endsection