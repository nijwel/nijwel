@extends('layouts.admin')

@section('admin_content')

<div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Skill
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="{{ url('all/skill') }}"> Skill</a></li>
        <li class="breadcrumb-item active">Edit Skill</li>
      </ol>
    </section>

    <div class="modal-body">
			            <div class="box-body">
			              <form action="{{ route('update.skill',$skill->id) }}" method="post" >
			              	@csrf
			                <div class="form-group">
			                  <label>Vercity Name</label>
			                  <input type="text" class="form-control" value="{{ $skill->name }}" name="name" placeholder="Enter Vercity Name">
			                </div>
			                <div class="form-group">
			                  <label>Percent (%)</label>
			                  <input type="text" class="form-control" value="{{ $skill->percent }}" name="percent" placeholder="Enter Degree Name">
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