@extends('layouts.app')

@section('content')
@extends('layouts.sidebar')

@section('sidebarleft')
<a href="/adminuser">Les animateurs</a>
<br/>
<a href="/adminformation">Les formations</a>
<br/>
<a href="/adminevent">Les événements</a>
@endsection
    <div class="col2flex">
        <div class="entete">
            <h2>Bienvenue <strong>{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</strong></h2>
            <span>Retrouvez tous les derniers événements de votre dashboard <strong>TheIdeAll</strong>.</span>
        </div>
        <hr/>
        <div class="dashContent">
            <div class="incomingEvents">
                <h3>Les événements à venir</h3>
                <a href="{{ url('/adminevent/create') }}"  class="btnDash btnD btn-primary">Ajouter un événement</a>
                <div class="listEvent">
                    @foreach($events as $event)
                    <div class="anEvent">
                        <div class="title">
                            <span><a href="{{ url('/adminevent/' . $event->id) }}">{{ $event->nameEvent }}</a></span>
                            <div class="type">{{ $event->type }}</div>
                        </div>
                        <div class="informations">
                            <div class="compagny">{{ $event->companyName }}</div>
                                @if($event->isOpen == 0)
                                    <div class="opensession">Session Fermée</div>
                                @else
                                    <div class="opensession">Session Ouverte</div>
                                @endif
                            <div class="moderate">
                             <a href="{{ url('/adminevent/' . $event->id . '/edit') }}"><i class="fa-solid fa-pen"></i></a>
                                <form method="POST" action="{{ url('/admin' . '/' . $event->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button title="Delete Event" onclick="return confirm('Confirm delete?')"><i class="fa-solid fa-trash-can"></i></button></form>
                            </div>
                        </div>
                        <hr/>
                    </div>
                    @endforeach
                </div>
                <div class="spacer"></div>
                <a href="/adminevent" class="voirplus">Voir tous les événements</a>
            </div>
            <div class="newAnimator">
                <h3>Nos animateurs</h3>
                <a href="{{ url('/adminuser/create') }}" class="btnDash btnD btn btn-primary">Ajouter un animateur</a>

                <div class="listAnimator">
                @foreach($users as $user)
                    <div class="anAnimator">
                        <div class="fullName"><a href="{{ url('/adminuser/' . $user->id) }}">{{ $user->firstname }} {{ $user->lastname }}</a></div>
                        <div class="editsupp">
                            <a href="{{ url('/adminuser/' . $user->id . '/edit') }}"><i class="fa-solid fa-pen"></i></a>
                            <form method="POST" action="{{ url('/admin' . '/' . $user->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button title="Delete Animator" onclick="return confirm('Confirm delete?')"><i class="fa-solid fa-trash-can"></i></button></form>
                        </div>
                        <div class="animType">{{ $user->type }} </div>
                        <div class="isBilingual">
                            @if ( $user->isBilingual == 0 )
                            <img src="/images/fr.png" class="langimg" alt="fr"/>
                            @else
                            <img src="/images/fr.png" class="langimg" alt="fr"/>
                            <img src="images/en.png" class="langimg" alt="en"/>
                            @endif
                        </div>
                        <div class="isActive">
                            <div class="actif"></div>
                        </div>
                    </div>
                @endforeach
                </div>
                <div class="spacer"></div>
                <a href="/adminuser" class="voirplus">Voir tous les animateurs</a>
            </div>

            <div class="nextFormations">
                <span>
                    <h3>Les formations</h3>
                    <a href="/adminformation/create" class="btnDash btnD btn-primary">Ajouter une formation</a>
                </span>

                <div class="listFormation">
                @foreach($formations as $formation)
                    <div class="aFormat">
                        <div class="titleFormation"><a href="{{ url('/adminformation/' . $formation->id) }}">{{ $formation->title }} {{ $formation->descrFormation }}</a></div>
                        <div class="linkedto">Reliée à <em>Nom de l'animation</em></div>
                        <div class="typeFormation">{{ $formation->type }} </div>
                        <div class="dateAndModerate">
                            <div class="eventdate">{{ date('j F Y',strtotime($event->startDate)) }}</div>
                            <div class="moderatef">
                                <a href="{{ url('/adminformation/' . $formation->id . '/edit') }}"><i class="fa-solid fa-pen"></i></a>
                                <form method="POST" action="{{ url('/admin' . '/' . $formation->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button title="Delete Animator" onclick="return confirm('Confirm delete?')"><i class="fa-solid fa-trash-can"></i></button></form>
                            </div>
                        </div>

                        <hr/>

                    </div>
                @endforeach
                </div>
                <a href="/adminformation" class="voirplus">Voir toutes les formations</a>
            </div>

        </div>
    </div>

@endsection
