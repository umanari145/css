$(function(){

	changingSize();

	function changingSize(){
		$('#animating').delay(1000).animate({
			'width':'100px'
		},5000,function(){
			$(this).css('width','10px');
			changingSize();
		});
	}

	$(window).scroll(function(){
		//画像の絶対的な位置
		var imgPos = $('.detect_button').offset().top;
		//スクロール量
		var scrollRyou = $(window).scrollTop();
		if (scrollRyou > imgPos -200) {
			$('.detect_scroll_button_inner').css({
				'width':'100px'
			});
		} else {
			$('.detect_scroll_button_inner').css({
				'width':'0'
			});
		}
	});

	$(window).scroll(function(){
		//画像の絶対的な位置
		var block2_pos = $('.block2').offset().top;
		//スクロール量
		var scrollRyou = $(window).scrollTop();
		var css_prop = $('.block2').css('transform');
		if (scrollRyou > block2_pos -200) {

		} else {

		}
	});

});
