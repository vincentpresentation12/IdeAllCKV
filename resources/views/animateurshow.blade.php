@extends('admin.user.layout')
@section('content')
@extends('layouts.sidebaranim')

@section('sidebarleft')
<a href="/animateurformation">Les formations</a>
<br/>
<a href="/animateurevent">Les évènements</a>
<br/>
<a href="/animateurshow">Mon profil</a>
@endsection
<div class="col2flex">
    <div class="entete">
        <h2>Afficher un utilisateur</h2>
        <a class="btn btn-primary" href="javascript:window.history.go(-1);">Page précédente</a>
    </div>
    <hr/>
    <div class="dashContent">
        <div class="forms">
            <div class="div-group"><strong>Prénom :</strong> {{  Auth::user()->firstname }}</div>
            <div class="div-group"><strong>Nom :</strong> {{ Auth::user()->lastname }}</div>
            <div class="div-group"><strong>Adresse email :</strong> {{ Auth::user()->email }}</div>
            <div class="div-group"><strong>Équipe :</strong>
            @if(Auth::user()->team == '')
                Aucune pour le moment
            @else
                {{ Auth::user()->team }}
            @endif
            </div>
            <div class="div-group"><strong>Téléphone :</strong> {{ Auth::user()->phone }}</div>
            <div class="div-group"><strong>Bilingue :</strong>
            @if(Auth::user()->isBilingual == 0)
                Non
            @else
                Oui
            @endif
            </div>

            <div class="div-group"><strong>Type :</strong> Animateur {{ Auth::user()->type }}</div>
            <div class="div-group"><strong>Statut :</strong>
            @if(Auth::user()->isActive == 0)
                Inactif
            @else
                Actif
            @endif
        
            </div>
        </div>

        <div class="moderateview"></div>

    </div>

</div>
@stop
