$(document).ready(function() {
	var allergies_btn = $('#allergies #add');
	var problems_btn = $('#problems #add');
	var allergies_input = $('#allergies');
	var problems_input = $('#problems');

	var allergies_html = '<input type="text" class="form-control" name="allergies[]">';
	var problems_html = '<input type="text" class="form-control" name="problems[]">';

	allergies_btn.click(function() {
		allergies_input.append('<div class="col-sm-9 col-sm-offset-2 extra">'+allergies_html);
		allergies_input.append('<div class="col-sm-1 extra"><a class="btn btn-primary pull-right" id="remove">-</a>');
	});

	problems_btn.click(function() {
		problems_input.append('<div class="col-sm-9 col-sm-offset-2 extra">'+problems_html);
		problems_input.append('<div class="col-sm-1 extra"><a class="btn btn-primary pull-right" id="remove">-</a>');
	});
});