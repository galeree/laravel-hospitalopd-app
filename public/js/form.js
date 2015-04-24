(function() {
	// Telephone regex rules
	/*$.validator.addMethod("tel",function(value,element){
        return this.optional(element) || /[^ ]/i.test(value);
    });*/

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
			username: "required",
			password: "required"
		},
		messages: {
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

	$('#register').validate({
		rules: {
			username: {
				required: true
			},
			password: {
				required: true
			},
			HN: {
				required: true
			},
			firstName: {
				required: true,
			},
			lastName: {
				required: true
			},
			day: {
				required: true,
				digits: true
			},
			month: {
				required: true,
				digits: true
			},
			year: {
				required: true,
				digits: true
			},
			tel: {
				required: true,
				digits: true
				//tel: true
			},
			address: {
				required: true
			}
		},
		messages: {
			username: {
				required: 'Username is required',
			},
			password: {
				required: 'Password is required',
			},
			HN: {
				required: 'HN is required',
			},
			firstName: {
				required: 'Firstname is required'
			},
			lastName: {
				required: 'Lastname is required'
			},
			day: {
				required: 'Day is required',
				digits: 'Please enter a number'
			},
			month: {
				required: 'Month is required',
				digits: 'Please enter a number'
			},
			year: {
				required: 'Year is required',
				digits: 'Please enter a number'
			},
			tel: {
				required: 'Telephone numeber is required',
				digits: 'Please enter a number'
			},
			address: {
				required: 'Address is required'
			}
		}
	});
})();