@extends('layouts.admin')

@section('admin_content')

<div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Experience
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="{{ url('all/experience') }}"></i> Experience</a></li>
        <li class="breadcrumb-item active">Edit Experience</li>
      </ol>
    </section>

    <div class="modal-body">
			            <div class="box-body">
			              <form action="{{ route('update.experience',$experience->id) }}" method="post" >
			              	@csrf
			                <!-- text input -->
			                <div class="form-group">
			                  <label>Company Name</label>
			                  <input type="text" class="form-control" value="{{ $experience->company_name }}"  name="company_name" placeholder="Enter Company Name">
			                </div>
			                <div class="form-group">
			                  <label>Company Address</label>
			                  <input type="text" class="form-control"  name="company_ads" placeholder="Enter Category Name" value="{{ $experience->company_ads }}">
			                </div>
			                <div class="form-group">
			                  <label>Designation</label>
			                  <input type="text" class="form-control"  name="designation" placeholder="Enter Category Name" value="{{ $experience->designation }}">
			                </div>
			                <div class="form-group">
			                  <label>Start Date</label>
			                  <input type="date" class="form-control" required="" name="start_date" placeholder="Enter Category Name" value="{{ $experience->start_date }}">
			                </div>
			                <div class="form-group">
			                  <label>End Date</label>
			                  <input type="end" class="form-control" value="{{ $experience->end_date }}" name="end_date" placeholder="Enter Category Name">
			                </div>
			                <div class="form-group">
			                  <label>Details</label>
			                  <textarea class="textarea" name="details" placeholder="Place some text here"
                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"> {{ $experience->details }}
                                    
                        	</textarea>
			                </div>
			            </div>
            		  </div>
            		  <div class="modal-footer">
            			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            			<button type="submit" class="btn btn-primary float-right">Submit</button>
            		  </div>
            		  </form>
            		</div>
            		<!-- /.modal-content -->
            	  </div>
            	  <!-- /.modal-dialog -->
</div>

@endsection