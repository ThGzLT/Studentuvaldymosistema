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
				<h3 class="panel-title">Add New course</h3>
			</div>
			<div class="panel-body">
				<form class="form-horizontal" action="{{ route('store_course') }}" method="POST">
					{{ csrf_field() }}
			  <fieldset>

			  	<div class="form-group">
			      <label for="coursename" class="col-md-2 control-label">First Name</label>

			      <div class="col-md-8">
			        <input type="text" class="form-control" name="firstname" placeholder="Course Name" required>
			      </div>
			    </div>

			    <div class="form-group">
			      <label for="courseid" class="col-md-2 control-label">Last Name</label>

			      <div class="col-md-8">
			        <input type="text" class="form-control" name="courseid" placeholder="Course ID" required>
			      </div>
			    </div>

			    {{-- <div class="form-group">
			      <label for="inputstudentenrolled" class="col-md-2 control-label">Student Enrolled</label>

			      <div class="col-md-8">
			        <input type="text" class="form-control" name="studentenrolled" id="inputstudentenrolled" placeholder="Student Enrolled" required>
			      </div>
			    </div> --}}

			    <div class="form-group">
			      <label for="roomnumber" class="col-md-2 control-label">Room Number</label>

			      <div class="col-md-8">
			        <input type="text" class="form-control" name="roomnumber" placeholder="Room Number" required>
			      </div>
			    </div>

			    <div class="form-group">
			      <div class="col-md-8 col-md-offset-2">
			        <button type="button" class="btn btn-default">Cancel</button>
			        <button type="submit" class="btn btn-primary">Submit</button>
			      </div>
			    </div>
			  </fieldset>
			</form>
		 </div>
		</div>
	</div>
@endsection
