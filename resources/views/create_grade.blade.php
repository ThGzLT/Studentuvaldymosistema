@extends('layouts.app')
@extends('navbar')
@extends('sidenavbar')
@section('content')

    <div class="container">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-dismissible alert-danger">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Oh snap!</strong>{{ $error }}
                </div>
            @endforeach
        @endif

       <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Add New grade</h3>
            </div>
            <div class="panel-body">

                {!! Form::open(['url' => 'create_grade'], ['action' => 'store_grade']) !!}
                {{ csrf_field() }}
                <div class="form-group">
                    {{Form::label('grade', 'grade')}}
                    {{Form::selectRange('grade', 0, 10)}}
                    <div class="form-group">
                        <p>Studentas:</p>
                        <select name="student_id">
                            <option></option>
                            @foreach($students as $student)
                                <option value="{{$student->id}}">{{$student->first_name}} {{$student->last_name}}</option>
                            @endforeach
                        </select>
                    </div>


                    {{ Form::select('lecture_id', \App\Lecture::all()->pluck('name', 'id')->toArray(),
                                         null)}}
                    {{Form::submit('submit', ['class' => 'btn btn-primary'])}}
                    {!! Form::close() !!}



                </div>


            </div>
        </div>
    </div>
@endsection


<!--   <form class="form-horizontal" action="  route('store_grade') " method="POST">
                     csrf_field()
                    <fieldset>

                        <div class="form-group">
                            <label for="student_id" class="col-md-2 control-label">student_id</label>

                            <div class="col-md-8">
                                <input type="text" class="form-control" name="student_id" placeholder="student_id" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lecture_id" class="col-md-2 control-label">lecture_id</label>
                            <label for="lecture_id" class="col-md-2 control-label">lecture_id</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="lecture_id" placeholder="lecture_id" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="grade" class="col-md-2 control-label">Grade</label>

                            <div class="col-md-8">
                                <input type="text" class="form-control" name="grade" placeholder="grade" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                                <button type="button" class="btn btn-default">Cancel</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>   -->