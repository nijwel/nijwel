@extends('layouts.admin')

@section('admin_content')

<div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Recommends
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="{{ url('all/recommend') }}"></i> Recommend</a></li>
        <li class="breadcrumb-item active">Edit Recommend</li>
      </ol>
    </section>

    <div class="modal-body">
			            <div class="box-body">
			              <form action="{{ route('update.recommend',$recommend->id) }}" method="post" >
			              	@csrf
			                <!-- text input -->
			                <div class="form-group">
			                  <label>Name</label>
			                  <input type="text" class="form-control" value="{{ $recommend->name }}"  name="name" placeholder="Enter Recommended Name">
			                </div>
			                <div class="form-group">
			                  <label>Designation</label>
			                  <input type="text" class="form-control"  name="designation" placeholder="Enter Category Name" value="{{ $recommend->designation }}">
			                </div>
			                <div class="form-group">
			                  <label>Details</label>
			                  <textarea class="textarea" name="details" placeholder="Place some text here"
                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"> {{ $recommend->details }}
                                    
                        	</textarea>
			                </div>
			            </div>
            		  </div>
            		  <div class="modal-footer">
            			<button type="submit" class="btn btn-primary float-right">Submit</button>
            		  </div>
            		  </form>
            		</div>
            		<!-- /.modal-content -->
            	  </div>
            	  <!-- /.modal-dialog -->
</div>

@endsection