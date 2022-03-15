@extends('layouts.app')

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
            <h2>Bienvenue <strong>{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</strong></h2>
            <span>Retrouvez tous les derniers événements de votre dashboard <strong>TheIdeAll</strong>.</span>
        </div>
        <hr/>
        <div class="dashContent">
            <div class="incomingEvents">
                <h3><a href="/adminevent">Les événements à venir</a></h3>
                <a href="{{ url('/adminevent/create') }}"  class="btnDash btnD btn-primary">Ajouter un événement<a>

                <div class="">
                </div>
            </div>
            <div class="newAnimator">
                <h3><a href="/adminuser">Nos animateurs</a></h3>
                <a href="{{ url('/adminuser/create') }}" class="btnDash btnD btn btn-primary">Ajouter un animateur</a>

                <div class="listAnimator">
                @foreach($users as $user)
                    <div class="anAnimator">
                        <div class="fullName">{{ $user->firstname }} {{ $user->lastname }}</div>
                        <div class="editsupp">
                            <a href="{{ url('/adminuser/edit') }}"><i class="fa-solid fa-pen"></i></a>
                            <form method="POST" action="{{ url('/admin' . '/' . $user->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <a title="Delete Animator" onclick="return confirm('Confirm delete?')"><i class="fa-solid fa-trash-can"></i></a></form>
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
                            <div class="active"></div>
                        </div>
                    </div>
                @endforeach
                </div><div class="spacer"></div>
                <a href="#" class="voirplus">Voir tous les animateurs</a>
            </div>

            <div class="nextFormations">
                <h3><a href="/adminformation">Les formations</a></h3>
                <a href="/adminformation/create" class="btnDash btn-primary">Ajouter une formation<a>
                    <br/>
                    <div>
                <!-- @foreach($formations as $formation)
                <div class="anAnimator">
                        <div class="fullName">{{ $formation->title }} {{ $formation->descrFormation }}</div>
                        <div class="animType">{{ $formation->type }} </div>
                @endforeach
                </div> -->
            </div>

        </div>
    </div>

@endsection
