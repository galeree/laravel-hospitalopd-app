(function() {
	console.log('test');
	$.validator.setDefaults({
	    highlight: function(element) {
	        $(element).closest('.form-group').addClass('has-error');
	    },
	    unhighlight: function(element) {
	        $(element).closest('.form-group').removeClass('has-error');
	        $(element).closest('.form-group').addClass('has-success');
	    },
	    errorElement: 'span',
	    errorClass: 'help-block',
	    errorPlacement: function(error, element) {
	        if(element.parent('.input-group').length) {
	            error.insertAfter(element.parent());
	        } else {
	            error.insertAfter(element);
	        }
	    }
	});

	$('#patient').validate({
		rules: {
			HN: "required",
			username: "required",
			password: "required"
		},
		messages: {
			HN: "HN is required",
			username: "Username is required",
			password: "Password is required"
		},
		submitHandler: function(form) {
            form.submit();
        }
	});

	$('#doctor').validate({
		rules: {
			doctorID: "required"
		},
		messages: {
			doctorID: "DoctorID is required"
		},
		submitHandler: function(form) {
			form.submit();
		}
	});
})();