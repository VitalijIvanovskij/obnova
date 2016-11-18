jQuery(function($) {
	
	// cкрыть/развернуть форму входа
    $("a>#view_auth").click(function (){
		$(".auth table").slideToggle(200, function(){
			if($("#view_auth").html() == "\u{02c5}") $("#view_auth").html("&#708;");
			else $("#view_auth").html("&#709;");
		});
	});
	
	//  Кнопка наверх
	$(window).scroll(function() { 
		if($(this).scrollTop() != 0)
			$('.toTop').fadeIn();
		else 
			$('.toTop').fadeOut();
		});
 
	$('.toTop').click(function() {
		$('body,html').animate({scrollTop:0},500);
	});
	
	// скрыть/развернуть форму отправки комментария
	$(".add_comment>a").click(function (){
		$(".add_comment form").slideToggle(200, function(){
			 if($(".add_comment>a").html() == "Ответить") {
				 $(".add_comment>a").html("Свернуть");
				 $(".add_comment span").html(" &#171;");
			 }
			 else {
				 $(".add_comment>a").html("Ответить");
				 $(".add_comment span").html(" &#187;");
			 }
		});
	});
	
	//скрыть/развернуть подачу объявления
	$("#add_button button").click(function(){
		$("#add_form").slideToggle(function(){
			if($("#add_button button").html() != "Свернуть")
				$("#add_button button").html("Свернуть");
			else
				$("#add_button button").html("Разместить объявление");
		});
	});
});


 

 