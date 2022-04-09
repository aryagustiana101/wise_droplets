var mqtt;
var reconnectTimeout = 2000;
var host = "test.mosquitto.org";
var port = 8080;

function onFailure(message) {
	$(".indicator-mqtt").removeClass("text-success").addClass("text-danger");
	console.log("Connection Attempt to Host " + host + "Failed");
	setTimeout(MQTTconnect, reconnectTimeout);
}

function onMessageArrived(msg) {
	// out_msg = "Message received " + msg.payloadString + "<br>";
	// out_msg = out_msg + "Message received Topic " + msg.destinationName;
	// console.log(out_msg);
	if (msg.destinationName == "XwcJwm3XVJL4K6eD") {
		if (msg.payloadString != "Test") {
			$(".sensor-main-number").text(msg.payloadString);
			if (msg.payloadString >= 700) {
				$(".soil-status").text("DRY");
			} else {
				$(".soil-status").text("WET");
			}
			ajxMsg = { value_sensor: msg.payloadString };
			$.ajax({
				url: "http://localhost/wise_droplets/module/save_data_soil_moisture_sensor",
				type: "post",
				data: ajxMsg,
				dataType: "json",
				success: function (response) {
					$(".block-nav").text("Nerd");
				},
			});
		}
	}

	if (msg.destinationName == "ECFX0a1XBHn1x2DY") {
		ajxMsg = { value: msg.payloadString };
		$.ajax({
			url: "http://localhost/wise_droplets/module/save_latest_feeding_time",
			type: "post",
			data: ajxMsg,
			dataType: "json",
			success: function (response) {
				// console.log(response);
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
			},
		});
	}

	if (msg.destinationName == "bEOl71W9KreVdpP0") {
		ajxMsg = { value: msg.payloadString };
		$.ajax({
			url: "http://localhost/wise_droplets/module/save_latest_watering_time",
			type: "post",
			data: ajxMsg,
			dataType: "json",
			success: function (response) {
				// console.log(response);
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
			},
		});
	}
}

function onConnect() {
	console.log("Connected ");
	$(".indicator-mqtt").removeClass("text-danger").addClass("text-success");
	mqtt.subscribe("XwcJwm3XVJL4K6eD");
	mqtt.subscribe("ECFX0a1XBHn1x2DY");
	mqtt.subscribe("bEOl71W9KreVdpP0");
	message = new Paho.MQTT.Message("Test");
	message.destinationName = "XwcJwm3XVJL4K6eD";
	message.retained = true;
	mqtt.send(message);
}

function MQTTconnect() {
	console.log("connecting to " + host + " " + port);
	var x = Math.floor(Math.random() * 10000);
	var cname = "orderform-" + x;
	mqtt = new Paho.MQTT.Client(host, port, cname);
	var options = {
		timeout: 3,
		onSuccess: onConnect,
		onFailure: onFailure,
	};
	mqtt.onMessageArrived = onMessageArrived;
	mqtt.connect(options);
}

function sendMSg(valMsg) {
	message = new Paho.MQTT.Message(valMsg);
	message.destinationName = "vtjHUspKORYabDOB";
	message.retained = true;
	mqtt.send(message);
}
