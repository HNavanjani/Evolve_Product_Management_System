@extends('layout')
@section('content')
<div class="container-fluid">
    <div class="col-xl-12">
        <div class="row">
            <p>Add Seller</p>
        </div>
        <form action="{{route('seller')}}" method="POST">
            @csrf
            <div class="form-group">
                <label>Selller</label>
                <select name="t_seller_id" id="">
                    <option value="0">Select Seller</option>
                </select>
            </div>
            <div class="form-group">
                <label>Product</label>
                <select name="t_product_id" id="">
                    <option value="0">Select Product</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <br><br>
    <a href="/"><b>Home Page</b></a>
</div>
@endsection