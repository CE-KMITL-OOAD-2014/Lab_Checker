@extends('template')

@section('content')
<div style="margin-left:15px; margin-top:10px;">
<ul class="nav nav-tabs" role="tablist" id="myTab">
  <li class="active"><a href="#detail" role="tab" data-toggle="tab">รายละเอียดรายวิชา</a></li>
  <li><a href="#report" role="tab" data-toggle="tab">รายงานผล</a></li>

</ul>


<div class="tab-content">
  <div class="tab-pane active" id="detail">
    <br>
        <dl class="dl-horizontal" style="margin-left:10px">
            <dt>ชื่อรายวิชา </dt>
               <dd>555</dd>
            <dt>รหัสวิชา </dt>
               <dd>555</dd>
            <dt>เวลาเรียน</dt>
               <dd>555</dd>
            <dt>วันที่เรียน</dt>
               <dd>555</dd>
            <dt>ห้องเรียน</dt>
               <dd>555</dd>   
            <dt>รายละเอียดรายวิชา</dt>
               <dd>555</dd>   
          </dl>
    
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