@extends('admin.user.layout')
@section('content')
@extends('layouts.sidebaradm')

@section('sidebarleft')
<a href="/adminuser">Les animateurs</a>
<br/>
<a href="/adminformation">Les formations</a>
<br/>
<a href="/adminevent">Les évènements</a>
@endsection
<div class="col2flex">
<div class="entete">
        <h2>Créer une nouvelle formation</h2>
        <a class="btn btn-primary" href="javascript:window.history.go(-1);">Page précédente</a>
    </div>
    <hr/>
            <div class="dashContent">

      <form action="{{ url('adminformation') }}" method="post" class="forms">
      @csrf
        <div class="form-group">
            <label for="title">Titre :</label>
            <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
        </div>
        <div class="form-group">
            <label for="descrFormations">Description rapide :</label>
            <input type="text" class="form-control" id="descrFormations" placeholder="Enter description" name="descrFormations">
        </div>
        <div class="form-group">
            <label for="startDate">Date de début :</label>
            <input type="date" name="startDate" id="startDate" rows="10" placeholder="startDate" >
        </div>
        <div class="form-group">
            <label for="endDate">Date de fin :</label>
            <input type="date" name="endDate" id="endDate" rows="10" placeholder="endDate" >
        </div>
        <div class="form-group">
            <label for="type">Type :</label>
                <select name="type" id="type">
                    <option value="" selected disabled hidden>type </option>
                    <option value="physique" name="type">Physique</option>
                    <option value="virtuel" name="type">Virtuel</option>
                </select>
        </div>
        <div class="form-group">
            <label for="langue">Langue :</label>
            <select name="langue" id="langue">
                    <option value="français" name="langue">Français</option>
                    <option value="anglais" name="langue">Anglais</option>
                    <option value="bilingue" name="langue">Bilingue</option>
                </select>
        </div>
        <div class="form-group">
            <label for="idActivity">Activité :</label>
            <input class="form-control" id="idActivity" name="idActivity" rows="10" placeholder="idActivity">
        </div>
        <br/>
        <button type="submit" class="btnDash btn-default">Créer la formation</button>
    </form>

  </div>
</div>
@stop