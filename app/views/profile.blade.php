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
                    <div><a href="/usersetting" class="btn btn-danger col-md-offset-10">Edit</a></div>
                    <label for="text" class="col-lg-2 control-label">ชื่อ</label>
                    <div class="col-lg-10">
                      <p>บลูบลูผู้น่ารัก</p><br>
                    </div>
                  </div>

           

                  <div class="form-group">
                    <label for="text" class="col-lg-2 control-label">นามสกุล</label>
                    <div class="col-lg-10">
                     <p>บลูบลูผู้น่ารัก</p><br>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label  class="col-lg-2 control-label">รหัสประจำตัว</label>
                    <div class="col-lg-10" style="resize:none; overflow: auto;">
                      <p>55010711</p><br>
                    </div>
                  </div>

                      <div class="form-group">
                    <label  class="col-lg-2 control-label">E-mail</label>
                    <div class="col-lg-10" >
                      <p>blueblue@hotmail.com</p><br>
                    </div>
                  </div>

                      <div class="form-group">
                    <label  class="col-lg-2 control-label">รหัสประจำตัว</label>
                    <div class="col-lg-10">
                      <p>55010711</p><br>
                    </div>
                  </div>

                   <div class="form-group">
                    <label  class="col-lg-2 control-label">สถานะ</label>
                    <div class="col-lg-10">
                      <p>อาจารย์</p><br>
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

