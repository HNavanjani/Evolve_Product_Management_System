@extends('layout')
@section('content')
<div class="container-fluid">
    <div class="col-xl-12">
        <div class="row">
            <div class="col-xl-12">
                <div class="col-xl-6">
                    <p>Seller Product Assign Page</p>
                </div>
                <div class="col-xl-6">
                    <a href="{{route('addSellerProduct')}}"><b>Add Seller Product</b></a>
                </div>
            </div>
        </div>
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Seller</th>
                        <th>Product</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($seller_products as $seller_product)
                        <td>{{$seller_product->id}}</td>
                        <td>{{$seller_product->t_seller_id}}</td>
                        <td>{{$seller_product->t_product_id}}</td>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <br><br>
    <a href="/"><b>Home Page</b></a>
</div>
@endsection