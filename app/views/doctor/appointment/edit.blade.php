@extends('layout.doctor')

@section('title')
	<title>Edit Appointment</title>
@endsection

@section('script')
	{{ HTML::script('js/apptform.js') }}
@endsection

@section('content')
	<div class="container">
		<div class="col-md-10 col-md-offset-1">
			<div class="page-header"><h3>Add appointment information</h3></div>

			<form class="form-horizontal"
				  method="POST"
				  action="/saveedit">
				<div class="form-group">
					<label class="col-sm-2 control-label">HN</label>
					<div class="col-sm-10">
						<input class="form-control"
							   value="{{ $hn }}"
							   disabled></input>
					</div>

					<input name="hn" value="{{ $hn }}" style="display:none">
				</div>


				<div class="form-group">
					<label class="col-sm-2 control-label">Firstname</label>
					<div class="col-sm-10">
						<input class="form-control"
							   value="{{ $patient->firstName }}"
							   disabled></input>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label">Lastname</label>
					<div class="col-sm-10">
						<input class="form-control"
							   value="{{ $patient->lastName }}"
							   disabled></input>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label">Datetime</label>
					<div class="col-sm-10">
						<input class="form-control"
							   value="{{ $datetime }}"
							   disabled></input>
					</div>
					<input name="datetime" value="{{ $datetime }}" style="display:none">
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Note</label>
					<div class="col-sm-10">
						<textarea type="text"
								  class="form-control"
								  name="note"
								  rows="6"></textarea>
					</div>
				</div>
				<div class="centercontainer submit">
					<button class="btn btn-primary" type="submit">Save</button>
					<a class="btn btn-default" href="/apptlist">Cancel</a>
				</div>
			</form>
		</div>
	</div>
@endsection
