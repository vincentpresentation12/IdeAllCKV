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
        <a class="btn btn-primary" href="{{ route('adminuser.index') }}">Page précédente</a>
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