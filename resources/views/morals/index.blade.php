@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2  class="text-white">Banque du peuple </h2>
        </div>
        <div class="pull-right mt-4">
            <a class="btn btn-success" href="{{ route('morals.create') }}"> Créer un client moral</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr class="text-white bg-dark">
        <th>Id</th>
        <th>Nom</th>
        <th>Ninea</th>
        <th>Registre</th>
        <th>Raison Sociale</th>
        <th>Adresse</th>
        <th>Action</th>
    </tr>
    @foreach ($morals as $moral)
    <tr class="text-white bg-dark">
        <td>{{ $moral->id }}</td>
        <td>{{ $moral->nomEmpl }}</td>
        <td>{{ $moral->ninea }}</td>
        <td>{{ $moral->rc }}</td>
        <td>{{ $moral->raisonSocial }}</td>
        <td>{{ $moral->adressEmpl }}</td>
        <td>
            <form action="{{ route('morals.destroy',$moral->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('morals.show',$moral->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('morals.edit',$moral->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer?');">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
{{ $morals->links() }}
@endsection