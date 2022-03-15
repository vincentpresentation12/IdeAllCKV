@extends('admin.user.layout')
@section('content')
<div class="card">
  <div class="card-header">Création d'utilisateur'</div>
  <div class="card-body">

      <form action="{{ url('adminuser') }}" method="post">
      @csrf
        <div class="form-group">
            <label for="firstname">Firstname :</label>
            <input type="text" class="form-control" id="firstname" placeholder="Enter First Name" name="firstname">
        </div>
        <div class="form-group">
            <label for="lastname">Lastname :</label>
            <input type="text" class="form-control" id="lastname" placeholder="Enter Last Name" name="lastname">
        </div>
        <div class="form-group">
            <label for="txtAddress">email :</label>
            <input class="form-control" id="email" name="email" rows="10" placeholder="Enter Address">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>

  </div>
</div>
@stop