@extends('template')

@section('content')
<div style="margin-left:15px; margin-top:10px;">
<ul class="nav nav-tabs" role="tablist" id="myTab">
  <li class="active"><a href="#detail" role="tab" data-toggle="tab">รายละเอียดรายวิชา</a></li>
  <li><a href="#check" role="tab" data-toggle="tab">เช็คชื่อ</a></li>
  <li><a href="#export" role="tab" data-toggle="tab">Export</a></li>
  <li><a href="#report" role="tab" data-toggle="tab">รายงานผล</a></li>

</ul>


<div class="tab-content">
  <div class="tab-pane active" id="detail">
    <br>
        <dl class="dl-horizontal" style="margin-left:10px">
            <dt>ชื่อรายวิชา </dt>
               <dd>{{$name_subject}}</dd>
            <dt>รหัสวิชา </dt>
               <dd>{{$id}}</dd>
            <dt>เวลาเรียน</dt>
               <dd>{{$time_subject}}</dd>
            <dt>วันที่เรียน</dt>
               <dd>{{$day_subject}}</dd>
            <dt>ห้องเรียน</dt>
               <dd>{{$room_subject}}</dd>   
            <dt>รายละเอียดรายวิชา</dt>
               <dd>{{$detail_subject}}</dd>   
          </dl>
    
  </div>


  <div class="tab-pane active" id="check">
    <div stlye="margin-left:20px; margin-top:20px;">
     <p> 55555555</p>
    </div>
  </div>

  <div class="tab-pane" id="export">
                 

  </div>
  <div class="tab-pane" id="report">...</div>
  
</div>
			
</div>



<script>
  $(function () {
    $('#myTab a:last').tab('show')
  })
</script>

@stop