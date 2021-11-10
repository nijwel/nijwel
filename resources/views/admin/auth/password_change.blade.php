{{-- @extends('layouts.admin')

@section('admin_content')
<div class="container">

    <section class="content-header">
      <h1>
        Password Change
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> profile</a></li>
        <li class="breadcrumb-item active">password Change</li>
      </ol>
    </section>

    <br>
    <section class="" >
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.update_password') }}">
                        @csrf

                        <div class="panel-body">
                            <label for="exampleInputEmail1">Old Password</label>
                            <input id="oldpass" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} col-md-6 " name="oldpass" value="{{ $oldpass ?? old('oldpass') }}" required autofocus placeholder="Old Password">

                            @if ($errors->has('oldpass'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-danger">{{ $errors->first('oldpass') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">New Password</label>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} col-md-6" name="password" required placeholder="New Password">

                            @if ($errors->has('oldpass'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-danger">{{ $errors->first('oldpass') }}</strong>
                                </span>
                            @endif
                        </div>

                       <div class="form-group">
                           <label for="exampleInputPassword1"> Confirm Password</label>
                            <input id="password-confirm" type="password" class="form-control col-md-6" name="password_confirmation" required placeholder="Confirm Password">
                       </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Password Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
  </section>
</div>
@endsection --}}

@extends('layouts.admin')

@section('admin_content')

 <!-- Content Wrapper. Contains page content -->
  <div class="content form-control ">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Password Change
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Profile</a></li>
        <li class="breadcrumb-item active">Edit profile</li>
      </ol>
    </section>
    <section class="content" >
    <div class="row" >
     <div class="col-6 " style="padding: 20px;" >
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title"></h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form action="{{ route('admin.update_password') }}" method="post" enctype="multipart/form-data">
        @csrf
                <div class="panel-body">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-4 control-label">Old Password <span class="text-danger" >*</span> </label>
                           <div class="col-sm-9">
                             <input id="oldpass" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="oldpass" value="{{ $oldpass ?? old('oldpass') }}" required autofocus>
                           </div>
                        </div>
                         <div class="form-group">
                             <label for="exampleInputPassword1" class="col-sm-4 control-label" >New Password <span class="text-danger" >*</span></label>
                             <div class="col-sm-9">
                             <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                             </div>

                             @if ($errors->has('oldpass'))
                                 <span class="invalid-feedback" role="alert">
                                     <strong class="text-danger">{{ $errors->first('oldpass') }}</strong>
                                 </span>
                             @endif
                         </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1" class="col-sm-6 control-label"> Confirm Password<span class="text-danger" >*</span></label>
                            <div class="col-sm-9">
                             <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <br>
                        {{-- <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Country</label>
                           <div class="col-sm-9">
                             <input type="text" class="form-control" value="{{ Auth::user()->country }}"  required="" name="country">
                           </div>
                        </div>
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">City</label>
                           <div class="col-sm-9">
                             <input type="text" class="form-control" value="{{ Auth::user()->city }}"  required="" name="city">
                           </div>
                        </div>
                <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Gender</label>
                           <div class="col-sm-9">
                             <input type="text" class="form-control" value="{{ Auth::user()->gender }}"  required="" name="gender">
                           </div>
                        </div> --}}
                </div> <!-- panel-body -->
      </div>
        <div class="box-footer center">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
   
    <!-- /.box -->
  </div>
   <!-- /.content-wrapper -->

@endsection
