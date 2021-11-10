@extends('layouts.admin')

@section('admin_content')



  <!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Product Tables
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Portfolio</li>
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
              <button type="button" class="btn btn-success pull-right " data-toggle="modal" data-target="#product">
                Add Product
              </button>
              </h6>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
				  <div class="table-responsive">
				  <table id="example" class="table table-bordered table-hover display nowrap margin-top-10">
					<thead>
						<tr>
							<th>Category Name</th>
              <th>Image</th>
              <th>Code</th>
              <th>Link</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($product as $row)
					  <tr>
					    <td>{{ $row->category_name }}</td>
              <td>
                <img src="{{ asset($row->image) }}" style="height: 50px;">
              </td>
              <td>{{ $row->code }}</td>
              <td>{{ $row->link }}</td>
					    <td>
				    	  <a class="btn btn-sm btn-success" href="{{ route('edit.product',$row->id) }}"> <i class="fa fa-edit"></i></a>
				    	  <a class="btn btn-sm btn-danger" id="delete" href="{{ route('delete.product',$row->id) }}"> <i class="fa fa-trash" title="delete" aria-hidden="true"></i></a>
					    </td>
					  </tr>
					  @endforeach
					</tbody>
					<tfoot>
						<tr>product
              <th>Category Name</th>
              <th>Image</th>
              <th>Code</th>
              <th>Link</th>
              <th>Action</th>
						</tr>
					</tfoot>
				</table>
				</div>
            </div>
            <!-- /.box-body -->
              <div class="modal fade" id="product">
            	  <div class="modal-dialog" role="document">
            		<div class="modal-content">
            		  <div class="modal-header">
            			<h4 class="modal-title">Default Modal</h4>
            			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
            			  <span aria-hidden="true">&times;</span></button>
            		  </div>
            		  <div class="modal-body">
			            <div class="box-body">
			              <form action="{{ route('store.product') }}" method="post" enctype="multipart/form-data" >
			              	@csrf
			                <!-- text input -->
			                <div class="form-group">
			                  <label>Category</label>
			                  <select type="text" class="form-control" required="" name="category_id">
                          <option></option>
                          @foreach($category as $row)
                          <option value="{{ $row->id }}" >{{ $row->category_name }}</option>
                          @endforeach
                        </select>
			                </div>
                      <div class="form-group row">
                        <div class="col-sm-8" >
                          <label>Image</label>
                          <input type="file" class="form-control" required="" name="image" placeholder="Enter Category Name" onchange="readURL(this);">
                        </div>
                        <div class="col-sm-4">
                          <img src="#" id="one">
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Product Code</label>
                        <input type="text" class="form-control" required="" name="code" placeholder="Enter Category Name">
                      </div>
                      <div class="form-group">
                        <label>Link</label>
                        <input type="text" class="form-control"  name="link" placeholder="Enter Category Name">
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript">
  function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#one')
                  .attr('src', e.target.result)
                  .width(80)
                  .height(80);
          };
          reader.readAsDataURL(input.files[0]);
      }
   }
</script>
@endsection