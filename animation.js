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

});
