@extends('template')
@section('title','Liste Clients')
@section('content')

<div class="row">
    <div class="col-12">
        @if(session('success'))
            <div class="alert alert-info">{{session('success')}}</div>
        @endif

        @if(session('success_del'))
            <div class="alert alert-danger">{{session('success_del')}}</div>
        @endif
    </div>
</div>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>ACTIONS</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($clients as $clt )
            <tr>
                <td>{{$clt->id}}</td>
                <td>{{$clt->name}}</td>
                <td>{{$clt->email}}</td>
                <td>{{$clt->phone}}</td>
                <td>
                    <form method="post" action="{{route('clients.destroy',$clt->id)}}" style="display: inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Voulez-vous vraiment supprimer ce client?')" class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>

                    <a href="{{route('clients.edit',$clt->id)}}" class="btn btn-success">
                        <i class="fa fa-edit"></i>
                    </a>

                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4" class="h3 text-danger">Pas de client dans la base de données</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection
