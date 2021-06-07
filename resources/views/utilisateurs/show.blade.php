@extends('base')

@section('main')
<div>
  <a style="margin: 19px;" href="{{ route('contacts.create')}}" class="btn btn-primary">Nouvel utilisateur</a>
</div>  
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Utilisateurs</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Email</td>
          <td>Job Title</td>
          <td>City</td>
          <td>Country</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$utilisateurs->id}}</td>
            <td>{{$utilisateurs->first_name}} {{$utilisateurs->last_name}}</td>
            <td>{{$utilisateurs->email}}</td>
            <td>{{$utilisateurs->job_title}}</td>
            <td>{{$utilisateurs->city}}</td>
            <td>{{$utilisateurs->country}}</td>
            <td>
                <a href="{{ route('utilisateurs.edit',$utilisateurs->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('utilisateurs.destroy', $utilisateurs->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
@endsection