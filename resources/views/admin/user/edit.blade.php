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
        <h2>Éditer un nouvel animateur</h2>
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

            <form action="{{ url('adminuser/'.$users->id) }}" method="POST" class="forms">

                @csrf

                @method('PATCH')

                <div class="form-group">
                    <label>Prénom :</label>
                    <input type="text" name="firstname" value="{{ $users->firstname }}" class="form-control" placeholder="ex: Jean">
                </div>

                <div class="form-group">
                    <label>Nom :</label>
                    <input class="form-control" name="lastname" placeholder="Body" value="{{ $users->lastname }}">
                </div>

                <div class="form-group">
                    <label>Équipe :</label>
                    <input type="text" name="team" value="{{ $users->team }}" class="form-control" placeholder="team">
                </div>

                <div class="form-group">
                    <label for="phone">Téléphone :</label>
                    <input type="text" name="phone" value="{{ $users->phone }}" placeholder="ex : 0123456789">
                </div>

                <div class="form-group">
                    <label for="isBilingual">Bilingue :</label>
                    <select name="isBilingual" id="isBilingual">
                        <option value="0" name="isBilingual">Non</option>
                        <option value="1" name="isBilingual">Oui</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="user_type">Droit :</label>
                    <select name="user_type" id="user_type">
                        <option value="" selected disabled hidden>{{ ucfirst($users->user_type) }}</option>
                        <option value="animateur">Animateur</option>
                        <option value="admin">Administrateur</option>
                        </select>
                </div>

                <div class="form-group">
                    <label for="type">Type :</label>
                    <select name="type" id="type">
                        <option value="" selected disabled hidden>{{ ucfirst($users->type) }}</option>
                        <option value="physique" name="type">Physique</option>
                        <option value="virtuel" name="type">Virtuel</option>
                        <option value="physique et virtuel" name="type">Virtuel & Physique</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="isActive">Actif :</label>
                    <select name="isActive" id="isActive">
                    @if($users->isActif == 1)
                        <option value="" selected disabled hidden>Actif</option>
                    @else
                        <option value="" selected disabled hidden>Inactif</option>
                    @endif
                        <option value="0" name="isActive">Non</option>
                        <option value="1" name="isActive">Oui</option>
                    </select>
                </div>
                <br/>

                <button type="submit" class="btnDash btn-success">Enregistrer les modifications</button>
            </form>


        <form method="POST" action="{{ url('/adminuser' . '/' . $users->id) }}" accept-charset="UTF-8">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        <button type="submit" class="btnS btn-danger" title="Delete Student" onclick="return confirm('Confirm delete')"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
        </form>

        </div>

    </div>

@endsection