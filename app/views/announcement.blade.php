  @extends('template')

  @section('content')
      @if (!Auth::guest()) 


  <div style="margin-left:15px; margin-top:10px;">
            <h1>กระทู้ถาม - ตอบ และ ข่าวประกาศ </h1>
            <br>
                <ul class="nav nav-tabs" role="tablist" id="board">
                  <li class="active"><a href="#topic" role="tab" data-toggle="tab">กระทู้</a></li>

                </ul>


         <div class="tab-content">
            <div class="tab-pane active" id="topic">
               <br>
                <div class="col-md-8">
                  <a type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span> New Topic</a>
                </div><br>

               <!--table-->
                <div class="col-md-8 col-md-offset-1">
                  <br>
                      <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th name="order_topic"><center>#</center></th>
                          <th name="name_topic"><center>ชื่อกระทู้</center></th>
                          <th name="namep_topic"><center>ผู้โพสต์</center></th>
                          <th name="timestamp_topic"><center>เวลาที่โพสต์</center></th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr>
                           @for ($i=0;$i<count($announce);$i++)
                          <td><center><p>{{$i+1}}</p></center></th>
                          <td><center><a href="/announcement/{{$announce[$i]->getId_topic()}}">{{$announce[$i]->getTopic()}}</p></center></th>
                          <td><center><a>{{$announce[$i]->getId_user()}}</p></center></th>
                          <td><center><span class="text-muted small"><em>{{$announce[$i]->getTime_An()}}</em>
                                      </span></center></th>
                        </tr> 
                        @endfor
                      </tbody>
                      </table>
                </div>
            </div>
         </div>
        
  </div>

  

  <!-- New Topic -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">สร้างกระทู้ใหม่</h4>
            </div>
              <div class="modal-body">
              
                <form class="form-horizontal" id="addtopic" role="form" method="POST" action="{{url('/newAnnouncement')}}" enctype="multipart/form-data">
                        <fieldset>
                          <div class="form-group">
                            <label for="text" class="col-lg-2 control-label">ชื่อกระทู้</label>
                            <div class="col-lg-10">
                              <input type="text" class="form-control" name="topic" required autofocus>
                            </div>
                          </div>


                          <div class="form-group">
                            <label for="inputPassword" class="col-lg-2 control-label" >รายละเอียด</label>
                            <div class="col-lg-10">
                             <textarea rows="5" cols="50" form="addtopic" name="detail" ></textarea>
                            </div>
                          </div>


                          <div class="form-group" action=" ">
                            <div class="col-lg-10 col-lg-offset-2">
                              <button type="submit"  class="btn btn-primary">Submit</button>
                              <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                            </div>
                          </div>
                        </fieldset>
                   
                      </form>
              </div>
              <div class="modal-footer">
         
             </div>
      </div>
    </div>
  </div>

  <script>
    $(function () {
      $('#myTab a:last').tab('show')
    })
  </script>
@endif
  @stop