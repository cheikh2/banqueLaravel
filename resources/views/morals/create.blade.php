@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 class="text-white">Ajouter un client moral</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('morals.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="col-md-9 offset-md-1 mt-5">
    <div class="card">
        <h4 class="card-header text-center">BANQUE DU PEUPLE</h4>
        <div class="card-body">
            <form action="{{ route('morals.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="">Nom</label>
                    <input class="form-control" type="text" name="nomEmpl" required>
                </div>

                <div class="form-group">
                    <label for="">Ninea</label>
                    <input class="form-control" type="text" name="ninea" required>
                </div>

                <div class="form-group">
                    <label for="">Registre de commerce</label>
                    <input class="form-control" type="text" name="rc" required>
                </div>

                <div class="form-group">
                    <label for="">Raison Sociale</label>
                    <input class="form-control" type="text" name="raisonSocial" required>
                </div>

                <div class="form-group">
                    <label for="">Adresse</label>
                    <input class="form-control" type="text" name="adressEmpl" required>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-5 offset-md-1">
                        
                        <button class="btn btn-success btn-block" type="submit" name="valider" value="Envoyer">Envoyer</button>
                    </div>

                    <div class="form-group col-md-5">
                        <button class="btn btn-primary btn-block" type="submit" name="annuler" value="Annuler">Annuler</button>
                    </div>
                </div>
        </div>
    </div>
</div>
</form>
@endsection