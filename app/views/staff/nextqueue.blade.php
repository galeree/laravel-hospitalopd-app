@extends('layout.default')

@section('title')
    <title>HospitalQ :: Next Queue</title>
@endsection

@section('content')
    <script>
        function changeText(val,name){
            document.getElementById("replace"+val).innerHTML = name;
        }
    </script>

    <div class="container center-block">
            <div class="row" >
                <a class="btn btn-lg btn-info col-md-6 col-md-offset-3 col-sm-7 col-sm-offset-2 col-xs-12" href="nextq_xray.php"><span class="glyphicon glyphicon-log-out"></span>  คิว X-Ray</a>
            </div>
            <div class="row" >
                <a class="btn btn-lg btn-info col-md-6 col-md-offset-3 col-sm-7 col-sm-offset-2 col-xs-12" href="" id="replace1" onclick="changeText(1,'คิวเจาะเลือดก็เช่นกัน')"><span class="glyphicon glyphicon-log-out"></span>  คิวเจาะเลือด</a>
            </div>
            <div class="row" >
                <a class="btn btn-lg btn-info col-md-6 col-md-offset-3 col-sm-7 col-sm-offset-2 col-xs-12" href="" id="replace2" onclick="changeText(2,'คิวเคมีบำบัดก็เช่นกัน')"><span class="glyphicon glyphicon-log-out"></span>  คิวเคมีบำบัด</a>
            </div>
            <div class="row" >
                <a class="btn btn-lg btn-info col-md-6 col-md-offset-3 col-sm-7 col-sm-offset-2 col-xs-12" href="" id="replace3" onclick="changeText(3,'คิว CT-Scan ก็เช่นกัน')"><span class="glyphicon glyphicon-log-out"></span>  คิว CT-Scan</a>
            </div>
            <div class="row" >
                <a class="btn btn-lg btn-info col-md-6 col-md-offset-3 col-sm-7 col-sm-offset-2 col-xs-12" href="" id="replace4" onclick="changeText(4,'คิว Bone Scan ก็เช่นกัน')"><span class="glyphicon glyphicon-log-out"></span>  คิว Bone Scan</a>
            </div>
        <br/>
    </div>
@endsection