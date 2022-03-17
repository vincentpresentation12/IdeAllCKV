@extends('layouts.app')
@section('content')

@extends('layouts.sidebaranim')

@section('sidebarleft')
<a href="/animateurformation">Les formations</a>
<br/>
<a href="/animateurevent">Les évènements</a>
<br/>
<a href="/animateurshow">Mon profil</a>
@endsection
<div class="col2flex">
        <div class="entete">
        <h2>Voir une formation</h2>
        <a class="btn btn-primary" href=href="javascript:window.history.go(-1);">Page précédente</a>
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
            <div class="div-group"><strong>Langue :</strong> {{ ucfirst($formations->langue) }}</div>
            <div class="div-group"><strong>Activité :</strong> {{ $formations->idActivity }}</div>
        </div>
      </div>
</div>
@stop