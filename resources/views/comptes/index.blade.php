@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 class="text-white">Banque du peuple </h2>
        </div>
        <div class="pull-right mt-4">
            <a class="btn btn-success" href="{{ route('comptes.create') }}"> Créer compte</a>
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
        <th>N* Agence</th>
        <th>N* Compte</th>
        <th>Cle Rib</th>
        <th>Montant</th>
        <th>Deut Blocage</th>
        <th>Fin Blocage</th>
        <th>Physique</th>
        <th>Moral</th>
        <th>Date de creation</th>
        <th>Action</th>
        <th>Action</th>
        <th>Action</th>
    </tr>
    @foreach ($comptes as $compte)
    <tr class="text-white bg-dark">
        <td>{{ $compte->id }}</td>
        <td>{{ $compte->numAgence }}</td>
        <td>{{ $compte->numCompte }}</td>
        <td>{{ $compte->rib }}</td>
        <td>{{ $compte->montant }}</td>
        <td>{{ $compte->dateDebut }}</td>
        <td>{{ $compte->dateFin }}</td>
        <td>{{ $compte->physiques->prenom ?? ''}}</td>
        <td>{{ $compte->morals->nomEmpl ?? ''}}</td>
        <td>{{ $compte->created_at }}</td>
        <td><a class="btn btn-info" href="{{ route('comptes.show',$compte->id) }}">Show</a></td>
        <td><a class="btn btn-primary" href="{{ route('comptes.edit',$compte->id) }}">Edit</a></td>
        <td>
            <form action="{{ route('comptes.destroy',$compte->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer?');">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
{{ $comptes->links() }}
@endsection