<?php
error_reporting(0);

?>
@extends('layout')

@section('content')


<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-12">
<h1>Employee Data</h1>
</div>
<div class="col-sm-12">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">General Form</li>
</ol>
</div>
</div>
</div>
</section>

<section class="content">
<div class="container-fluid">
<div class="row">

<div class="col-sm-12">

<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Employee Details</h3>
</div>
</div>


<form class="form-horizontal" method="post" action="{{ URL('/updateEmployee')}}">
    @csrf
<div class="card-body">
<div class="form-group">
<label for="exampleInputName">Name</label>
<input type="hidden" class="form-control" id="id" name="id" value="{{($employee->id)}}">
<input type="text" class="form-control" id="name" name="name" placeholder="Employee name" value="{{($employee->name)}}">
</div>
<div class="form-group">
<label for="exampleInputEmail">Gmail</label>
<input type="email" class="form-control" id="gmail" name="gmail"  placeholder="Email" value="{{($employee->gmail)}}">
</div>
<div class="form-group">
<label for="exampleInputPassword">Contact</label>
<input type="tel" class="form-control" id="phone" name="phone" placeholder="Password" value="{{($employee->password)}}">
</div>
<div class="form-group">
<label for="exampleInput">Date of Birth</label>
<input type="date" class="form-control" id="dob" name="dob" placeholder="Contact" value="{{($employee->contact)}}">
</div>
<div class="form-group">
<label for="exampleInputPassword1">Date of Joining</label>
<input type="date" class="form-control" id="doj" name="doj" placeholder="Address" value="{{($employee->address)}}">
</div>


<div class="card-footer">
<button type="submit" class="btn btn-primary">Update</button>
</div>
</div>
</form>
</div>
</div>
</div>
</section>
</div>

@stop