@extends('layout.default')

@section('title')
    <title>HospitalQ :: Staff Login</title>
@endsection

@section('content')
    <script>
        $("#submit").onclick(function(){
           if($("#radiodoctor").is(":checked")){
                $('.btn[href="staffq.html"]').attr("href","doctormain.html");
            } else {
                $('.btn[href="doctormain.html"]').attr("href","staffq.html");
            }
         });
    </script>
    <div class="container center-block">
        <center>
            <div class="row btn-group col-md-6 col-md-offset-3" data-toggle="buttons">
                    <label class="btn btn-default col-md-6">
                        <input type="radio" id="radiostaff" name="list" value="1" autocomplete="off" checked="true"><h5>เจ้าหน้าที่ดูแลคิว</h5>
                    </label>
                    <label class="btn btn-default col-md-6">
                        <input type="radio" id="radiodoctor" name="list" value="2" autocomplete="off"><h5>แพทย์</h5>
                    </label>
            </div>
            <div class="col-md-12">
                <form>
                    <div class="row col-md-8  col-md-offset-2">
                        <label class="col-md-3">employee ID</label>
                        <input type="text" class="col-md-5" placeholder="username"/>
                    </div>
                    <div class="row col-md-8   col-md-offset-2">
                        <label class="col-md-3">password</label>
                        <input type="password" class="col-md-5" placeholder="password"/>
                    </div>
                </form>
            </div>
            <div class="row" >
                    <a class="btn btn-lg btn-info col-md-6 col-md-offset-3 col-sm-7 col-sm-offset-2 col-xs-12" id="submit" href="/staffq"><span class="glyphicon glyphicon-log-in"></span> ลงชื่อเข้าใช้</a>
            </div>
        </center>
    </div>
@endsection