@extends('admin.user.layout')
@section('content')
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">firstname : {{ $users->firstname }}</h5>
        <p class="card-text">lastname : {{ $users->lastname }}</p>
        <p class="card-text">email : {{ $users->email }}</p>
  </div>
    </hr>
    <form method="POST" action="{{ url('/adminuser' . '/' . $user->id) }}" accept-charset="UTF-8" style="display:inline">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
    </form>

  </div>
</div>