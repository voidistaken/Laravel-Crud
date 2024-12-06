@extends('template')
@section('title','Update')
@section('content')
<div class="row">
    <div class="col-12 h2">Update client</div>
    <div class="col-12">

        <form action="{{route('clients.update',$client->id )}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label>Name</label>
              <input type="text" name="name" class="form-control" value="{{$client->name}}">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="{{$client->email}}">
              </div>

              <div class="form-group">
                <label>Telephone</label>
                <input type="text" name="phone" class="form-control" value="{{$client->phone}}">
              </div>

            <button type="submit" class="btn btn-success">Update</button>
          </form>


    </div>
</div>

@endsection
