@extends('template')

@section('content')


  	<div class="breadcrumb"><li><p style="font-size: 20px;">Edit Subject</li></div>
  	<div class="alert alert-warning col-md-8" role="alert" style="margin-left:20px;">กรุณากรอกข้อมูลที่ต้องการแก้ไขค่ะ</div>

	   <div class="col-md-8" style="margin-top:10px;">
	     	<div class="well bs-component col-md-8" style="margin-left:100px;">
          <!--edit-->
          <!---->
              <form class="form-horizontal" id="editname" role="form" method="POST" action="{{url('/posteditsubject/'.$id)}}">
                <fieldset>
                  <div class="form-group">
                    <label for="text" class="col-lg-2 control-label">ชื่อวิชา</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="name_subject" name="name_subject" placeholder="Name" value="{{$name_subject}}">
                    </div>
                  </div>
                  
                  
                  <div class="form-group">
                    <label  class="col-lg-2 control-label">เวลาเรียน</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="time_subject" name="time_subject" value="{{$time_subject}}">
                    </div>
                    </div>
                  

                   <div class="form-group">
                    <label  class="col-lg-2 control-label">วันที่เรียน</label>
                    <div class="col-lg-10">
                      <select class="form-control" name="day_subject" id="day_subject" value="{{$day_subject}}">
						  <option>จันทร์</option>
						  <option>อังคาร</option>
						  <option>พุธ</option>
						  <option>พฤหัสบดี</option>
						  <option>ศุกร์</option>
					  </select>
                    </div>
                  </div>

                  

                  <div class="form-group">
                    <label class="col-lg-2 control-label">ห้องเรียน</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="room_subject" id="room_subject" value="{{$room_subject}}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputPassword" class="col-lg-2 control-label">รายละเอียดรายวิชา</label>
                    <div class="col-lg-10">
                     <textarea rows="5" cols="50" name="detail_subject" id="detail_subject" >{{$detail_subject}}</textarea>
                    </div>
                  </div>


                  <div class="form-group" action=" ">
                    <div class="col-lg-10 col-lg-offset-2">
                      <button type="submit" class="btn btn-primary">Submit</button>
                      <button type="reset" class="btn btn-default">Cancel</button>
                    </div>
                  </div>
                </fieldset>
              </form>
    </div>

@stop