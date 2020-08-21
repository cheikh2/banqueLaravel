@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 class="text-white">Banque du peuple </h2>
        </div>
        <div class="pull-right col-md-1 mt-4">
            <a class="btn btn-success" href="{{ route('physiques.create') }}"> Créer un client physique</a>
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
        <th>Prenom</th>
        <th>Adresse</th>
        <th>Email</th>
        <th>Telephone</th>
        <th>Sexe</th>
        <th>Profession</th>
        <th>CNI</th>
        <th>Salaire</th>
        <th>Physique</th>
        <th>Action</th>
        <th>Action</th>
        <th>Action</th>
    </tr>
    @foreach ($physiques as $physique)
    <tr class="text-white bg-secondary">
        <td>{{ $physique->id }}</td>
        <td>{{ $physique->prenom }}</td>
        <td>{{ $physique->nom }}</td>
        <td>{{ $physique->adress }}</td>
        <td>{{ $physique->email }}</td>
        <td>{{ $physique->telephone }}</td>
        <td>{{ $physique->sexe }}</td>
        <td>{{ $physique->profession }}</td>
        <td>{{ $physique->cni }}</td>
        <td>{{ $physique->salaire }}</td>
        <td>{{ $physique->morals->nomEmpl ?? ''}}</td>
        <td><a class="btn btn-info" href="{{ route('physiques.show',$physique->id) }}">Show</a></td>
        <td><a class="btn btn-primary" href="{{ route('physiques.edit',$physique->id) }}">Edit</a></td>
        <td>
            <form action="{{ route('physiques.destroy',$physique->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer?');">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
{{ $physiques->links() }}
@endsection