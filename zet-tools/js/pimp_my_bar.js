$(document).ready(function(){
	if ($('.pimp-nav').hasClass("led-slide")) {
		led_slide();
	}
});
function led_slide(){
	var led_widths = [];
	var led_position = 0;
	var led_width = 0;
	$('.led-slide').append("<div class='led-container'><div class='led'</div></div>");

	//--------------- led-active ----------------//
	var led_active = function(){
		$('.led-active').prevAll().each(function(){
		led_widths.push($(this).children().outerWidth());
	});
	for (var i = 0; i < led_widths.length; i++) {
		led_position += led_widths[i];
	};
	if ($('.led-active').data("ledcolor")) {
		var color = $('.led-active').data("ledcolor");
		$(".led").css('background',color);
	};
	led_width = $('.led-active').children().outerWidth()	
	$('.led').css({
			'left':led_position,
			'width':led_width
		});

	led_widths = [];
	}
	led_active();
	//--------------------------------------------//



	$('.led-slide ul li a').hover(function(){
		$(this).css('background','inherit');
	});
	$('.led-slide ul li').hover(function(){
		led_position = 0;
		led_width = 0;
		if ($(this).data("ledcolor")) {
			var color = $(this).data("ledcolor");
			$(".led").css('background',color);
		};
		$(this).prevAll().each(function(){
			led_widths.push($(this).children().outerWidth());
		});
		for (var i = 0; i < led_widths.length; i++) {
			led_position += led_widths[i];
		};
		led_width = $(this).children().outerWidth()			
		$('.led').css({
			'left':led_position,
			'width':led_width
		});
	},function(){
		led_widths = [];
		led_position = 0;
		led_width = 0;
		$('.led').css({
			'left':led_position,
			'width':led_width
		});
		led_active();});
}

