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
        <h2>Afficher un utilisateur</h2>
        <a class="btn btn-primary" href="javascript:window.history.go(-1);">Page précédente</a>
    </div>
    <hr/>
    <h3 class="h3">{{ $users->firstname }} {{ $users->lastname }}</h3>
    <div class="dashContent">
        <div class="forms">
            <div class="div-group"><strong>Prénom :</strong> {{ $users->firstname }}</div>
            <div class="div-group"><strong>Nom :</strong> {{ $users->lastname }}</div>
            <div class="div-group"><strong>Adresse email :</strong> {{ $users->email }}</div>
            <div class="div-group"><strong>Équipe :</strong>
            @if($users->team == '')
                Aucune pour le moment
            @else
                {{ $users->team }}
            @endif
            </div>
            <div class="div-group"><strong>Téléphone :</strong> {{ $users->phone }}</div>
            <div class="div-group"><strong>Bilingue :</strong>
            @if($users->isBilingual == 0)
                Non
            @else
                Oui
            @endif
            </div>
            <div class="div-group"><strong>Droit :</strong> {{ ucfirst($users->user_type) }}</div>
            <div class="div-group"><strong>Type :</strong> Animateur {{ $users->type }}</div>
            <div class="div-group"><strong>Statut :</strong>
            @if($users->isActive == 0)
                Inactif
            @else
                Actif
            @endif
            </div>
        </div>
            <div class="moderateview">
                <a href="{{ url('/adminuser/' . $users->id . '/edit') }}" title="Edit user"><i class="fa-solid fa-pen"></i></a>
                <form method="POST" action="{{ url('/adminuser' . '/' . $users->id) }}" accept-charset="UTF-8" >
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="submit" class="btnS btn-danger btn-sm" title="Delete Student" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                </form>
            </div>
        </div>

  </div>
  @stop
