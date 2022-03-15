@extends('admin.formation.layout')
@section('content')
<div class="card">
  <div class="card-header">Fomration Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">title : {{ $formations->title }}</h5>
        <p class="card-text">description : {{ $formations->descrFormations }}</p>
        <p class="card-text">type : {{ $formations->type }}</p>
  </div>
    </hr>
    <form method="POST" action="{{ url('/adminformation' . '/' . $formations->id) }}" accept-charset="UTF-8" style="display:inline">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
    </form>

  </div>
</div>