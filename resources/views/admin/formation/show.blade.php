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
        <h2>Afficher une formation</h2>
        <a class="btn btn-primary" href="javascript:window.history.go(-1);">Page précédente</a>
    </div>
    <hr/>
    <h3 class="h3">{{ $formations->title }}</h3>
    <div class="dashContent">

        <div class="forms">
            <div class="div-group"><strong>Titre :</strong> {{ $formations->title }}</div>
            <div class="div-group"><strong>Description :</strong> {{ $formations->descrFormations }}</div>
            <div class="div-group"><strong>Date de début :</strong> {{ date('j F Y',strtotime($formations->startDate)) }}</div>
            <div class="div-group"><strong>Date de fin :</strong> {{ date('j F Y',strtotime($formations->endDate)) }}</div>
            <div class="div-group"><strong>Type :</strong> Formation
            @if ($formations->type == "virtuel")
                virtuelle
            @else
                {{ $formations->type }}
            @endif
            </div>
            <div class="div-group"><strong>Langue :</strong> {{  ucfirst($formations->langue) }}</div>
            <div class="div-group"><strong>Activité reliée :</strong>
            @foreach($activities as $activity)
                 {{ $activity->nameActivity }}
            @endforeach  
            </div>
        </div>
        <div class="moderateview">
            <a href="{{ url('/adminformation/' . $formations->id . '/edit') }}" title="Edit formation"><i class="fa-solid fa-pen"></i></a>
            <form method="POST" action="{{ url('/adminformation' . '/' . $formations->id) }}" accept-charset="UTF-8" style="display: inline-block">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="submit" class="btnS btn-danger btn-sm" title="Delete Formation" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
            </form>
        </div>
    </div>

</div>
@stop