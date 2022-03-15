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
        <h2>Les Évènements</h2>
        <a class="btn btn-primary" href="{{ route('adminuser.index') }}">Page précédente</a>
    </div>
    <hr/> 

    <div class="searchsort">
        <input id="searchbox" onkeyup="search_anim()" type="text"
        name="search" placeholder="Rechercher..." class="search"> 
     
        <select name="" id="">
        <option value="">Tous</option>
            
        </select>
        

        <a href="{{ url('/adminformation/create') }}" class="btnDash btn-primary">Ajouter une formation</a>
        <br/>
        <span class="none">Événements passés</span>
        <span class="none">Événements en cours</span>
        <span class="active">Événements à venir</span>
        <hr/>
      
    </div>

    <div class="dashContent">



        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Listes des évènements</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/adminevent/create') }}" class="btn btn-success btn-sm" title="Add New Event">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>nameEvent</th>
                                        <th>descrEvent</th>
                                        <th>date de début</th>
                                        <th>Entreprise</th>
                                        <th>type</th>
                                        <th>Nombre d'animateur requis</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($events as $event)
                                    <tr>
                                        <td>{{ $event->id }}</td>
                                        <td>{{ $event->nameEvent }}</td>
                                        <td>{{ $event->descrEvent }}</td>
                                        <td>{{ $event->startDate}}</td>
                                        <td>{{ $event->companyName}}</td>
                                        <td>{{ $event->type }}</td>
                                        <td>{{ $event->nbAnimNeed}}</td>
                                        <td>
                                            <a href="{{ url('/adminevent/' . $event->id) }}" title="View Event"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/adminevent/' . $event->id . '/edit') }}" title="Edit Event"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/adminevent' . '/' . $event->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection