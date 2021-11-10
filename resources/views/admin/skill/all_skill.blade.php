@extends('layouts.admin')

@section('admin_content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Skill Tables
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Skill</li>
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
              <button type="button" class="btn btn-success pull-right " data-toggle="modal" data-target="#skill">
                Add Skill		
              </button>
              </h6>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
				  <div class="table-responsive">
				  <table id="example" class="table table-bordered table-hover display nowrap margin-top-10">
					<thead>
						<tr>
							<th>Skill Name</th>
      						<th>Percent</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($skill as $row)
					  <tr>
					    <td>{{ $row->name }}</td>
					    <td>{{ $row->percent }} %</td>
					    <td>
				    	  <a class="btn btn-sm btn-success" href="{{ route('edit.skill',$row->id) }}"> <i class="fa fa-edit"></i></a>
				    	  <a class="btn btn-sm btn-danger" id="delete" href="{{ route('delete.skill',$row->id) }}"> <i class="fa fa-trash" title="delete" aria-hidden="true"></i></a>
					    </td>
					  </tr>
					  @endforeach
					</tbody>
					<tfoot>
						<tr>
							<th>Skill Name</th>
      						<th>Percent</th>
							<th>Action</th>
						</tr>
					</tfoot>
				</table>
				</div>
            </div>
            <!-- /.box-body -->
              <div class="modal fade bs-example-modal-lg" id="skill">
            	  <div class="modal-dialog bs-example-modal-lg" aria-labelledby="myLargeModalLabel" role="document">
            		<div class="modal-content">
            		  <div class="modal-header">
            			<h4 class="modal-title">Default Modal</h4>
            			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
            			  <span aria-hidden="true">&times;</span></button>
            		  </div>
            		  <div class="modal-body">
			            <div class="box-body">
			              <form action="{{ route('store.skill') }}" method="post" >
			              	@csrf
			                <!-- text input -->
			                <div class="form-group">
			                  <label>Skill Name</label>
			                  <input type="text" class="form-control" required="" name="name" placeholder="Enter Skill Name">
			                </div>
			                <div class="form-group">
			                  <label>Percent (%)</label>
			                  <input type="number" class="form-control" required="" name="percent">
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