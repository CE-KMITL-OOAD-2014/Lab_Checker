@extends('template')

@section('content')

<div style="margin-left:15px; margin-top:10px;">
<ul class="nav nav-tabs" role="tablist" id="myTab">
  <li class="active"><a href="#detail" role="tab" data-toggle="tab">รายละเอียดรายวิชา</a></li>
  <li><a href="#report" role="tab" data-toggle="tab">รายงานผล</a></li>
  <li><a href="#check" role="tab" data-toggle="tab">เช็คชื่อ</a></li>
  <li><a href="#export" role="tab" data-toggle="tab">Export</a></li>
  

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


  <div class="tab-pane" id="check">
    <div stlye="margin-left:20px; margin-top:20px;">
         <div class="table-responsive margin-top:20px; col-md-10">
          <br>
                    <table class="table table-bordered table-striped table table-hover">
                      <thead>

                                  <tr>
                                      <th><center>data com</center></th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                  </tr>
                                  <tr>

                                    <th name="order"><p align="center">#</p></th>
                                    <th name="namesubject"><p align="center">Lab 1</p></th>
                                    <th name="nstudent"><p align="center">Lab 2</p></th>
                                    <th name="statusUp"><p align="center">Lab 3</p></th>
                                    <th name="statusUp"><p align="center">Lab 4</p></th>
                                    <th name="statusUp"><p align="center">Lab 5</p></th>
                                    <th name="statusUp"><p align="center">Lab 6</p></th>
                                    <th name="statusUp"><p align="center">Lab 7</p></th>
                                  
                                </tr>
                                </thead>
                                <tbody>
                                  <tr >
                                    <td><p align="center">1</p></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                   
                                  </tr>
                                  <tr>
                                    <td><p align="center">2</p></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                   
                                  </tr>
                                  <tr >
                                    <td><p align="center">3</p></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    
                                  </tr>
                                  <tr>
                                    <td><p align="center">4</p></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                   
                                  </tr>
                                  <tr>
                                    <td><p align="center">5</p></td>
                                   <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    
                                  </tr>
                                  <tr>
                                    <td><p align="center">6</p></td>
                                     <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                   
                                  </tr>
                                  <tr>
                                    <td><p align="center">7</p></td>
                                     <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    
                                  </tr>
                                  <tr>
                                    <td><p align="center">8</p></td>
                                     <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                   
                                  </tr>
                                  <tr>
                                    <td><p align="center">9</p></td>
                                     <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    <td><center><input type="checkbox"></center></td>
                                    
                                  </tr>
                                </tbody>
                   </table>
      </div>
    </div>
  </div>

  <div class="tab-pane" id="export">
                 ddsdsd

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