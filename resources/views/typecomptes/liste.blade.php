@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2  class="text-white">Banque du peuple </h2>
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
        <th>Libelle</th>
    </tr>
    @foreach ($typecomptes as $typecompte)
    <tr class="text-white bg-dark">
        <td>{{ $typecompte->id }}</td>
        <td>{{ $typecompte->libelle }}</td>
    </tr>
    @endforeach
</table>
@endsection