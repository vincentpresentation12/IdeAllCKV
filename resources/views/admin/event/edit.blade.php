@extends('admin.event.layout')
@section('content')
@extends('layouts.sidebaradm')

@section('sidebarleft')
<a href="/adminuser">Les animateurs</a>
<br/>
<a href="/adminformation">Les formations</a>
<br/>
<a href="/adminevent">Les événements</a>
@endsection
<div class="col2flex">
    <div class="entete">
        <h2>Éditer un événement</h2>
        <a class="btn btn-primary" href="javascript:window.history.go(-1);">Page précédente</a>
    </div>
    <hr/>

    <div class="dashContent">
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ url('adminevent/'.$events->id) }}" method="POST" class="forms">

            @csrf
            @method('PATCH')

            <div class="form-group">
                <label>Titre :</label>
                <input type="text" name="nameEvent" value="{{ $events->nameEvent }}" class="form-control" placeholder="Titre">
            </div>

            <div class="form-group">
                <label>Description :</label>
                <textarea class="form-control" name="descrEvent" placeholder="description...">{{ $events->descrEvent }}</textarea>
            </div>

            <div class="form-group">
                <label for="startDate">Date de début :</label>
                <input type="date" name="startDate" value="{{ $events->startDate }}" id="startDate" rows="10" placeholder="startDate" >
            </div>
            <div class="form-group">
                <label for="endDate">Date de fin :</label>
                <input type="date" name="endDate" value="{{ $events->endDate }}" id="endDate" rows="10" placeholder="endDate" >
            </div>
            <div class="form-group">
                <label>Entreprise :</label>
                <input type="text" name="companyName" value="{{ $events->companyName }}" class="form-control" placeholder="nom de l'entreprise">
            </div>

            <div class="form-group">
                <label>Nombre d'animateur requis :</label>
                <input type="text" name="nbAnimNeed" value="{{ $events->nbAnimNeed }}" class="form-control" placeholder="nombre d'animateur requis">
            </div>

            <div class="form-group">
                <label>État de la Session :</label>
                <select name="isOpen" id="isOpen">
                    @if($events->isOpen == 1)
                        <option value="" selected disabled hidden>Ouverte</option>
                    @else
                        <option value="" selected disabled hidden>Fermée</option>
                    @endif
                    <option value="0">Fermée</option>
                    <option value="1">Ouverte</option>
                </select>
            </div>

            <div class="form-group">
                <label>Type :</label>
                <select name="type" id="type">
                    <option value="" selected disabled hidden>{{ $events->type }}</option>
                    <option value="physique" name="type">Physique</option>
                    <option value="virtuel" name="type">Virtuel</option>
                </select>
            </div>

            <div class="form-group">
                <label>Langue :</label>
                <select name="langue" id="langue">
                    <option value="" selected disabled hidden>{{ $events->langue }}</option>
                    <option value="français">français</option>
                    <option value="anglais">anglais</option>
                    <option value="bilingue">bilingue</option>
                </select>
            </div>

            <div class="form-group">
                <label>Modérateur :</label>
                <select name="idAnimModo" id="idAnimModo">
                    @foreach($modos as $modo)
                        <option value="" selected disabled hidden>{{ $modo->firstname }} {{ $modo->lastname }}</option>
                    @endforeach

                    @foreach($users as $user)
                        @if($user->user_type == 'admin')
                        <option value="{{ $user->id}}">{{ $user->firstname }} {{ $user->lastname }}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Formations :</label>
                <select name="idFormation" id="idFormation">
                    @foreach($currentFormations as $currentFormation)
                        <option value="" selected disabled hidden>{{ $currentFormation->title }}</option>
                    @endforeach

                    @foreach($formations as $formation)
                        <option value="{{ $formation->id}}">{{ $formation->title }}</option>
                    @endforeach
                </select>
            </div>

            <br/>
            <button type="submit" class="btnDash btn-success">Enregister les modifications </button>

        </form>
        <form method="POST" action="{{ url('/adminevent' . '/' . $events->id) }}" accept-charset="UTF-8">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit" class="btnS btn-danger btn-sm" title="Delete Student" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
        </form>

    </div>

</div>

@endsection