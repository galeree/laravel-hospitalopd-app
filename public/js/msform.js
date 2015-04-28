$(document).ready(function() {
	//jQuery time
	var current_fs, next_fs, previous_fs; //fieldsets
	var left, opacity, scale; //fieldset properties which we will animate
	var animating; //flag to prevent quick multi-click glitches

	function getDoctor() {
		var dept = $("select[name='department']").val();
		$.getJSON("/doclist?dept=" + dept, function(data){
	        var template = $.trim( $('#doctortemplate').html() );
	        var frag = '<select name="doctor">';
	        $.each(data,function(index,obj) {
	        	var temp = template.replace( /{docname}/ig, obj.firstName + ' ' + obj.lastName)
	        					   .replace( /{id}/ig, obj.doctorID);
				var start = temp.search('<option');
				var end = temp.search('</select>');
				temp = $.trim( temp.substring(start,end));
	        	frag += temp;
	        });
	        $('select[name=doctor]').remove();
	        $(frag+'</select>').insertAfter('[data-step="2"] #hasAfter');
	    });
	}

	function getSchedule() {
		var doctor = $("select[name=doctor]").find(':selected').data('id');
		$.getJSON("/schedulelist?doctor=" + doctor, function(data) {
			var template = $.trim( $('#scheduletemplate').html() );
			var frag = '<select name="schedule">';
			$.each(data, function(index, obj) {
				var date_dis = obj.day.split(" ")[0];
				var start_dis = obj.startTime.split(':')[0]+':'+obj.startTime.split(':')[1];
				var end_dis = obj.endTime.split(':')[0]+':'+obj.endTime.split(':')[1];
				var temp = template.replace( /{date_dis}/ig, date_dis)
								   .replace( /{start_dis}/ig, start_dis)
								   .replace( /{end_dis}/ig, end_dis)
								   .replace( /{date}/ig, obj.day)
								   .replace( /{start}/ig, obj.startTime)
								   .replace( /{end}/ig, obj.endTime);
				var start = temp.search('<option');
				var end = temp.search('</select>');
				temp = $.trim( temp.substring(start,end));
				frag += temp;
			});
			$('select[name="schedule"').remove();
			$(frag+'</select>').insertAfter('[data-step="3"] #hasAfter');
		});
	}

	$(".next").click(function(){
		if(animating) return false;
		animating = true;
		
		current_fs = $(this).parent();
		next_fs = $(this).parent().next();
		
		//activate next step on progressbar using the index of next_fs
		$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
		
		//show the next fieldset
		var step = next_fs.data('step');
		if(step == 2) {
			getDoctor();
		}else if(step ==3) {
			getSchedule();
		}
		next_fs.show(); 
		//hide the current fieldset with style
		current_fs.animate({opacity: 0}, {
			step: function(now, mx) {
				//as the opacity of current_fs reduces to 0 - stored in "now"
				//1. scale current_fs down to 80%
				scale = 1 - (1 - now) * 0.2;
				//2. bring next_fs from the right(50%)
				left = (now * 50)+"%";
				//3. increase opacity of next_fs to 1 as it moves in
				opacity = 1 - now;
				current_fs.css({'transform': 'scale('+scale+')'});
				next_fs.css({'left': left, 'opacity': opacity});
			}, 
			duration: 800, 
			complete: function(){
				current_fs.hide();
				animating = false;
			}, 
			//this comes from the custom easing plugin
			easing: 'easeInOutBack'
		});
	});

	$(".previous").click(function(){
		if(animating) return false;
		animating = true;
		
		current_fs = $(this).parent();
		previous_fs = $(this).parent().prev();
		
		//de-activate current step on progressbar
		$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
		
		//show the previous fieldset
		var step = previous_fs.data('step');
		if(step == 2) {
			getDoctor();
		} else if(step ==3) {
			getSchedule();
		}
		previous_fs.show(); 
		//hide the current fieldset with style
		current_fs.animate({opacity: 0}, {
			step: function(now, mx) {
				//as the opacity of current_fs reduces to 0 - stored in "now"
				//1. scale previous_fs from 80% to 100%
				scale = 0.8 + (1 - now) * 0.2;
				//2. take current_fs to the right(50%) - from 0%
				left = ((1-now) * 50)+"%";
				//3. increase opacity of previous_fs to 1 as it moves in
				opacity = 1 - now;
				current_fs.css({'left': left});
				previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
			}, 
			duration: 800, 
			complete: function(){
				current_fs.hide();
				animating = false;
			}, 
			//this comes from the custom easing plugin
			easing: 'easeInOutBack'
		});
	});

	$(".submit").click(function(event){
		event.preventDefault();
		var url = '/saveapp';
		var department = $("select[name='department']").val();
		var doctor = $("select[name=doctor]").find(':selected').data('id');
		var date = $("select[name=schedule]").find(':selected').data('date');
		var start = $("select[name=schedule]").find(':selected').data('start');
		var end = $("select[name=schedule]").find(':selected').data('end');
		var form = $('<form>', {
			'action': url,
			'method': 'POST'
		}).append($('<input>', {
			'name': 'department',
			'value': department
		})).append($('<input>', {
			'name': 'doctor',
			'value': doctor
		})).append($('<input>', {
			'name': 'date',
			'value': date
		})).append($('<input>', {
			'name': 'start',
			'value': start
		})).append($('<input>', {
			'name': 'end',
			'value': end
		}));
		form.submit();
	})
});
