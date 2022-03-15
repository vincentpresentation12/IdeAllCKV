@extends('admin.user.layout')
@section('content')
<div class="card">
  <div class="card-header">Création d'évènement</div>
  <div class="card-body">

      <form action="{{ url('admin/events') }}" method="post">
      @csrf
        <div class="form-group">
            <label for="nameEvent">titre:</label>
            <input type="text" class="form-control" id="nameEvent" placeholder="Entrez un titre" name="nameEvent">
        </div>
        <div class="form-group">
            <label for="descrEvent">description:</label>
            <input type="text" class="form-control" id="descrEvent" placeholder="Entrez une description" name="descrEvent">
        </div>
        <div class="form-group">
            <label for="startDate">Date de début :</label>
            <input type="date" name="startDate" id="startDate" rows="10">
        </div>
        <div class="form-group">
            <label for="endDate">date de fin :</label>
            <input type="date" name="endDate" id="endDate" rows="10">
        </div>
        <div class="form-group">
            <label for="nbAnimNeed">Nombre d'animateur requis' :</label>
            <input class="form-control" id="nbAnimNeed" name="type" rows="10">
        </div>
        <div class="form-group">
            <label for="type">type :</label>
            <input class="form-control" id="type" name="type" rows="10" placeholder="type">
        </div>
        <div class="form-group">
            <label for="companyName">Entreprise :</label>
            <input class="form-control" id="companyName" name="type" rows="10" placeholder="Nom de l'entreprise'">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>

  </div>
</div>
@stop