$(document).ready(function(){
$('.foot').click(function(){
var short=$(this).parent().find($('.new'));
var full=$(this).parent().find($('.fullnew'));
var stage=short.css('display');
if(stage == 'block'){
	short.hide();
	full.show();
	$(this).html('View Less')
}else{
	full.hide();
	short.show();
	$(this).html('View More')
}

})


})