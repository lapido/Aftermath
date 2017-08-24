@extends('layouts.app')
@if (session('status'))
    <div class="alert alert-success enroll-alert">
        {{ session('status') }}
    </div>
@endif
    <div id="enroll-div">
		<div class="container form-con" style="">
			<div class="row main">
			<h5>Enroll for one of our courses</h5>
				<div class="main-login main-center">
		      
          {!! Form::open(['action'=> 'EnrollController@sendForm']) !!}
            <div class="form-group">
              <label for="name" class="cols-sm-2 control-label">Your Name</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  {!! Form::text('name', $value = null, ['class'=> 'form-control', 'placeholder'=>'Enter your full Name', 'required'=>'required']) !!}
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="email" class="cols-sm-2 control-label">Your Email</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                  
                  {!! Form::email('email', $value = null, ['class'=> 'form-control', 'placeholder'=>'Enter your Email', 'type'=>'email','required'=>'required']) !!}
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="phoneNo" class="cols-sm-2 control-label">Phone No</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
                  <!-- <input type="text" class="form-control" name="phoneNo" id="phoneNo"  placeholder="Enter your Phone Number"/> -->
                  {!! Form::text('phoneNo', $value = null, ['class'=> 'form-control', 'placeholder'=>'Enter your Phone Number','required'=>'required']) !!}
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="password" class="cols-sm-2 control-label">Programme Choice</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                    {{ Form::select('program', [
                    'null' => 'Pick a program',
                    'WEB DEVELOPMENT' => 'WEB DEVELOPMENT',
                    'R STATISTICAL PROGRAMMING' => 'R STATISTICAL PROGRAMMING',
                    'WEB DESIGN'=> 'WEB DESIGN',
                    'BASIC COMPACT'=> 'BASIC COMPACT',
                    'SYSTEM MAINTENANCE &amp; REPAIRS'=>'SYSTEM MAINTENANCE &amp; REPAIRS',
                    'NETWORK SECURITY'=>'NETWORK SECURITY'
                    ], 

                    'null' ,['class'=>'form-control']
                    ) }}
                </div>
              </div>
            </div> 
            <div class="form-group">
              <label for="confirm" class="cols-sm-2 control-label">Are you a corps member?</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <!-- <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span> -->
                  <!-- <input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password"/> -->
                  
                           <div class="radio radio-info radio-inline">
                              
                              {{ Form::radio('radioInline', 'Yes', false,['id'=> 'yesCorper']) }}
                              <label for="yesCorper"> Yes </label>
                            </div>
                                   <div class="radio radio-inline">
                                       
                                       {{ Form::radio('radioInline', 'No',true, ['id'=> 'noCorper']) }}
                                       <label for="noCorper"> No </label>
                                   </div>
                </div>
              </div>
            </div>
            <div class="corp-form">
              <div class="form-group">
                <label for="lga" class="cols-sm-2 control-label">L.G.A of Service</label>
                <div class="cols-sm-10">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                  <!--   <input type="text" class="form-control" name="lga" id="lga"  placeholder="L.G.A of Service"/> -->
                    {!! Form::text('lga', $value = null, ['class'=> 'form-control', 'placeholder'=>'L.G.A of Service']) !!}
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="ppa" class="cols-sm-2 control-label">P.P.A</label>
                <div class="cols-sm-10">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                   <!--  <input type="text" class="form-control" name="ppa" id="ppa"  placeholder="Place of primary assignment"/>
 -->                    {!! Form::text('ppa', $value = null, ['class'=> 'form-control', 'placeholder'=>'Place of primary assignment']) !!}

                  </div>
                </div>
              </div>
            </div>
            <div class="form-group ">
              <!-- <a href="http://deepak646.blogspot.in" target="_blank" type="button" id="button" class="btn btn-primary btn-lg btn-block login-button">Register</a> -->
              {!! Form::submit('Register', ['class' => 'btn btn-default btn-lg btn-block login-button'] ) !!}
            </div>
            <div class="link-training"><a href="/training">View available programmes </a></div>
          {!! Form::close() !!}		
		      
				</div>

			</div>
      
		</div>
    </div>

<style type="text/css">
  .link-training a{
    color:#fff;
    text-decoration: underline;
  }
  .link-training a:hover{
    color: #000;
  }
	.main{
 	margin:50px 15px;
}

h5{
	text-align: center;
	font-weight: bolder;
	/*padding-bottom: 0em !important;*/
	font-family: 'Fruktur', cursive !important;
	font-size:2em !important;
  padding-bottom: 15px;
  color:#269B3D !important;
}

h1.title { 
	font-size: 50px;
	font-family: 'Passion One', cursive; 
	font-weight: 400; 
}

hr{
	width: 10%;
	color: #fff;
}

.form-group{
	margin-bottom: 15px;
}

label{
	margin-bottom: 15px;
}

input,
input::-webkit-input-placeholder {
    font-size: 11px;
    padding-top: 3px;
}

