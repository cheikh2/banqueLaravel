@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 class="text-white">Ajouter un client moral</h2>
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
            <form action="{{ route('physiques.store') }}" method="POST">
                @csrf

                <div class="form-row">
                    <div class="form-group col-md-5 offset-md-1">
                        <label for="">Prenom</label>
                        <input class="form-control" type="text" name="prenom" id="prenom" required />
                    </div>

                    <div class="form-group col-md-5">
                        <label for="">Nom</label>
                        <input class="form-control" type="text" name="nom" id="nom" required />
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-5 offset-md-1">
                        <label for="">Adresse</label>
                        <input class="form-control" type="text" name="adress" id="adress" required />
                    </div>

                    <div class="form-group col-md-5">
                        <label for="">Email</label>
                        <input class="form-control" type="text" name="email" id="email" required />
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-5 offset-md-1">
                        <label for="">Telephone</label>
                        <input class="form-control" type="text" name="telephone" id="telephone" required />
                    </div>

                    <div class="form-group col-md-5">
                        <label for="">Sexe</label>
                        <input class="form-control" type="text" name="sexe" id="sexe" required />
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col-md-5 offset-md-1">
                        <label for="">Profession</label>
                        <input class="form-control" type="text" id="profession" required />
                    </div>

                    <div class="form-group col-md-5">
                        <label for="">CNI</label>
                        <input class="form-control" type="text" name="cni" id="cni" required />
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col-md-5 offset-md-1">
                        <label for="">Salaire</label>
                        <input class="form-control" type="text" name="salaire" id="salaire" required />
                    </div>
                    <!--div class="col-xs-12">
        <label for="">Choisissez l'employeur</label>
        <select class="form-control" id="morals_id" name="morals_id">
            <option value="">Selectionner</option>
            @foreach ($morals as $moral)
            <option value="{{ $moral->id }}">{{ $moral->nomEmpl }}</option>
            @endforeach
        </select>
    </div-->
                    <!--div class="form-group col-md-5">
        <label for="">Choisissez l'employeur</label>
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
        </div>
        </form>
    </div>
</div>
</div>

<script type="text/javascript">
    var path = "{{ route('autocomplete') }}";
    $('input.typeahead').typeahead({
        source: function(query, process) {
            return $.get(path, {
                query: query
            }, function(data) {
                data.forEach((element, index) => {
                    console.log(element.nomEmpl);
                    $('.mora').remove()
                    $('#morals_id').append('<option value="{{ $moral->id }}" class="mora">' + element.nomEmpl + '</option>')
                });
            });
        }
    });
</script>
@endsection