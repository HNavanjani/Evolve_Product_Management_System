@extends('layout')
@section('content')
<div class="container-fluid">
    <div class="col-xl-12">
        <div class="row">
            <div class="col-xl-12">
                <div class="col-xl-6">
                    <p>Seller Page</p>
                </div>
                <div class="col-xl-6">
                    <a href="{{route('addSeller')}}"><b>Add Seller</b></a>
                </div>
            </div>
        </div>
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sellers as $seller)
                        <td>{{$seller->id}}</td>
                        <td>{{$seller->name}}</td>
                        <td>{{$seller->email}}</td>
                        <td>Products</td>
                        <td>Edit</td>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <br><br>
    <a href="/"><b>Home Page</b></a>
</div>
@endsection