.main-login{
 	background-color: #fff;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

}
.form-control {
    height: auto!important;
padding: 8px 12px !important;
}
.input-group {
    -webkit-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
    -moz-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
    box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
}
#button {
    border: 1px solid #ccc;
    margin-top: 28px;
    padding: 6px 12px;
    color: #666;
    text-shadow: 0 1px #fff;
    cursor: pointer;
    -moz-border-radius: 3px 3px;
    -webkit-border-radius: 3px 3px;
    border-radius: 3px 3px;
    -moz-box-shadow: 0 1px #fff inset, 0 1px #ddd;
    -webkit-box-shadow: 0 1px #fff inset, 0 1px #ddd;
    box-shadow: 0 1px #fff inset, 0 1px #ddd;
    background: #f5f5f5;
    background: -moz-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #f5f5f5), color-stop(100%, #eeeeee));
    background: -webkit-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    background: -o-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    background: -ms-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    background: linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f5f5f5', endColorstr='#eeeeee', GradientType=0);
}
.main-center{
 	margin-top: 30px;
 	margin: 0 auto;
 	max-width: 400px;
    padding: 10px 40px;
	background:#269B3D;
	    color: #FFF;
    text-shadow: none;
	-webkit-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);

}
span.input-group-addon i {
    color: #269B3D;
    font-size: 17px;
}

.login-button{
	margin-top: 5px;
}

.login-register{
	font-size: 11px;
	text-align: center;
}

.radio {
  padding-left: 20px; }
  .radio label {
    display: inline-block !important;
    position: relative;
    padding-left: 5px; }
    .radio label::before {
      content: "";
      display: inline-block;
      position: absolute;
      width: 17px;
      height: 17px;
      left: 0;
      margin-left: -20px;
      border: 1px solid #cccccc;
      border-radius: 50%;
      background-color: #fff;
      -webkit-transition: border 0.15s ease-in-out;
      -o-transition: border 0.15s ease-in-out;
      transition: border 0.15s ease-in-out; }
    .radio label::after {
      display: inline-block;
      position: absolute;
      content: " ";
      width: 11px;
      height: 11px;
      left: 3px;
      top: 3px;
      margin-left: -20px;
      border-radius: 50%;
      background-color: #555555;
      -webkit-transform: scale(0, 0);
      -ms-transform: scale(0, 0);
      -o-transform: scale(0, 0);
      transform: scale(0, 0);
      -webkit-transition: -webkit-transform 0.1s cubic-bezier(0.8, -0.33, 0.2, 1.33);
      -moz-transition: -moz-transform 0.1s cubic-bezier(0.8, -0.33, 0.2, 1.33);
      -o-transition: -o-transform 0.1s cubic-bezier(0.8, -0.33, 0.2, 1.33);
      transition: transform 0.1s cubic-bezier(0.8, -0.33, 0.2, 1.33); }
  .radio input[type="radio"] {
    opacity: 0; }
    .radio input[type="radio"]:focus + label::before {
      outline: thin dotted;
      outline: 5px auto -webkit-focus-ring-color;
      outline-offset: -2px; }
    .radio input[type="radio"]:checked + label::after {
      -webkit-transform: scale(1, 1);
      -ms-transform: scale(1, 1);
      -o-transform: scale(1, 1);
      transform: scale(1, 1); }
    .radio input[type="radio"]:disabled + label {
      opacity: 0.65; }
      .radio input[type="radio"]:disabled + label::before {
        cursor: not-allowed; }
  .radio.radio-inline {
    margin-top: 0; }

    .radio-primary input[type="radio"] + label::after {
  background-color: #428bca; }
.radio-primary input[type="radio"]:checked + label::before {
  border-color: #428bca; }
.radio-primary input[type="radio"]:checked + label::after {
  background-color: #428bca; }

.radio-danger input[type="radio"] + label::after {
  background-color: #d9534f; }
.radio-danger input[type="radio"]:checked + label::before {
  border-color: #d9534f; }
.radio-danger input[type="radio"]:checked + label::after {
  background-color: #d9534f; }

.radio-info input[type="radio"] + label::after {
  background-color: #5bc0de; }
.radio-info input[type="radio"]:checked + label::before {
  border-color: #5bc0de; }
.radio-info input[type="radio"]:checked + label::after {
  background-color: #5bc0de; }

.radio-warning input[type="radio"] + label::after {
  background-color: #f0ad4e; }
.radio-warning input[type="radio"]:checked + label::before {
  border-color: #f0ad4e; }
.radio-warning input[type="radio"]:checked + label::after {
  background-color: #f0ad4e; }

.radio-success input[type="radio"] + label::after {
  background-color: #5cb85c; }
.radio-success input[type="radio"]:checked + label::before {
  border-color: #5cb85c; }
.radio-success input[type="radio"]:checked + label::after {
  background-color: #5cb85c; }

  .form-con{
    margin-top:2em;
    /*margin-bottom: 2em;*/

  }
</style>