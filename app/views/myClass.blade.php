@extends('template')

@section('content')
<div style="margin-left:15px; margin-top:10px;">
<ul class="nav nav-tabs" role="tablist" id="myTab">
  <li class="active"><a href="#check" role="tab" data-toggle="tab">เช็คชื่อ</a></li>
  <li><a href="#export" role="tab" data-toggle="tab">Export</a></li>
  <li><a href="#report" role="tab" data-toggle="tab">รายงานผล</a></li>
</ul>

<div class="tab-content">
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