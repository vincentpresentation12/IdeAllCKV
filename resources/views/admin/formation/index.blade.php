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
        <h2>Les Formations</h2>
        <a class="btn btn-primary" href="{{ route('adminuser.index') }}">Page précédente</a>
    </div>
    <hr/>     
    
    <div class="searchsort">
        <input id="searchbox" onkeyup="search_anim()" type="text"
        name="search" placeholder="Rechercher..." class="search"> 
     
        <select name="" id="">
        <option value="">Tous</option>
            
        </select>
        

        <a href="{{ url('/adminformation/create') }}" class="btnDash btn-primary">Ajouter une formation</a>
      
    </div>
    <div class="dashContent">
        <div class="allCours">
        @foreach($formations as $formation)
        <div class="displayCours">
            <div class="moderateButtons">
                <a href="{{ url('/adminformation/' . $formation->id) }}" title="View formation"><i class="fa fa-eye" aria-hidden="true"></i></a> 
                <a href="{{ url('/adminformation/' . $formation->id . '/edit') }}" title="Edit formation"><i class="fa-solid fa-pen" aria-hidden="true"></i></a>
                <form method="POST" action="{{ url('/adminformation' . '/' . $formation->id) }}" accept-charset="UTF-8" style="display:inline">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="submit" title="Delete Student" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                </form>
            </div>
            <div class="titleCours">{{ $formation->title }}</div>
            <div class="subCours">{{ $formation->descrFormations }}</div>
            <div class="typeCours">{{ $formation->type }}</div>
            <div class="dateCours">date et heure</div>
            <div class="langCours">img langue</div>
        </div>
        @endforeach
        </div>    

                
    </div>
</div>
@endsection