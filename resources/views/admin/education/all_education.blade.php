@extends('layouts.admin')

@section('admin_content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Education Tables
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Education</li>
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
              <button type="button" class="btn btn-success pull-right " data-toggle="modal" data-target="#edu">
                Add Education
              </button>
              </h6>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
				  <div class="table-responsive">
				  <table id="example" class="table table-bordered table-hover display nowrap margin-top-10">
					<thead>
						<tr>
							<th>Vercity Name</th>
      				<th>Degree</th>
      				<th>Session</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($education as $row)
					  <tr>
					    <td>{{ $row->name }}</td>
					    <td>{{ $row->degree }}</td>
					    <td>{{ date("Y", strtotime($row->start_date)) }} - {{ date("Y", strtotime($row->end_date)) }}</td>
					    <td>
				    	  <a class="btn btn-sm btn-success" href="{{ route('edit.education',$row->id) }}"> <i class="fa fa-edit"></i></a>
				    	  <a class="btn btn-sm btn-danger" id="delete" href="{{ route('delete.education',$row->id) }}"> <i class="fa fa-trash" title="delete" aria-hidden="true"></i></a>
					    </td>
					  </tr>
					  @endforeach
					</tbody>
					<tfoot>
						<tr>
              <th>Vercity Name</th>
              <th>Degree</th>
              <th>Session</th>
							<th>Action</th>
						</tr>
					</tfoot>
				</table>
				</div>
            </div>
            <!-- /.box-body -->
              <div class="modal fade bs-example-modal-lg" id="edu">
            	  <div class="modal-dialog bs-example-modal-lg" aria-labelledby="myLargeModalLabel" role="document">
            		<div class="modal-content">
            		  <div class="modal-header">
            			<h4 class="modal-title">Default Modal</h4>
            			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
            			  <span aria-hidden="true">&times;</span></button>
            		  </div>
            		  <div class="modal-body">
			            <div class="box-body">
			              <form action="{{ route('store.education') }}" method="post" >
			              	@csrf
			                <!-- text input -->
			                <div class="form-group">
			                  <label>Vercity Name</label>
			                  <input type="text" class="form-control" required="" name="name" placeholder="Enter Vercity Name">
			                </div>
			                <div class="form-group">
			                  <label>Degree</label>
			                  <input type="text" class="form-control" required="" name="degree" placeholder="Enter Degree Name">
			                </div>
                      <div class="form-group">
                        <label>Start Date</label>
                        <input type="date" class="form-control" required="" name="start_date" placeholder="Enter Start Date">
                      </div>
                      <div class="form-group">
                        <label>End Date</label>
                        <input type="date" class="form-control" required="" name="end_date" placeholder="Enter End Date">
                      </div>

                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
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