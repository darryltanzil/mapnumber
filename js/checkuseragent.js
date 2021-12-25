$(function() {
	
	// 400 is the smallest my chrome page can go
	// check the window width
	if ($(window).width() <= 700) {
		$("[type=text], [type=email]").css("width", "100%");
	}
	else {
		$("[type=text], [type=email]").css("width", "350px");
	}
});