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
        <h2>Modifier une formation</h2>
        <a class="btn btn-primary" href="{{ route('adminuser.index') }}">Page précédente</a>
    </div>
    <hr/>
    <h3 class="h3">{{ $formations->title }}</h3>
    <div class="dashContent">
        
        <div class="forms">
            <div class="div-group"><strong>Titre :</strong> {{ $formations->title }}</div>
            <div class="div-group"><strong>Description :</strong> {{ $formations->descrFormations }}</div>
            <div class="div-group"><strong>Type :</strong> Formation 
            @if ($formations->type == "virtuel")
            virtuelle
            @else
            {{ $formations->type }}
            @endif
        </div>
        </div>

        <form method="POST" action="{{ url('/adminformation' . '/' . $formations->id) }}" accept-charset="UTF-8">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit" class="btnS btn-danger btn-sm" title="Delete Student" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
        </form>
      </div>
</div>
@stop