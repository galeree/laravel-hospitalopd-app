$(document).ready(function() {
	var appt_button = $('#select-record');
	var req_button = $('#select-request');
	var appt_table = $('#record-list');
	var req_table = $('#req-list');

	var item = $('.reqElem');
	appt_button.click(function() {
		$(this).toggleClass('active');
		req_button.toggleClass('active');
		appt_table.show();
		req_table.hide();
	});

	req_button.click(function() {
		$(this).toggleClass('active');
		appt_button.toggleClass('active');
		req_table.show();
		appt_table.hide();
	});

	item.click(function() {
		var elem = $(this);
		var hn = elem.data('hn');
		var datetime = elem.data('datetime');
		document.location = '/editappt?hn='+hn+'&datetime='+datetime;
	});
});