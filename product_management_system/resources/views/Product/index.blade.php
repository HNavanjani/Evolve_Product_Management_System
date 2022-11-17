
@extends('layout')
@section('content')
<div class="container-fluid">
    <div class="col-xl-12">
        <div class="row">
            <div class="col-xl-12">
                <div class="col-xl-6">
                    <p>Product Page</p>
                </div>
                <div class="col-xl-6">
                    <a href="{{route('addProduct')}}"><b>Add Product</b></a>
                </div>
            </div>
        </div>
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->qty}}</td>
                        <td>{{$product->details}}</td>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <br><br>
    <a href="/"><b>Home Page</b></a>
</div>
@endsection