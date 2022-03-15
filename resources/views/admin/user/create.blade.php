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
        <a class="btn btn-primary" href="{{ route('adminuser.index') }}">Page précédente</a>
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
            <label for="team">Equipe :</label>
            <input id="team" name="team" rows="10" placeholder="ex : Superhéros">
        </div>
        <br/>
        <button type="submit" class="btnDash btn-default">Créer l'animateur</button>
    </form>

  </div>
</div>
@stop