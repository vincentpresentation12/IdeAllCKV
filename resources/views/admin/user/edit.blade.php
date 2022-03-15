@extends('admin.user.layout')



@section('content')


    <div class="row justify-content-center">

        <div class="col-lg-8 margin-tb">

            <div class="row">

                <div class="col-md-12">

                    <div class="text-start mt-5">

                        <h2>Edit Post</h2>

                    </div>

                </div>

            </div>

            <div class="col-md-12 text-end mt-4">

                <a class="btn btn-primary" href="{{ route('adminuser.index') }}">< Back</a>

            </div>

        </div>

    </div>



    <div class="row justify-content-center">

        <div class="col-lg-8 margin-tb">

            @if ($errors->any())

                <div class="alert alert-danger">

                    <strong>Whoops!</strong> There were some problems with your input.<br><br>

                    <ul>

                        @foreach ($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            @endif



            <form action="{{ url('adminuser/'.$users->id) }}" method="POST">

                @csrf

                @method('PATCH')



                 <div class="row">


                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <div class="form-group">

                            <strong>Title:</strong>

                            <input type="text" name="firstname" value="{{ $users->firstname }}" class="form-control" placeholder="Title">

                        </div>

                    </div>


                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <br>

                        <div class="form-group">

                            <strong>Body:</strong>

                            <textarea class="form-control" style="height:150px" name="lastname" placeholder="Body">{{ $users->lastname }}</textarea>

                        </div>

                    </div>


                    <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-4">

                        <button type="submit" class="btn btn-success">Submit</button>

                    </div>

                </div>



            </form>
            <form method="POST" action="{{ url('/adminuser' . '/' . $users->id) }}" accept-charset="UTF-8" style="display:inline">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
    </form>

        </div>

    </div>

@endsection