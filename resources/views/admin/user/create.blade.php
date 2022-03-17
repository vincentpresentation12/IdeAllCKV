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
        <h2>Créer un nouvel animateur</h2>
        <a class="btn btn-primary" href="javascript:window.history.go(-1);">Page précédente</a>
    </div>
    <hr/>

        <div class="dashContent">
          <form action="{{ url('adminuser') }}" method="post" class="forms">
      @csrf
        <div class="form-group">
            <label for="firstname">Prénom :</label>
            <input type="text" id="firstname" placeholder="ex : Jean" name="firstname">
        </div>
        <div class="form-group">
            <label for="lastname">Nom :</label>
            <input type="text" id="lastname" placeholder="ex : Dupont" name="lastname">
        </div>
        <div class="form-group">
            <label for="txtAddress">Adresse email :</label>
            <input id="email" name="email" rows="10" placeholder="ex : jeandupont@mail.fr">
        </div>
        <div class="form-group">
            <label for="team">Équipe :</label>
            <input id="team" name="team" rows="10" placeholder="ex : Superhéros">
        </div>
        <div class="form-group">
            <label for="phone">Téléphone :</label>
            <input dtype="text" id="phone" placeholder="ex : 0123456789" name="phone">
        </div>
        <div class="form-group">
                <label for="isBilingual">Bilingue :</label>
                <select name="isBilingual" id="isBilingual">
                    <option value="0" name="isBilingual">Non</option>
                    <option value="1" name="isBilingual">Oui</option>
                </select>
        </div>
        <div class="form-group">
            <label for="user_type">Droit :</label>
                <select name="user_type" id="user_type">
                    <option value="animateur">Animateur</option>
                    <option value="admin">Administrateur</option>
                </select>
        </div>
        <div class="form-group">
            <label for="type">Type :</label>
                <select name="type" id="type">
                    <option value="" selected disabled hidden>Sélectionner un type </option>
                    <option value="physique" name="type">Physique</option>
                    <option value="virtuel" name="type">Virtuel</option>
                    <option value="physique et virtuel" name="type">Virtuel & Physique</option>
                </select>
        </div>

        <div class="form-group">
                <label for="isActive">Actif :</label>
                <select name="isActive" id="isActive">
                    <option value="1" name="isActive">Actif</option>
                    <option value="0" name="isActive">Inactif</option>
                </select>
        </div>
        <br/>
        <button type="submit" class="btnDash btn-default">Créer l'animateur</button>
    </form>

  </div>
</div>
@stop