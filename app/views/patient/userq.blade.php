@extends('layout.default')

@section('title')
    <title>HospitalQ :: Client Interface</title>
@endsection

@section('content')
    <div class="container center-block">
        <div class="row" >
            <a class="btn btn-lg btn-info col-md-6 col-md-offset-3 col-sm-7 col-sm-offset-2 col-xs-12" 
               href="/serviceq"><span class="glyphicon glyphicon-log-in"></span> คิวบริการทางการแพทย์</a>
        </div>
        <br>
        <div class="row" >
            <a class="btn btn-lg btn-success col-md-6 col-md-offset-3 col-sm-7 col-sm-offset-2 col-xs-12" href="" id="future" onclick="changeText()"><span class="glyphicon glyphicon-list-alt"></span> ตารางเวลานัดแพทย์</a>
        </div>
    </div>
    <script>
        function changeText(){
            document.getElementById("future").innerHTML = "Coming Soon!";
        }
    </script>
@endsection