@extends('template')
@section('title','Ajout de client')
@section('content')
<div class="row">
    <div class="col-12">

        <form method="POST" action="{{route('cars.store')}}">
            @csrf
            <div class="form-group">
              <label>Name</label>
              <input type="text" name="name" class="form-control" placeholder="Votre nom">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Votre email">
              </div>

              <div class="form-group">
                <label>Tele</label>
                <input type="text" name="phone" class="form-control" placeholder="Votre tele">
              </div>

            <button type="submit" class="btn btn-primary">Ajouter</button>
          </form>


    </div>
</div>

@endsection
