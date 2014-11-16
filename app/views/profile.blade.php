@extends('template')

@section('content')


<!--scriptShowhide-->  

  	<div class="breadcrumb"><li><p style="font-size: 20px;">Your Profile</li></div>

  

	  <div class="col-md-8" style="margin-top:10px;">
        <div class="well bs-component col-md-8" style="margin-left:100px;">
          <!--edit-->
          <!---->
             
                <fieldset>
                  <div class="form-group">
                    <label for="text" class="col-lg-2 control-label">ชื่อ</label>
                    <div class="col-lg-10">
                      <p>{{$name}}</p><br>
                    </div>
                  </div>

           

                  <div class="form-group">
                    <label for="text" class="col-lg-2 control-label">นามสกุล</label>
                    <div class="col-lg-10">
                     <p>{{$surname}}</p><br>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label  class="col-lg-2 control-label">รหัสประจำตัว</label>
                    <div class="col-lg-10" style="resize:none; overflow: auto;">
                      <p>{{$id}}</p><br>
                    </div>
                  </div>

                      <div class="form-group">
                    <label  class="col-lg-2 control-label">E-mail</label>
                    <div class="col-lg-10" >
                      <p>{{$email}}</p><br>
                    </div>
                  </div>

                   <div class="form-group">
                    <label  class="col-lg-2 control-label">สถานะ</label>
                    <div class="col-lg-10">
                      <p>{{$status}}</p><br>
                    </div>
                  </div>


    </div>

<!--code Edit-->


                   <!--
                    <form class="form-horizontal" role="form" method="post">
                        <div class="row">
                            <div class="form-group">
                            <label class="col-xs-8 col-md-2 control-label">Usename *</label>
                                <div class="col-xs-8 col-md-5">
                                    <input type="string" name="useName" class="form-control" placeholder="ห้ามใช้ภาษาไทย" required autofocus >
                                </div>
                            </div>
                        </div>
                    </form>

                    -->

     
                   
@stop

