@extends('base')

@section('main')
<div>
  <a style="margin: 19px;" href="{{ route('contacts.create')}}" class="btn btn-primary">Nouvel utilisateur</a>
</div>  
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Nombre d'utilisateurs</h1>    
      <p>$utilisateursCount</p>
</div>
@endsection