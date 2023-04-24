<!DOCTYPE html>
<html>
<head>
	<title>Stopwatch</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script>
		var startTime = 0;
		var start = 0;
		var end = 0;
		var diff = 0;
		var timerID = 0;

		function startTimer() {
			startTime = new Date();
			timerID = setInterval(function() {
				var currentTime = new Date();
				diff = currentTime - startTime;
				diff = new Date(diff);
				var msec = diff.getMilliseconds();
				var sec = diff.getSeconds();
				var min = diff.getMinutes();
				var hr = diff.getHours()-1;
				if (min < 10) {
					min = "0" + min;
				}
				if (sec < 10) {
					sec = "0" + sec;
				}
				if (msec < 10) {
					msec = "00" + msec;
				}
				else if (msec < 100) {
					msec = "0" + msec;
				}
				document.getElementById("timer").innerHTML = hr + ":" + min + ":" + sec + ":" + msec;
			}, 10);
		}

		function stopTimer() {
			clearInterval(timerID);
		}

		function resetTimer() {
			clearInterval(timerID);
			document.getElementById("timer").innerHTML = "0:00:00:000";
		}
	</script>
</head>
<body>
	<div class="container mt-5">
		<h1 class="d-flex justify-content-center">Stopwatch</h1>
		<div class="row justify-content-center">
			<div class="col-lg-4 col-md-6 col-sm-12 text-center">
				<div id="timer" class="display-4 mb-3">0:00:00:000</div>
				<button class="btn btn-primary mr-3" onclick="startTimer()">Start</button>
				<button class="btn btn-danger mr-3" onclick="stopTimer()">Stop</button>
				<button class="btn btn-warning" onclick="resetTimer()">Reset</button>
			</div>
		</div>
	</div>
</body>
</html>
