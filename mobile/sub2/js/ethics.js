// JavaScript Document

$(document).ready(function () {
	var article = $('.eth_open .article');
	article.find('.a').slideUp(100); 
	article.find('span').html('<i class="fas fa-chevron-down"></i>');

	$('.eth_open .article .trigger').click(function(e){ 
	e.preventDefault();	 
	var myArticle = $(this).parents('.article'); 
	
		if(myArticle.hasClass('hide')){   
			article.find('.a').slideUp(100);
			article.removeClass('show').addClass('hide'); 

			myArticle.removeClass('hide').addClass('show');  
			myArticle.find('.a').slideDown(200);  
			myArticle.find('span').html('<i class="fas fa-chevron-up"></i>');
		} else {  
		myArticle.removeClass('show').addClass('hide');  
		myArticle.find('.a').slideUp(200);
		myArticle.find('span').html('<i class="fas fa-chevron-down"></i>');
		}
  });    
  


}); 

