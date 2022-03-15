@extends('admin.user.layout')
@section('content')
<div class="card">
  <div class="card-header">Création de formation</div>
  <div class="card-body">

      <form action="{{ url('adminformation') }}" method="post">
      @csrf
        <div class="form-group">
            <label for="title">title:</label>
            <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
        </div>
        <div class="form-group">
            <label for="descrFormations">description:</label>
            <input type="text" class="form-control" id="descrFormations" placeholder="Enter description" name="descrFormations">
        </div>
        <div class="form-group">
            <label for="startDate">Date de début :</label>
            <input type="date" name="startDate" id="startDate" rows="10" placeholder="startDate" >
        </div>
        <div class="form-group">
            <label for="endDate">date de fin :</label>
            <input type="date" name="endDate" id="endDate" rows="10" placeholder="endDate" >
        </div>
        <div class="form-group">
            <label for="type">email:</label>
            <input class="form-control" id="type" name="type" rows="10" placeholder="type">
        </div>
        <div class="form-group">
            <label for="idActivity">activité:</label>
            <input class="form-control" id="idActivity" name="idActivity" rows="10" placeholder="idActivity">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>

  </div>
</div>
@stop