<!-- basic form -->
<?php
error_reporting(0);
?>
@extends('layout')

@section('content')
<div class="dashboard-wrapper">
      <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
              <h2 class="pageheader-title">Form Validations </h2>
              <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet
                vestibulum mi. Morbi lobortis pulvinar quam.</p>
              <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Forms</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Form Validations</li>
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
          <!-- basic form -->
          <!-- ============================================================== -->
          <div class="col-xl-12">
            <div class="card mb-5 shadow-sm">
              <h5 class="card-header">Basic Form</h5>
              <div class="card-body">
                <form action="{{URL('/submitEmployee/')}}" method="post" >
                @csrf  
                <div class="form-group">
                    <label for="inputUserName">Name</label>
                    <input id="inputUserName" type="text" name="name"  parsley-trigger="change" required=""
                      placeholder="Enter the name" autocomplete="off" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="inputEmail">Gmail</label>
                    <input id="inputEmail" type="email" name="gmail" parsley-trigger="change" required=""
                      placeholder="Enter the email" autocomplete="off" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="inputPassword">Contact</label>
                    <input id="inputPassword" type="tel" name="phone" placeholder="Enter the mobile num" required="" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="inputRepeatPassword">Date of Birth</label>
                    <input id="inputRepeatPassword" data-parsley-equalto="#inputPassword" name="dob" type="date" required=""
                      placeholder="Password" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="inputRepeatPassword">Date of Joining</label>
                    <input id="inputRepeatPassword" data-parsley-equalto="#inputPassword" name="doj" type="date" required=""
                      placeholder="Password" class="form-control">
                  </div>
                  <div class="row">
                    <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                      <label class="be-checkbox custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input"><span class="custom-control-label">Remember
                          me</span>
                      </label>
                    </div>
                    <div class="col-sm-6 pl-0">
                      <p class="text-right">
                        <button type="submit" class="btn btn-space btn-primary">Submit</button>
                        <button class="btn btn-space btn-secondary">Cancel</button>
                      </p>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- ============================================================== -->
          <!-- end basic form -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- horizontal form -->
          <!-- ============================================================== -->

        </div>
        <!-- ============================================================== -->
        <!-- end horizontal form -->
        <!-- ============================================================== -->
        <div class="row">
          <!-- ============================================================== -->
          <!-- valifation types -->
          <!-- ============================================================== -->
          <!-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card mb-5 shadow-sm">
              <h5 class="card-header">Validation Types</h5>
              <div class="card-body">
                <form id="form" data-parsley-validate="" novalidate="">
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Required</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input type="text" required="" placeholder="Type something" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Min Length</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input type="text" required="" data-parsley-minlength="6" placeholder="Min 6 chars."
                        class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Max Length</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input type="text" required="" data-parsley-maxlength="6" placeholder="Max 6 chars."
                        class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Range Length</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input type="text" required="" data-parsley-length="[5,10]"
                        placeholder="Text between 5 - 10 chars length" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Min Value</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input type="text" required="" data-parsley-min="6" placeholder="Min value is 6"
                        class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Max Value</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input type="text" required="" data-parsley-max="6" placeholder="Max value is 6"
                        class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Range Value</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input required="" type="text" min="6" max="100" placeholder="Number between 6 - 100"
                        class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Regular Exp</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input type="text" required="" data-parsley-pattern="#[A-Fa-f0-9]{6}" placeholder="Hex. Color"
                        class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Equal To</label>
                    <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                      <input id="pass2" type="password" required="" placeholder="Password" class="form-control">
                    </div>
                    <div class="col-sm-4 col-lg-3">
                      <input type="password" required="" data-parsley-equalto="#pass2" placeholder="Re-Type Password"
                        class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label text-sm-right">Min check</label>
                    <div class="col-sm-6">
                      <div class="custom-controls-stacked">
                        <label class="custom-control custom-checkbox">
                          <input id="ck1" name="ck1" type="checkbox" data-parsley-multiple="groups" value="bar"
                            data-parsley-mincheck="2" data-parsley-errors-container="#error-container1"
                            class="custom-control-input"><span class="custom-control-label">Option 1</span>
                        </label>
                        <label class="custom-control custom-checkbox">
                          <input id="ck2" name="ck2" type="checkbox" data-parsley-multiple="groups" value="bar2"
                            data-parsley-mincheck="2" data-parsley-errors-container="#error-container1"
                            class="custom-control-input"><span class="custom-control-label">Option 2</span>
                        </label>
                        <label class="custom-control custom-checkbox">
                          <input id="ck3" name="ck3" type="checkbox" data-parsley-multiple="groups" value="bar3"
                            data-parsley-mincheck="2" required="" data-parsley-errors-container="#error-container1"
                            class="custom-control-input"><span class="custom-control-label">Option 3</span>
                        </label>
                        <div id="error-container1"></div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label text-sm-right">Max check</label>
                    <div class="col-sm-6">
                      <div class="custom-controls-stacked">
                        <label class="custom-control custom-checkbox">
                          <input type="checkbox" value="bar" id="e1" data-parsley-multiple="group1"
                            data-parsley-errors-container="#error-container2" class="custom-control-input"><span
                            class="custom-control-label">Option 1</span>
                        </label>
                        <label class="custom-control custom-checkbox">
                          <input type="checkbox" value="bar" id="e2" data-parsley-multiple="group1"
                            data-parsley-errors-container="#error-container2" class="custom-control-input"><span
                            class="custom-control-label">Option 2</span>
                        </label>
                        <label class="custom-control custom-checkbox">
                          <input type="checkbox" value="bar" id="e3" data-parsley-multiple="group1"
                            data-parsley-maxcheck="1" data-parsley-errors-container="#error-container2"
                            class="custom-control-input"><span class="custom-control-label">Option 3</span>
                        </label>
                        <div id="error-container2"></div>
                      </div>
                    </div>
                  </div> -->
                  <!-- <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">E-Mail</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input type="email" required="" parsley-type="email" placeholder="Enter a valid e-mail"
                        class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">URL</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input parsley-type="url" type="url" required="" placeholder="URL" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Digits</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input data-parsley-type="digits" type="text" required="" placeholder="Enter only digits"
                        class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Number</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input data-parsley-type="number" type="text" required="" placeholder="Enter only numbers"
                        class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Alphanumeric</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input data-parsley-type="alphanum" type="text" required="" placeholder="Enter alphanumeric value"
                        class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Textarea</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <textarea required="" class="form-control"></textarea>
                    </div>
                  </div>
                  <div class="form-group row text-right">
                    <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                      <button type="submit" class="btn btn-space btn-primary">Submit</button>
                      <button class="btn btn-space btn-secondary">Cancel</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div> -->
          <!-- ============================================================== -->
          <!-- end valifation types -->
          <!-- ============================================================== -->

        </div>
      </div>

      <!-- ============================================================== -->
      <!-- footer -->
      <!-- ============================================================== -->
      <!-- <div class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
              2020 © Influence - Designed and Developed by<a href="https://themeforest.net/user/jitu/portfolio"
                target="_blank" class="ml-1">Jituchuahan</a>.
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
              <div class="text-md-right footer-links d-none d-sm-block">
                <a href="javascript: void(0);">About</a>
                <a href="javascript: void(0);">Support</a>
                <a href="javascript: void(0);">Contact Us</a>
              </div>
            </div>
          </div>
        </div>
      </div> -->
      <!-- ==============================================================-->
      <!-- end footer -->
      <!-- ==============================================================-->
    </div>

