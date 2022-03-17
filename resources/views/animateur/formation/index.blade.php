@extends('layouts.app')
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
        <h2>Les Formations</h2>
        <a class="btn btn-primary" href="javascript:window.history.go(-1);">Page précédente</a>
    </div>
    <hr/>
    <div class="dashContent">
        <div class="allCours">
        @foreach($formations as $formation)
        <div class="displayCours">
            <div class="moderateButtons">
                <a href="{{ url('/animateurformation/' . $formation->id) }}" title="View formation"><i class="fa fa-eye" aria-hidden="true"></i></a>
            </div>
            <div class="titleCours">{{ $formation->title }}</div>
            <div class="subCours">{{ $formation->descrFormations }}</div>
            <div class="typeCours">{{ $formation->type }}</div>
            <div class="dateCours">{{ date('j F Y',strtotime($formation->startDate)) }}</div>
            <div class="langCours">
                @if ($formation->langue == 'français')
                    <img src="/images/fr.png" class="langimg" alt="fr"/>
                @elseif ($formation->langue == 'anglais')                                    
                    <img src="images/en.png" class="langimg" alt="en"/>
                @else
                    <img src="/images/fr.png" class="langimg" alt="fr"/>
                    <img src="images/en.png" class="langimg" alt="en"/>
                @endif
            </div>

            <div class="inscrCours">
                <a href="#" class="subscribe">S'inscrire</a>
            </div>
        </div>
        @endforeach
        </div>


    </div>
</div>
@endsection