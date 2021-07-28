// JavaScript Document

$(document).ready(function () {
	var article = $('.faq .article');
	article.find('.a').slideUp(100); 
	article.find('i').html('<i class="fas fa-chevron-down"></i>');

	$('.faq .article .trigger').click(function(e){ 
	e.preventDefault();	 
	var myArticle = $(this).parents('.article'); 
	
		if(myArticle.hasClass('hide')){   
			article.find('.a').slideUp(100);
			article.removeClass('show').addClass('hide'); 

			myArticle.removeClass('hide').addClass('show');  
			myArticle.find('.a').fadeIn(200);  
			myArticle.find('i').html('<i class="fas fa-chevron-up"></i>');
		} else {  
		myArticle.removeClass('show').addClass('hide');  
		myArticle.find('.a').fadeOut(200);
		myArticle.find('i').html('<i class="fas fa-chevron-down"></i>');
		}
  });    
  


}); 