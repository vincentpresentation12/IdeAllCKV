@extends('admin.event.layout')
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
        <h2>Éditer un évènement</h2>
        <a class="btn btn-primary" href="{{ route('adminevent.index') }}">Page précédente</a>
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
                <label>Entreprise :</label>
                <input type="text" name="companyName" value="{{ $events->companyName }}" class="form-control" placeholder="nom de l'entreprise">
            </div>
              
            <div class="form-group">
                <label>type :</label>
                <input type="text" name="type" value="{{ $events->type }}" class="form-control" placeholder="virtuel ; physique">
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