$(document).ready(function() {
	$("#buttonForward").click(function () {
		$.getJSON('ajax/forward.php');
	});
	$("#buttonLeft").click(function () {
		$.getJSON('ajax/left.php');
	});
	$("#buttonRight").click(function () {
		$.getJSON('ajax/right.php');
	});
	$("#buttonBackward").click(function () {
		$.getJSON('ajax/backward.php');
	});
});
