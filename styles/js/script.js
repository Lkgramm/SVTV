var page = $('#page').text();
/*
$('#'+page.toString()).css("background-color","#b6c0d7");
$('#'+page.toString()).css("border-radius", "15px");
$('#'+page.toString()).css("color", "white");
/**/
$('.nav_butt').css("border","none");
$('#'+page.toString()).css("border-left","solid");
$('#'+page.toString()).css("border-width", "5px");
$('#'+page.toString()).css("border-color", "#7630e5");

console.log(page);



/*var flag = 0;
$('.test_variant').on('click', function() {
	var clickId = $(this).attr('id');
	
	if(flag != 1){
		// действия, которые будут выполнены при наступлении события...
		var variant = $(this).text();
		var answer = $('.right_answer').text();
		if(clickId == answer){
			console.log('right');
			$('.test_variant').css("border","solid");
			$('.test_variant').css("border-color", "#d9a3a3");
			$('.test_variant').css("color", "#2a3744");
			$('.test_variant').css("background-color","#b6c0d7");
			
			$(this).css("background-color","rgb(115 195 162)");
			$(this).css("border-color","rgb(115 195 162)");
		}else{
			
			$('.test_variant').css("border","solid");
			$('.test_variant').css("border-color", "#d9a3a3");
			$('.test_variant').css("color", "#2a3744");
			$('.test_variant').css("background-color","#b6c0d7");
			
			
			$(this).css("background-color","#d9a3a3");
			$(this).css("border-color", "#d9a3a3");
			
			$('#'+answer.toString()).css("border","solid");
			$('#'+answer.toString()).css("border-color", "rgb(115 195 162)");
			//$('.test_variant').css("color", "#2a3744");
			//$('.test_variant').css("background-color","#b6c0d7");
		}
		flag = 1;
	}else{
		location.reload();
	}
});	*/
	