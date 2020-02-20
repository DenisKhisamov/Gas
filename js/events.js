

var events_timer = setInterval(function () {
	check_new_events();
},1000);


var check_new_events_in_proccess = false;
function check_new_events() {
	if (check_new_events_in_proccess) {
		return;
	}
	check_new_events_in_proccess = true;

	$.ajax({
		url:'',
		method: 'post',
		dataType: 'text',
		data: {
			module: 'Sos',
			action: 'getEvents',
			ajax: 'true'
		},
		success: function (result) {
			CoreJs.ajax.after(false, 'Sos_getEvents', result);
		}
	});

	check_new_events_in_proccess = false;
}