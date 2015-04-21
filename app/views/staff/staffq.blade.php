@extends('layout.default')

@section('title')
  <title>HospitalQ :: Officer Interface</title>
@endsection

@section('content')
  <div class="container center-block">
            <div class="row" >
                <a class="btn btn-lg btn-info col-md-6 col-md-offset-3 col-sm-7 col-sm-offset-2 col-xs-12" 
                  href="/nextq">
                  <span class="glyphicon glyphicon-triangle-right"></span> เรียกคิวถัดไป
                </a>
            </div>
        <br>
            <div class="row" >
                <a class="btn btn-lg btn-info col-md-6 col-md-offset-3 col-sm-7 col-sm-offset-2 col-xs-12" 
                   href="/showq">
                   <span class="glyphicon glyphicon-eye-open"></span> แสดงคิวทั้งหมด
                </a>
            </div>
    </div>
@endsection