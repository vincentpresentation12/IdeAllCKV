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
        <h2>Les Évènements</h2>
        <a class="btn btn-primary" href="javascript:window.history.go(-1);">Page précédente</a>
    </div>
    <hr/>
    <div class="searchsort">
        <div class="notes">
            <span class="none">Événements passés</span>
            <span class="none">Événements en cours</span>
            <span class="active">Événements à venir</span>
        </div>
        <hr/>

    </div>

    <div class="dashContent">

        <div class="allEvents">
        @foreach($events as $event)
        <div class="displayEvents">
            <div class="moderateButtons">
                <a href="{{ url('/animateurevent/' . $event->id) }}" title="View Event"><i class="fa fa-eye" aria-hidden="true"></i> </a>
            </div>
            <div class="nameEvents">{{ $event->nameEvent }}</div>
            <div class="descEvents">{{ $event->descrEvent }}</div>
            <div class="compEvents">{{ $event->companyName}}</div>
            <div class="typeEvents">{{ $event->type }}</div>
            <div class="timelangEvts">
                <div class="time" translate="yes">{{ date('j F Y',strtotime($event->startDate)) }}</div>
                <div class="lang">
                @if ( $event->langue == "français" )
                            <img src="/images/fr.png" class="langimg" alt="fr"/>
                @elseif ($event->langue == "anglais")
                            <img src="images/en.png" class="langimg" alt="en"/>
                @else
                            <img src="/images/fr.png" class="langimg" alt="fr"/>
                            <img src="images/en.png" class="langimg" alt="en"/>
                @endif
                </div></div>
            <div class="needsubEvts">
                <span><i class="fa-solid fa-user-group" title="Animateurs requis"></i> {{ $event->nbAnimNeed}}  </span>
                <span><i class="fa-solid fa-user-check" title="Animateurs inscrits"></i> {{ $event->nbAnimSub}} </span>
                <span><i class="fa-solid fa-people-group" title="Participants"></i> {{$event->nbParticipant}}</span>
            </div>
            <div class="inscriptionSession">
                @if($event->isOpen == 0)
                <a class="notSub">S'inscrire</a>
                <span>Session fermée</span>
                @else
                <span><a href="#" class="sub">Inscrit</a>
                <a href="#" class="unsub">Se désinscrire</a></span>
                <span>Session ouverte 
                    <a href="#" class="joinsession">Rejoindre</a>
                </span>
                @endif
            </div>

        </div>
        @endforeach
        </div>

    </div>
</div>

@endsection