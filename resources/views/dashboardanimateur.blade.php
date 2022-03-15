@extends('layouts.app')

@section('content')

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div><h1>Bienvenue {{ Auth::user()->firstname }} {{ Auth::user()->lastname}}</h1></div>
                <a href="/adminuser">liste animateur</a>
                <a href="/adminformation">liste des formations</a>
@endsection