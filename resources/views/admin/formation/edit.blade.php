@extends('admin.formation.layout')
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
        <h2>Éditer une formation</h2>
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

            <form action="{{ url('adminformation/'.$formations->id) }}" method="POST" class="forms">

                @csrf
                @method('PATCH')


                <div class="form-group">
                    <label>Titre:</label>
                    <input type="text" name="title" value="{{ $formations->title }}" class="form-control" placeholder="Title">
                </div>

                <div class="form-group">
                    <label>Description:</label>
                    <textarea class="form-control" name="descrFormations" placeholder="description">{{ $formations->descrFormations }}</textarea>
                </div>

                <div class="form-group">
                    <label for="startDate">Date de début :</label>
                    <input type="date" name="startDate" value="{{ $formations->startDate }}" id="startDate" rows="10" placeholder="startDate" >
                </div>
                <div class="form-group">
                    <label for="endDate">Date de fin :</label>
                    <input type="date" name="endDate" value="{{ $formations->endDate }}" id="endDate" rows="10" placeholder="endDate" >
                </div>

                <div class="form-group">
                <label>Type :</label>
                <select name="type" id="type">
                    <option value="" selected disabled hidden>{{  ucfirst($formations->type) }}</option>
                    <option value="physique" name="type">Physique</option>
                    <option value="virtuel" name="type">Virtuel</option>
                </select>
                </div>

                <div class="form-group">
                    <label>Langue :</label>
                    <select name="langue" id="langue">
                        <option value="" selected disabled hidden>{{  ucfirst($formations->langue) }}</option>
                        <option value="français">Français</option>
                        <option value="anglais">Anglais</option>
                        <option value="bilingue">Bilingue</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Activité :</label>
                    <input type="text" name="title" value="{{ $formations->idActivity }}" class="form-control" placeholder="Title">
                </div>

                <br/>
                <button type="submit" class="btnDash btn-success">Enregistrer les modifications</button>
            </form>
            <form method="POST" action="{{ url('/adminformation' . '/' . $formations->id) }}" accept-charset="UTF-8">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button type="submit" class="btnS btn-danger btn-sm" title="Delete Student" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
            </form>

        </div>

    </div>

@endsection