@extends('template')

@section('content')
<!--head-->
<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-theme.css">
  <script src = "/js/bootstrap.js"></script>
  <script src = "/js/jquery.min.js"></script>
  <link href="/css/simple-sidebar.css" rel="stylesheet">

  <!--end head-->


  	<div class="breadcrumb"><li><p style="font-size: 20px;">Create topic</li></div>
	   <div class="col-md-8" style="margin-top:10px;">
	     	<div class="well bs-component col-md-8" style="margin-left:100px;">
          <!--edit-->
          <!---->
              <form class="form-horizontal" id="addsubject" role="form" method="POST" action="{{url('/newclass')}}" enctype="multipart/form-data">
                <fieldset>
                  <div class="form-group">
                    <label for="text" class="col-lg-2 control-label">ชื่อกระทู้</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="name_topic" required autofocus>
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="inputPassword" class="col-lg-2 control-label" >รายละเอียด</label>
                    <div class="col-lg-10">
                     <textarea rows="5" cols="50" form="addsubject" name="detail_topic" id="detail_subject" ></textarea>
                    </div>
                  </div>


                  <div class="form-group" action=" ">
                    <div class="col-lg-10 col-lg-offset-2">
                      <button type="submit"  class="btn btn-primary">Submit</button>
                      <button class="btn btn-default">Cancel</button>
                    </div>
                  </div>
                </fieldset>
              </form>
    </div>
@stop