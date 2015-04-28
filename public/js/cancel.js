$(document).ready(function() {
	

	$(".cancel").click(function(event){

		event.preventDefault();
		//console.log($(this).data('docid'));
		var url = '/cancel';
		var doctorid = $(this).data('docid');
		var datetime = $(this).data('datetime');		
		var form = $('<form>', {
			'action': url,
			'method': 'POST'
		}).append($('<input>', {
			'name': 'doctorID',
			'value': doctorid
		})).append($('<input>', {
			'name': 'dateTime',
			'value': datetime
		}));
		form.submit();
	})
});

//<td class="text-center"><button class="btn btn-primary cancel" type="sumbit" data-doctorID="{{ $appointment->doctorID }}" data-datetime="{{$appointment->appt_dateTime}}">Cancel</button></td>
