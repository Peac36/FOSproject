$(document).ready(function(){

	var cover=$('.cover');
	var el=$('.logincover');
	var close=$('.loginclosebutton');

$('#loginbutton').click(function(){
	centering();

	$('.cover').css({'display':'block'});
	//close button function 
	close.click(function(){
		console.log(1);
		cover.css('display','none');
	});
	//centering on resize
$(window).resize(centering)

})

function centering(){
	//taking elements
	
	//taking elements params

	
	var winWidth=el.width();
	var winHeight=el.height();
	var coverWidth=screen.availWidth//cover.width();
	var coverHeight=screen.availHeight//cover.height();
	//calculate middle position for login form
	var middleWidth=(coverWidth/2-winWidth/2);
	var middleHeight=(coverHeight/2-winWidth/2); 
	console.log()
	el.css({'top':middleHeight,'left':middleWidth});
	
	
}
//menu slide 
$('aside ol li').click(function(){
	$(this).next('ul').slideToggle();
});


})

function check()
{

	//var selector=new Array('Email','pass','fname','city','rpass','sname');
	selector=new Array('Email','pass','rpass');
	var values=new Array();
	var errors=new Array();
	//var errselector=new Array('erremail','errpass','errfname','errcity','errrpass','errsname');
	var errselector=new Array('erremail','errpass','errrpass');

	for(var i=0,c=selector.length;i<c;i++){
		var input=$('#'+selector[i]).val();
		$('.'+errselector[i]).html(' ');
		try{
			if(input=='') throw 'The field can not be empty';
			if(input.length<5) throw 'The field must be atleast 5 symbols long';
			if(input.length>32) throw 'The field must be less than  32 symbols long';
			
			if(i==2){
				if(input!=$('#'+selector[1]).val()) throw 'The two password fields must be identical'
			}


		}catch(e){
			errors[i]=e;
			$('.'+errselector[i]).html(e);
		}
		
		
	}
	
	if(errors.length==0){
		return true;
	}
	delete errors; 
	return false;
	


	
}