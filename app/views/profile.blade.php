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
                      <p>บลูบลูผู้น่ารัก</p><br>
                    </div>
                  </div>

           

                  <div class="form-group">
                    <label for="text" class="col-lg-2 control-label">รหัสวิชา</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="id" id="id" required autofocus><br>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label  class="col-lg-2 control-label">เวลาเรียน</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="time_subject" id="time_subject"required autofocus>
                    </div>
                  </div>

                   <div class="form-group">
                    <label  class="col-lg-2 control-label">วันที่เรียน</label>
                    <div class="col-lg-10">
                      <select class="form-control" name="day_subject" id="day_subject">
                        <option value= "monday" >จันทร์</option>
                        <option value= "tuesday" >อังคาร</option>
                        <option value= "wednesday" >พุธ</option>
                        <option value= "thursday" >พฤหัสบดี</option>
                        <option value= "friday" >ศุกร์</option>
                        <option value= "saturday" >เสาร์</option>
                        <option value= "sunday" >อาทิตย์</option>             
                    </select>
                    </div>
                  </div>

                  

                  <div class="form-group">
                    <label class="col-lg-2 control-label">ห้องเรียน</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="room_subject" id="room_subject" required autofocus>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputPassword" class="col-lg-2 control-label" >รายละเอียดรายวิชา</label>
                    <div class="col-lg-10">
                     <textarea rows="5" cols="50" form="addsubject" name="detail_subject" id="detail_subject" ></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label  class="col-lg-2 control-label">ไฟล์รายชื่อ</label>
                    <div class="col-lg-10">
                      <input type="file" class="flieinput" name="subject_file" required autofocus> 
                    </div>
                  </div>

                  <div class="form-group" action=" ">
                    <div class="col-lg-10 col-lg-offset-2">
                      <button type="submit"  class="btn btn-primary">Submit</button>
                      <button class="btn btn-default">Cancel</button>
                    </div>
                  </div>
                </fieldset>
              
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

