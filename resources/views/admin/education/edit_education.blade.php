@extends('layouts.admin')

@section('admin_content')

<div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Education
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="{{ url('all/education') }}"></i> Education</a></li>
        <li class="breadcrumb-item active">Edit Education</li>
      </ol>
    </section>

    <div class="modal-body">
			            <div class="box-body">
			              <form action="{{ route('update.education',$education->id) }}" method="post" >
			              	@csrf
			                <div class="form-group">
			                  <label>Vercity Name</label>
			                  <input type="text" class="form-control" value="{{ $education->name }}" name="name" placeholder="Enter Vercity Name">
			                </div>
			                <div class="form-group">
			                  <label>Degree</label>
			                  <input type="text" class="form-control" value="{{ $education->degree }}" name="degree" placeholder="Enter Degree Name">
			                </div>
                      <div class="form-group">
                        <label>Start Date</label>
                        <input type="date" class="form-control" value="{{ $education->start_date }}" name="start_date" placeholder="Enter Start Date">
                      </div>
                      <div class="form-group">
                        <label>End Date</label>
                        <input type="date" class="form-control" value="{{ $education->end_date }}" name="end_date" placeholder="Enter End Date">
                      </div>

                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary pull-right">Update</button>
                      </div>
			            </div>
            		  </div>
            		  </form>
            		</div>
            		<!-- /.modal-content -->
            	  </div>
            	  <!-- /.modal-dialog -->
</div>

@endsection