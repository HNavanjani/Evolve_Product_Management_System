@extends('layout')
@section('content')
<div class="container-fluid">
    <div class="col-xl-12">
        <div class="row">
            <p>Add Product</p>
        </div>
        <form action="{{route('product')}}" method="POST">
            @csrf
            <div class="form-group">
              <label>Name</label>
              <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="number" class="form-control" id="price" name="price">
            </div>
            <div class="form-group">
                <label>Qty</label>
                <input type="number" class="form-control" id="qty" name="qty">
            </div>
            <div class="form-group">
                <label>Details</label>
                <input type="text" class="form-control" id="details" name="details">
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
    <br><br>
    <a href="/"><b>Home Page</b></a>
</div>
@endsection