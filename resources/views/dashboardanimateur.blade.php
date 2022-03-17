@extends('layouts.app')
@section('content')

@extends('layouts.sidebar')

@section('sidebarleft')
<a href="/animateurformation">Les formations</a>
<br/>
<a href="/animateurevent">Les évènements</a>
<br/>
<a href="/animateurshow">Mon profil</a>
@endsection
<div class="col2flex">
        <div class="entete">
            <h2>Bienvenue <strong>{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</strong> !</h2>
            <span>Retrouvez toutes les dernières informations.</span>
        </div>
        <hr/>

        <div class="dashContent">

            <div class="formAnim">
                <h3>Les prochaines formations</h3>

                <div class="oneform">
                    @foreach($formations as $formation)
                    <div class="content">
                        <div class="full">
                            <div class="title"><a href="{{ url('/animateurformation/' . $formation->id) }}">{{ $formation->title }}</a></div>
                            <div class="relatedtolang">
                                <span class="event">ÉVÉNEMENT : nom de l'événement relié </span>

                                <span class="lang">
                                    @if ($formation->langue == 'français')
                                    <img src="/images/fr.png" class="langimg" alt="fr"/>
                                    @elseif ($formation->langue == 'anglais')                                    
                                    <img src="images/en.png" class="langimg" alt="en"/>
                                    @else
                                    <img src="/images/fr.png" class="langimg" alt="fr"/>
                                    <img src="images/en.png" class="langimg" alt="en"/>
                                    @endif
                                </span> 
                            </div>
                            <div class="dateto">{{ date('j F Y',strtotime($formation->startDate)) }}</div>
                        </div>
                        <div class="buttons">
                            <a href="">S'inscrire</a>
                            <a href="{{ url('/animateurformation/' . $formation->id) }}">Voir la formation</a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="spacer"></div>
                <a href="/animateurformation" class="voirplus">Voir toutes les formations</a>
            </div>

            <div class="eventAnim">
                <h3>Les événements à venir</h3>
                <div class="oneevent">
                    @foreach($events as $event)
                    <div class="full">
                        <div class="title"><a href="{{ url('/animateurevent/' . $event->id) }}">{{$event->nameEvent}}</a></div>
                        <div class="desc">{{$event->descr}}</div>
                        <div class="type">{{$event->type}}</div>
                        <div class="timelang">
                            <span class="time">{{ date('j F Y',strtotime($event->startDate)) }}</span>
                            <span class="lang">
                                @if ($event->langue == 'français')
                                    <img src="/images/fr.png" class="langimg" alt="fr"/>
                                @elseif ($event->langue == 'anglais')                                    
                                    <img src="images/en.png" class="langimg" alt="en"/>
                                @else
                                    <img src="/images/fr.png" class="langimg" alt="fr"/>
                                    <img src="images/en.png" class="langimg" alt="en"/>
                                @endif
                            </span>
                        </div>
                    </div>
                    <div class="buttons">
                        <a href="" class="inscription">S'inscrire</a>
                        <a href="" class="join">Rejoindre la session</a>
                    </div>
                    <hr/>
                    @endforeach
                </div>
                <div class="spacer"></div>
                <a href="/animateurevent" class="voirplus">Voir tous les événements</a>
            </div>
        </div>
</div>
                
@endsection