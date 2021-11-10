@extends('layouts.admin')

@section('admin_content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Experience Tables
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Experience</li>
      </ol>
    </section>
      <br>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="box">
            <div class="box-header">
              <button type="button" class="btn btn-success pull-right " data-toggle="modal" data-target="#exp">
                Add Experience
              </button>
              </h6>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
				  <div class="table-responsive">
				  <table id="example" class="table table-bordered table-hover display nowrap margin-top-10">
					<thead>
						<tr>
							<th>Company Name</th>
      				<th>Company Address</th>
      				<th>Designation</th>
      				<th>Start Date</th>
      				<th>End Date</th>
      				<th>Details</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($experience as $row)
					  <tr>
					    <td>{{ $row->company_name }}</td>
					    <td>{{ $row->company_ads }}</td>
					    <td>{{ $row->designation }}</td>
					    <td>{{ $row->start_date }}</td>
					    <td>{{ $row->end_date }}</td>
					    <td>{!! Str::limit($row->details, 50) !!}</td>
					    <td>
				    	  <a class="btn btn-sm btn-success" href="{{ route('edit.experience',$row->id) }}"> <i class="fa fa-edit"></i></a>
				    	  <a class="btn btn-sm btn-danger" id="delete" href="{{ route('delete.experience',$row->id) }}"> <i class="fa fa-trash" title="delete" aria-hidden="true"></i></a>
					    </td>
					  </tr>
					  @endforeach
					</tbody>
					<tfoot>
						<tr>
							<th>Company Name</th>
      				<th>Company Address</th>
      				<th>Designation</th>
      				<th>Start Date</th>
      				<th>End Date</th>
      				<th>Details</th>
							<th>Action</th>
						</tr>
					</tfoot>
				</table>
				</div>
            </div>
            <!-- /.box-body -->
              <div class="modal fade bs-example-modal-lg" id="exp">
            	  <div class="modal-dialog bs-example-modal-lg" aria-labelledby="myLargeModalLabel" role="document">
            		<div class="modal-content">
            		  <div class="modal-header">
            			<h4 class="modal-title">Default Modal</h4>
            			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
            			  <span aria-hidden="true">&times;</span></button>
            		  </div>
            		  <div class="modal-body">
			            <div class="box-body">
			              <form action="{{ route('store.experience') }}" method="post" >
			              	@csrf
			                <!-- text input -->
			                <div class="form-group">
			                  <label>Company Name</label>
			                  <input type="text" class="form-control" required="" name="company_name" placeholder="Enter Company Name">
			                </div>
			                <div class="form-group">
			                  <label>Company Address</label>
			                  <input type="text" class="form-control" required="" name="company_ads" placeholder="Enter Category Name">
			                </div>
			                <div class="form-group">
			                  <label>Designation</label>
			                  <input type="text" class="form-control" required="" name="designation" placeholder="Enter Category Name">
			                </div>
			                <div class="form-group">
			                  <label>Start Date</label>
			                  <input type="date" class="form-control" required="" name="start_date" placeholder="Enter Category Name">
			                </div>
			                <div class="form-group">
			                  <label>End Date</label>
			                  <input type="end" class="form-control" required="" name="end_date" placeholder="Enter Category Name">
			                </div>
			                <div class="form-group">
			                  <label>Details</label>
			                  <textarea class="textarea" name="details" placeholder="Place some text here"
                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"> 
                                    
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
          </div>
          <!-- /.box -->          
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection