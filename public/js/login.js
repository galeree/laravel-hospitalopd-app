// Login controller

$(document).ready(function(){
	var doctor_form = $('#doctor');
	var doctor_button = $('#select-doctor');
	var patient_form = $('#patient');
	var patient_button = $('#select-patient');
	doctor_form.hide();
	patient_button.click(function(event) {
		$(this).toggleClass('active');
		doctor_button.toggleClass('active');
		doctor_form.hide();
		patient_form.show()
	});
	doctor_button.click(function(event) {
		$(this).toggleClass('active');
		patient_button.toggleClass('active');
		patient_form.hide();
		doctor_form.show();
	});

	$('form').submit(function(event) {
		var role = '';
		if(doctor_button.hasClass('active')) role = 'doctor';
		else role = 'patient';

		$('<input />').attr('type', 'hidden')
			          .attr('name', "role")
			          .attr('value', role)
			          .appendTo(this);
		return true;
	});
});