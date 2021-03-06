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
        <h2>Les Évènements</h2>
        <a class="btn btn-primary" href="javascript:window.history.go(-1);">Page précédente</a>
    </div>
    <hr/>

    <div class="searchsort">
        <input id="searchbox" onkeyup="search_anim()" type="text"
        name="search" placeholder="Rechercher..." class="search">

        <select name="" id="">
        <option value="">Tous</option>

        </select>


        <a href="{{ url('/adminevent/create') }}" class="btnDash btn-primary">Ajouter un évènement</a>
        <br/>
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
                <a href="{{ url('/adminevent/' . $event->id) }}" title="View Event"><i class="fa fa-eye" aria-hidden="true"></i> </a>
                <a href="{{ url('/adminevent/' . $event->id . '/edit') }}" title="Edit Event"><i class="fa-solid fa-pen" aria-hidden="true"></i></a>

                <form method="POST" action="{{ url('/adminevent' . '/' . $event->id) }}" accept-charset="UTF-8" style="display:inline">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                </form>
            </div>
            <div class="nameEvents">{{ $event->nameEvent }}</div>
            <div class="descEvents">{{ $event->descrEvent }}</div>
            <div class="typeEvents">{{ $event->type }}</div>
            <div class="compEvents">{{ $event->companyName}}</div>
            <div class="dateEvents" translate="yes">{{ date('j F Y',strtotime($event->startDate)) }}</div>
            <div class="timelangEvts">
                <div class="time">durée</div>
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
            <div class="needsubEvts">Requis : {{ $event->nbAnimNeed}}</div>
        </div>
        @endforeach
        </div>

    </div>
</div>

@endsection