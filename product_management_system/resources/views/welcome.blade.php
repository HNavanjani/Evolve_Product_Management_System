@extends('layout')
@section('content')
<br><br>
<div>
    <a href="{{route('seller')}}"><b>Seller Page</b></a>
</div>
<div>
    <a href="{{route('product')}}"><b>Product Page</b></a>
</div>
<div>
    <a href="{{route('seller_product')}}"><b>Seller-Product Assign Page</b></a>
</div>
@endsection
