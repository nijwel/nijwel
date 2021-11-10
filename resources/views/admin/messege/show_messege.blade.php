
@extends('layouts.admin')

@section('admin_content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        View Messege
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">View Messege</li>
      </ol>
    </section>


    <section class="content">

	  	<h3 style="margin-left: 30px;">Messge</h3>
	  	<ul>
		  	 <li> Name:- {{ $messege->name }}</li>
		  	 <li> Mobile:- {{ $messege->phone }}</li>
		  	 <li> Email:- {{ $messege->email }}</li>
		  	 <li> Subject:- {{ $messege->subject }}</li>
		  	 <hr>
		  	 <br>
		  	 <li><b> Messege :-</b> <hr> {{ $messege->messege }}</li>
	    </ul>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection