@extends('layout.default')

@section('title')
    <title>HospitalQ :: Adding Queue</title>
@endsection

@section('content')
    <div class="container">
        <form method="POST" action="serviceq.php">
            <div class = "row">
                <div class="form-group col-md-6">
                    Name : <input class="form-control" type="text" name="name" size="20" placeholder="กรุณากรอกชื่อ">
                </div>
                <div class="form-group col-md-6">
                    HN number :  <input class="form-control" type="text" name="id" size="20" placeholder="กรุณากรอกเลขที่โรงพยาบาล">
                </div>
            </div>
            <div>Service Type :</div>
            <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-default">
                        <input type="radio" name="list" value="1" autocomplete="off">Xray
                    </label>
                    <label class="btn btn-default">
                        <input type="radio" name="list" value="2" autocomplete="off">Phlebotomy
                    </label>
                    <label class="btn btn-default">
                        <input type="radio" name="list" value="3" autocomplete="off">Radiation
                    </label>
                    <label class="btn btn-default">
                        <input type="radio" name="list" value="4" autocomplete="off">CTScan
                    </label>
                    <label class="btn btn-default">
                        <input type="radio" name="list" value="5" autocomplete="off">BoneScan
                    </label>
            </div>
            <br><br>
            <br><br>
            <div>
                <input class="btn btn-primary" type="submit" value ="Done !">
            </div>
        </form>
    </div>
@endsection