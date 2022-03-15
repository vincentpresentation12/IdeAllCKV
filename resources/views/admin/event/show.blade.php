@extends('admin.event.layout')
@section('content')
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Titre : {{ $events->nameEvent }}</h5>
        <p class="card-text">description : {{ $events->descrEvent }}</p>
        <p class="card-text">date de début : {{ $events->startDate }}</p>
        <p class="card-text">date de fin : {{ $events->endDate }}</p>
        <p class="card-text">Entreprise : {{ $events->companyName }}</p>
  </div>
    </hr>
    <form method="POST" action="{{ url('/adminevents' . '/' . $events->id) }}" accept-charset="UTF-8" style="display:inline">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        <button type="submit" class="btn btn-danger btn-sm" title="Delete Event" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
    </form>

  </div>
</div>