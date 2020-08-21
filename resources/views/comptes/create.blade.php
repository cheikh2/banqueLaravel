@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 class="text-white">Ajouter un compte client</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('comptes.index') }}"> Back</a>
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
            <form action="{{ route('comptes.store') }}" method="POST" id="myform" autocomplete="off">
                @csrf
                <div class="form-row md-1">
                        <label for="">Choisissez le type de compte</label>
                        <select class="form-control" id="typecomptes_id" name="typescomptes_id"  onchange="compteType()">
                            <option value="">Selectionner</option>
                            @foreach ($typecomptes as $typecompte)
                            <option value="{{ $typecompte->id }}">{{ $typecompte->libelle }}</option>
                            @endforeach
                        </select>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-5 offset-md-1">
                        <label for="">Numero Agence</label>
                        <input class="form-control" type="text" name="numAgence" required>
                    </div>

                    <div class="form-group col-md-5">
                        <label for="">Numero Compte</label>
                        <input class="form-control" type="text" name="numCompte" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-5 offset-md-1">
                        <label for="">Cle Rib</label>
                        <input class="form-control" type="text" name="rib" required>
                    </div>

                    <div class="form-group col-md-5">
                        <label for="">Montant</label>
                        <input class="form-control" type="text" name="montant" required>
                    </div>
                </div>

                <div class="form-row" id="datebloc">
                    <div class="form-group col-md-5 offset-md-1">
                        <label for="">Debut blocage</label>
                        <input class="form-control" type="date" name="dateDebut" id="dateDebut">
                    </div>

                    <div class="form-group col-md-5">
                        <label for="">Fin blocage</label>
                        <input class="form-control" type="date" name="dateFin">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-5 offset-md-1">
                        <label for="">Choisissez le client Physique</label>
                        <input list="autoemployer" class="form-control" id="physiques_id" type="text" name="physiques_id" />
                        <datalist id="autoemployer">
                            <option value="">Selectionner</option>
                            @foreach ($physiques as $physique)
                            <option value="{{ $physique->id }}">{{ $physique->prenom }} {{ $physique->nom }}</option>
                            @endforeach
                        </datalist>
                    </div>

                    <!--div class="form-row">
                    <div class="form-group col-md-5 offset-md-1">
                        <label for="">Choisissez le client moral</label>
                        <input list="autoemployer" class="form-control" id="morals_id" type="text" name="morals_id" />
                        <datalist id="autoemployer">
                            <option value="">Selectionner</option>
                            @foreach ($morals as $moral)
                            <option value="{{ $moral->id }}">{{ $moral->nomEmpl }}</option>
                            @endforeach
                        </datalist>
                    </div-->
                    <div class="form-group col-md-5">
                        <label for="">Choisissez l'employeur</label>
                        <input list="morals_id" class="typeahead form-control" type="text" name="morals_id" />
                        <datalist id="morals_id">
                        </datalist>
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