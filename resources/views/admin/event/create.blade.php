@extends('admin.user.layout')
@section('content')
@extends('layouts.sidebar')

@section('sidebarleft')
<a href="/adminuser">Les animateurs</a>
<br/>
<a href="/adminformation">Les formations</a>
<br/>
<a href="/adminevent">Les évènements</a>
@endsection
<div class="col2flex">
    <div class="entete">
        <h2>Créer un nouvel évènement</h2>
        <a class="btn btn-primary" href="javascript:window.history.go(-1);">Page précédente</a>
    </div>
    <hr/>
    <div class="dashContent">

      <form action="{{ url('adminevent') }}" method="post" class="forms">
      @csrf
        <div class="form-group">
            <label for="nameEvent">Titre :</label>
            <input type="text" class="form-control" id="nameEvent" placeholder="Enter titre" name="nameEvent">
        </div>
        <div class="form-group">
            <label for="descrEvent">Description :</label>
            <input type="text" class="form-control" id="descrEvent" placeholder="Enter description" name="descrEvent">
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
            <label for="companyName">Entreprise :</label>
            <input class="form-control" id="companyName" name="companyName" rows="10" placeholder="ex: Haribo">
        </div>
        <div class="form-group">
            <label for="nbAnimNeed">Nombre d'animateurs requis :</label>
            <input class="form-control" id="nbAnimNeed" name="nbAnimNeed" rows="10" placeholder="Nombre d'animateurs">
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
                <label>Modérateur :</label>
                <select name="idAnimModo" id="idAnimModo">
                    <option value="" selected disabled hidden> Animateurs </option>
                    @foreach($users as $user)
                        <option value="{{ $user->id}}">{{ $user->firstname }} {{ $user->lastname }}</option>
                    @endforeach
                </select>
            </div>
        <br/>
        <button type="submit" class="btnDash btn-default">Créer l'évènement</button>
    </form>

  </div>
</div>
@stop