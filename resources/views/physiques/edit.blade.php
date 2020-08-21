@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 class="text-white">Edit Client physique</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('physiques.index') }}"> Retour</a>
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
<div class="col-md-9 offset-md-2 mt-5">
    <div class="card">
        <h4 class="card-header text-center">BANQUE DU PEUPLE</h4>
        <div class="card-body">
            <form action="{{ route('physiques.update',$physique->id) }}" method="POST">
                @csrf

                @method('PUT')

                <div class="form-row">
                    <div class="form-group col-md-5 offset-md-1">
                        <label for="">ID</label>
                        <input class="form-control" readonly type="text" name="id" value="{{ $physique->id }}" />
                    </div>

                    <div class="form-group col-md-5">
                        <label for="">Prenom</label>
                        <input class="form-control" type="text" name="prenom" value="{{ $physique->prenom }}" />
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-5 offset-md-1">
                        <label for="">Nom</label>
                        <input class="form-control" type="text" name="nom" value="{{ $physique->nom }}" />
                    </div>

                    <div class="form-group col-md-5">
                        <label for="">Adresse</label>
                        <input class="form-control" type="text" name="adress" value="{{ $physique->adress }}" />
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-5 offset-md-1">
                        <label for="">Email</label>
                        <input class="form-control" type="text" name="email" value="{{ $physique->email }}" />
                    </div>

                    <div class="form-group col-md-5">
                        <label for="">Telephone</label>
                        <input class="form-control" type="text" name="telephone" value="{{ $physique->telephone }}" />
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-5 offset-md-1">
                        <label for="">Sexe</label>
                        <input class="form-control" type="text" name="sexe" value="{{ $physique->sexe }}" />
                    </div>

                    <div class="form-group col-md-5">
                        <label for="">Profession</label>
                        <input class="form-control" type="text" name="profession" value="{{ $physique->profession }}" />
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-5 offset-md-1">
                        <label for="">CNI</label>
                        <input class="form-control" type="text" name="cni" value="{{ $physique->cni }}" />
                    </div>

                    <div class="form-group col-md-5">
                        <label for="">Salaire</label>
                        <input class="form-control" type="text" name="salaire" value="{{ $physique->salaire }}" />
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
        </div>
        </form>
    </div>
</div>
</div>
@endsection