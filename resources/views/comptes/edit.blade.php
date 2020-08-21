@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 class="text-white">Edition de compte</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('comptes.index') }}"> Retour</a>
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
            <form action="{{ route('comptes.update',$compte->id) }}" method="POST">
                @csrf

                @method('PUT')

                <div class="col-xs-12">
                    <label for="">ID</label>
                    <input class="form-control" readonly type="text" name="id" value="{{ $compte->id }}" />
                </div>

                <div class="form-row">
                    <div class="form-group col-md-5 offset-md-1">
                        <label for="">Numero Agence</label>
                        <input class="form-control" type="text" name="numAgence" value="{{ $compte->numAgence }}" />
                    </div>

                    <div class="form-group col-md-5">
                        <label for="">Numero Compte</label>
                        <input class="form-control" type="text" name="numCompte" value="{{ $compte->numCompte }}" />
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-5 offset-md-1">
                        <label for="">Cle Rib</label>
                        <input class="form-control" type="text" name="rib" value="{{ $compte->rib }}" />
                    </div>

                    <div class="form-group col-md-5">
                        <label for="">Montant</label>
                        <input class="form-control" type="text" name="montant" value="{{ $compte->montant }}" />
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-5 offset-md-1">
                        <label for="">Debut blocage</label>
                        <input class="form-control" type="date" name="dateDebut" value="{{ $compte->dateDebut }}" />
                    </div>

                    <div class="form-group col-md-5">
                        <label for="">Fin blocage</label>
                        <input class="form-control" type="date" name="dateFin" value="{{ $compte->dateFin }}" />
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-5 offset-md-1">
                        <label for="">Choisissez le client Physique</label>
                        <select class="form-control" id="physiques_id" name="physiques_id" value="{{ $compte->physiques_id }}">
                            <option value="">Selectionner</option>
                            @foreach ($physiques as $physique)
                            <option value="{{ $physique->id }}">{{ $physique->prenom }} {{ $physique->nom }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-md-5">
                        <label for="">Choisissez le client moral</label>
                        <select class="form-control" id="morals_id" name="morals_id" value="{{ $compte->morals_id }}">
                            <option value="{{ $compte->physiques_id }}">Selectionner</option>
                            @foreach ($morals as $moral)
                            <option value="{{ $moral->id }}">{{ $moral->nomEmpl }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-5 offset-md-1">
                        <button class="btn btn-success btn-block" type="submit" name="valider" value="Envoyer">Envoyer</button>
                    </div>
                    <div class="form-group col-md-5">
                        <button class="btn btn-primary btn-block" type="submit" name="annuler" value="Annuler">Annuler</button>
                    </div>
                </div>
            </form>
            @endsection