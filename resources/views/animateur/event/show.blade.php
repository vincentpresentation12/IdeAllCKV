@extends('admin.user.layout')
@extends('layouts.sidebaranim')
@section('content')


@section('sidebarleft')
<a href="/animateurformation">Les formations</a>
<br/>
<a href="/animateurevent">Les évènements</a>
<br/>
<a href="/animateurshow">Mon profil</a>
@endsection
<div class="col2flex">
  <div class="entete">
    <h2>Afficher un évènement</h2>
    <a class="btn btn-primary" href="javascript:window.history.go(-1);">Page précédente</a>
  </div>
    <hr/>
    <h3 class="h3">{{ $events->nameEvent }}</h3>
  <div class="dashContent">
    <div class="forms">
        <div class="div-group"><strong>Titre :</strong> {{ $events->nameEvent }}</div>
        <div class="div-group"><strong>Description :</strong> {{ $events->descrEvent }}</div>
        <div class="div-group"><strong>Date de début :</strong> {{ $events->startDate }}</div>
        <div class="div-group"><strong>Date de fin :</strong> {{ $events->endDate }}</div>
        <div class="div-group"><strong>Nom de l'Entreprise :</strong> {{ $events->companyName }}</div>
        <div class="div-group"><strong>Nombre d'animateurs requis :</strong> {{ $events->nbAnimNeed }}</div>
        <div class="div-group"><strong>Nombre d'animateurs inscrits :</strong> {{ $events->nbAnimSub }}</div>
        <div class="div-group"><strong>État de la session :</strong>
        @if($events->isOpen == 0)
          Fermée
        @else
          Ouverte
        @endif
        </div>
        <div class="div-group"><strong>Type :</strong> Évènement {{ $events->type }}</div>
        <div class="div-group"><strong>Langue :</strong> {{ $events->langue }}</div>
        @foreach($modos as $modo)
        <div class="div-group"><strong>Modérateur :</strong> {{ $modo->firstname }} {{ $modo->lastname }}</div>
        @endforeach
    </div>
    <div class="moderateview">
      <a href="{{ url('/adminevent/' . $events->id . '/edit') }}" title="Edit event"><i class="fa-solid fa-pen"></i></a>
      <form method="POST" action="{{ url('/adminevent' . '/' . $events->id) }}" accept-charset="UTF-8">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit" class="btnS btn-danger btn-sm" title="Delete Event" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
        </form>
    </div>

  </div>
</div>
@stop