$(document).ready(function(){
	var themes_selector_w=$('#themes_selector').width();
	var themes_selector_ml=themes_selector_w-34;
	var themes_selector_top=parseInt($('#themes_selector').css('top'));
	var timer=setTimeout(function(){
		$('#themes_selector').stop().animate({marginLeft: '-'+themes_selector_ml+'px'},200,function(){
			$(this).removeClass('opened');
		});
	},1000);
	
	$('#themes_selector').mouseenter(function(){
		if(timer)
		{
			clearTimeout(timer);
			timer=false;
		}
		$('#themes_selector').stop().addClass('opened').animate({marginLeft: '0'},200);
	});
	
	$('#themes_selector').mouseleave(function(){
		$('#themes_selector').stop().animate({marginLeft: '-'+themes_selector_ml+'px'},200,function(){
			$(this).removeClass('opened');
		});
	});
	
	$(document).scroll(function(){
		$('#themes_selector').stop(true).animate({top:($(document).scrollTop()+themes_selector_top)+'px', marginLeft: '-'+themes_selector_ml+'px'},800,function(){
			$(this).removeClass('opened');
		});
	});
});