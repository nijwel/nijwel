@extends('layouts.admin')

@section('admin_content')

<div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Portfolio
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="{{ url('all/product') }}">Portfolio</a></li>
        <li class="breadcrumb-item active">Edit Portfolio</li>
      </ol>
    </section>

    <div class="modal-body">
			            <div class="box-body">
			              <form action="{{ route('update.product',$product->id) }}" method="post" enctype="multipart/form-data" >
			              	@csrf
				              <div class="form-group">
				                  <label>Category</label>
				                  <select type="text" class="form-control" required="" name="category_id">
			                          <option></option>
			                          @foreach($category as $row)
			                          <option value="{{ $row->id }}" @php if ($row->id == $product->category_id)
			                          	echo 'selected'
			                           @endphp >{{ $row->category_name }}</option>
			                          @endforeach
	                        	   </select>
				              </div>
				              <div class="row">
		                      <div class="form-group col-sm-10">
		                        <label>Image</label>
		                        <input type="file" class="form-control" name="image" >
		                      </div>
		                      <div class="col-sm-2">
		                      	<img class="pull-right" src="{{ asset($product->image) }}" style="height: 100px; width: 120px;" >
		                      </div>
		                      </div>
		                      <div class="form-group">
		                        <label>Product Code</label>
		                        <input type="text" class="form-control" required="" name="code" value="{{ $product->code }}">
		                      </div>
		                      <div class="form-group">
		                        <label>Link</label>
		                        <input type="text" class="form-control"  name="link" value="{{ $product->link }}">
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