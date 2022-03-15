@extends('admin.user.layout')
@extends('layouts.sidebaradm')
@section('content')
@section('sidebarleft')
<a href="/adminuser">Les animateurs</a>
<br/>
<a href="/adminformation">Les formations</a>
<br/>
<a href="/adminevent">Les évènements</a>
@endsection
<div class="col2flex">
    <div class="entete">
        <h2>Les animateurs</h2>
        <a class="btn btn-primary" href="/admin">Page précédente</a>
    </div>
    <hr/>
   
    <div class="searchsort">
        <input id="searchbox" onkeyup="search_anim()" type="text"
        name="search" placeholder="Rechercher..." class="search"> 
     
        <select name="" id="">
        <option value="">Tous</option>
            
        </select>
        

        <a href="{{ url('/adminuser/create') }}" class="btnDash btn-primary">Ajouter un animateur</a>
      
    </div>
            
    <div class="dashContent">

        <div class="allAnim">
        @foreach($users as $user)
            <div class="displayAnim">
                <div class="nameTeamLang">
                    <span class="name">{{ $user->firstname }} {{ $user->lastname }}</span>
                    <span class="team">{{ $user->team }}</span><br/>
                    <span class="lang">
                        @if ( $user->isBilingual == 0 )
                        <img src="images/fr.png" class="langimg" alt="fr"/>
                        @else
                        <img src="images/fr.png" class="langimg" alt="fr"/>
                        <img src="images/en.png" class="langimg" alt="en"/>
                        @endif
                    </span>
                </div>

                <div class="typeA">
                    <span class="type">{{ $user->type }}</span>
                </div>

                <div class="animActive">
                    <div class="isActive">
                        @if ($user->isActif == 0)
                        <div class="inactive">Inactif</div>
                        @else 
                        <div class="active">Actif</div>
                        @endif
                            
                    </div>
                </div>

                <div class="animModerate">
                    <a href="{{ url('/adminuser/' . $user->id) }}" title="View user"><i class="fa fa-eye" aria-hidden="true"></i></a> 
                    <a href="{{ url('/adminuser/' . $user->id . '/edit') }}" title="Edit user"><i class="fa-solid fa-pen"></i></a>
                    <form method="POST" action="{{ url('/adminuser' . '/' . $user->id) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" title="Delete Student" onclick="return confirm('Confirm delete')"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
                
    </div>
</div>
<script src="js/script.js"></script>
@endsection