@extends('layouts.admin')

@section('admin_content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        General Form Elements
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Profile Setting</li>
      </ol>
    </section>

<!-- Main content -->
    <section class="content">
     
     <!-- Basic Forms -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Personel Details:</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="">
           <form method="post" action="{{ route('profile.update',$profile->id) }}" enctype="multipart/form-data">
           	@csrf
            <div class="col-12">
            	<div class="form-group row">
				  <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
				  <div class="col-sm-10">
					<input class="form-control" type="text" value="{{ $profile->name }}" name="name" id="example-text-input">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-search-input" class="col-sm-2 col-form-label">Address</label>
				  <div class="col-sm-10">
					<input class="form-control" type="text" name="address" value="{{ $profile->address }}" id="example-search-input">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-search-input" class="col-sm-2 col-form-label">Company Name</label>
				  <div class="col-sm-10">
					<input class="form-control" type="text" name="company_name" value="{{ $profile->company_name }}" id="example-search-input">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-search-input" class="col-sm-2 col-form-label">Designation</label>
				  <div class="col-sm-10">
					<input class="form-control" type="text" name="designation" value="{{ $profile->designation }}" id="example-search-input">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-search-input" class="col-sm-2 col-form-label">Image</label>
				  <div class="col-sm-8">
					<input class="form-control" type="file" name="image" value="{{ $profile->name }}" id="example-search-input" onchange="readURL(this);">
				  </div>
				  <div class="col-sm-2">
				  	<img src="#" id="one">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-search-input" class="col-sm-2 col-form-label">About Me</label>
				  <div class="col-sm-10">
					<textarea class="textarea" name="details" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">  {!! $profile->details !!}
                            
                	</textarea>
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-search-input" class="col-sm-2 col-form-label">Date Of Birth</label>
				  <div class="col-sm-10">
					<input class="form-control" type="date" name="dob" value="{{ $profile->dob }}" id="example-search-input">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-search-input" class="col-sm-2 col-form-label">Mobile</label>
				  <div class="col-sm-10">
					<input class="form-control" type="text" name="phone" value="{{ $profile->phone }}" id="example-search-input">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-search-input" class="col-sm-2 col-form-label">Email</label>
				  <div class="col-sm-10">
					<input class="form-control" type="email" name="email" value="{{ $profile->email }}" id="example-search-input">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-search-input" class="col-sm-2 col-form-label">Martial Status</label>
				  <div class="col-sm-10">
					<input class="form-control" type="text" name="marital" value="{{ $profile->marital }}" id="example-search-input">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-search-input" class="col-sm-2 col-form-label">Nationality</label>
				  <div class="col-sm-10">
					<input class="form-control" type="text" name="nationality" value="{{ $profile->nationality }}" id="example-search-input">
				  </div>
				</div>
				<br>
				<h3 class="box-title">Social Details:</h3>
				<hr>
				<div class="form-group row">
				  <label for="example-search-input" class="col-sm-2 col-form-label">Skype</label>
				  <div class="col-sm-10">
					<input class="form-control" type="text" name="skype" value="{{ $profile->skype }}" id="example-search-input">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-search-input" class="col-sm-2 col-form-label">Facebook</label>
				  <div class="col-sm-10">
					<input class="form-control" type="text" name="facebook" value="{{ $profile->facebook }}" id="example-search-input">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-search-input" class="col-sm-2 col-form-label">Instagram</label>
				  <div class="col-sm-10">
					<input class="form-control" type="text" name="instagram" value="{{ $profile->instagram }}" id="example-search-input">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-search-input" class="col-sm-2 col-form-label">Linkdin</label>
				  <div class="col-sm-10">
					<input class="form-control" type="text" name="linkdin" value="{{ $profile->linkdin }}" id="example-search-input">
				  </div>
				</div>
				<div class="box-footer">
                	<button type="submit" class="btn btn-primary">Submit</button>
              	</div>
            </div>
           </form>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
  </section>
</div>

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