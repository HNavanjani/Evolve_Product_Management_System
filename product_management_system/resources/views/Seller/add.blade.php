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
              <label>Name</label>
              <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label>Status</label>
                <select name="status" id="status">
                    <option value="0">Inactive</option>
                    <option value="1">Active</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
    <br><br>
    <a href="/"><b>Home Page</b></a>
</div>
@endsection