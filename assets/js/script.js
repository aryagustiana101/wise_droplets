$(document).ready(function () {
	$("body").scrollspy({ target: ".navbar" });

	// Home Section Script
	$.ajax({
		url: "http://localhost/wise_droplets/module/get_latest_feeding_time",
		type: "post",
		data: { key: 1 },
		dataType: "json",
		success: function (response) {
			// console.log(response);
			$(".feeding-time-indicator").text(response);
		},
	});

	$.ajax({
		url: "http://localhost/wise_droplets/module/get_latest_watering_time",
		type: "post",
		data: { key: 1 },
		dataType: "json",
		success: function (response) {
			// console.log(response);
			$(".watering-time-indicator").text(response);
		},
	});

	// Control Section Script
	$(".switch-main-pump").on("click", function () {
		valCur = $(this).val();
		if (valCur == "0") {
			$(this).val("1");
			sendMSg("1");
			$(".indicator-switch-main-pump").text("ON");
		} else {
			$(this).val("0");
			sendMSg("0");
			$(".indicator-switch-main-pump").text("OFF");
		}
	});

	$(".btn-fish-feeder").on("click", function () {
		sendMSg("9");
	});

	// History Script
	$(".reload-button").on("click", function () {
		location.reload(true);
	});

	// DataTable Script
	var table = $("#table_main").DataTable({
		lengthChange: false,
		buttons: ["excel", "pdf"],
	});
	table.buttons().container().appendTo("#table_main_wrapper .col-md-6:eq(0)");
	var table = $("#table_second").DataTable({
		lengthChange: false,
		buttons: ["excel", "pdf"],
	});
	table.buttons().container().appendTo("#table_second_wrapper .col-md-6:eq(0)");
	var table = $("#table_third").DataTable({
		lengthChange: false,
		buttons: ["excel", "pdf"],
	});
	table.buttons().container().appendTo("#table_third_wrapper .col-md-6:eq(0)");
});
