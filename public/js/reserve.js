$(document).ready(function() {
	var appt_button = $('#select-appointment');
	var serv_button = $('#select-service');
	var appt_list = $('#appt-list');
	var serv_list = $('#serv-list');
	appt_button.click(function(event) {
		$(this).toggleClass('active');
		serv_button.toggleClass('active');
		appt_list.show();
		serv_list.hide()
	});
	serv_button.click(function(event) {
		$(this).toggleClass('active');
		appt_button.toggleClass('active');
		appt_list.hide();
		serv_list.show();
	});
});