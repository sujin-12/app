<?php
error_reporting(0);
?>
@extends('layout')

@section('content')

    <!-- ============================================================== -->
    <!-- end left sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
      <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
              <h2 class="pageheader-title">Data Tables</h2>
              <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet
                vestibulum mi. Morbi lobortis pulvinar quam.</p>
              <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader -->
        <!-- ============================================================== -->
        <div class="row">
          <!-- ============================================================== -->
          <!-- basic table  -->
          <!-- ============================================================== -->
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card shadow-sm mb-5">
              <h5 class="card-header">Basic Table</h5>

              <div class="card-body">
              <a href="{{URL('/addEmployee')}}"> <button type="button" class="btn btn-info waves-effect waves-light">Add Employee</button></a>
                <div class="table-responsive">
                  <table class="table table-striped table-bordered first">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Gmail</th>
                        <th>Contact</th>
                        <th>Date of Birth</th>
                        <th>Date of Joining</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                            @foreach($employee as $employee_data)
                            <tr>

                            <td>{{$employee_data->id}}</td>
							              <td>{{$employee_data->name}}</td>
                            <td>{{$employee_data->gmail}}</td>
                            <td>{{$employee_data->phone}}</td>
                            <td>{{$employee_data->dob}}</td>
                            <td>{{$employee_data->doj}}</td>



                                <td class="center">
                                  <div class="btn-toolbar row-action">
                                    <div class="btn-group">
                                    <a class="btn btn-primary" href="{{ URL('/editEmployee/'.$employee_data->id )}}"title="Edit">Edit</a>
                                    <a class="btn btn-success" href="{{ URL('/viewEmployee/'.$employee_data->id )}}"title="View">View</a>




                                    </div>
                                  </div>
                                </td>
                            </tr>
                         @endforeach
                            </tbody>

        </div>





      </div>
      @endsection
