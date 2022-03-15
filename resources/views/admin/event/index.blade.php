@extends('admin.event.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Laravel 9 Crud</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/adminevents/create') }}" class="btn btn-success btn-sm" title="Add New Event">
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
                                        <th>startDate</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($events as $event)
                                    <tr>
                                        <td>{{ $event->id }}</td>
                                        <td>{{ $event->nameEvent }}</td>
                                        <td>{{ $event->descrEvent }}</td>
                                        <td>{{ $event->startDate }}</td>
                                        <td>
                                            <a href="{{ url('/adminevents/' . $event->id) }}" title="View Event"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/adminevent/' . $event->id . '/edit') }}" title="Edit Event"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/adminevent' . '/' . $event->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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