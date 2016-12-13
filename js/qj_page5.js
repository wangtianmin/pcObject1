
		
		
var theme_btnL=document.querySelector(".theme_leftArrow");
var theme_btnR=document.querySelector(".theme_rightArrow");	
var theme_liderMiddle=document.querySelector(".theme_sliderMiddle");
var theme_bots=document.querySelectorAll(".theme_botNav div");
var theme_boxs=document.querySelectorAll(".theme_mouseOver");
var theme_slider_fuzzy1 =document.querySelector(".theme_slider_fuzzy1");
var theme_slider_fuzzy2 =document.querySelector(".theme_slider_fuzzy2");
var theme_leftArrow =document.querySelector(".theme_leftArrow");
var theme_rightArrow =document.querySelector(".theme_rightArrow");
var theme_slider=document.querySelector(".theme_slider");

var theme_index =2;
var theme_index2 =0;
var theme_timer =null;
var theme_timer2 =null;
var theme_timer3=null;
var maxWidth =964;
var theme_clickBol =true;


theme_slider_fuzzy1.style.width=(window.innerWidth-954)/2+"px";
theme_slider_fuzzy2.style.width=(window.innerWidth-954)/2+"px";
theme_leftArrow.style.left =(window.innerWidth-954)/2+"px";
theme_rightArrow.style.right =(window.innerWidth-954)/2+"px";

function move(){
	clearInterval(theme_timer);
	var theme_start =theme_liderMiddle.offsetLeft;
	var t=0,d=30;
	var change = -(theme_index-2)*964+window.innerWidth/2-theme_start;
	var speed=change/d;

	theme_timer=setInterval(function(){
	t++;
	if(t>=d){
		clearInterval(theme_timer);
		theme_clickBol=true;
	}
	theme_start+=speed;

	
	theme_liderMiddle.style.left=theme_start+"px";
	},30);
}
var onmouseBol=true;
function theme_timer2Fn(){
	if(onmouseBol){
		theme_index++;
		if(theme_index>=6){
			theme_index=1;
			theme_liderMiddle.style.left =964*2+window.innerWidth/2+"px";
		}
		move();	
	}
	
	theme_timer2=setTimeout(theme_timer2Fn,5000);
}
setTimeout(theme_timer2Fn,5000);
theme_slider.onmouseenter=function(){
	onmouseBol=false;
}

theme_slider.onmouseleave=function(){
	onmouseBol=true;
	
}
theme_btnR.onclick=function(){
	if(!theme_clickBol){
		return;
	}
	theme_clickBol=false;
	clearInterval(theme_timer);
	theme_index++;
	if(theme_index>=6){
		theme_index=1;
		theme_liderMiddle.style.left =964*2+window.innerWidth/2+"px";
	}
	move();
}


theme_btnL.onclick=function(){
	if(!theme_clickBol){
		return;
	}
	theme_clickBol=false;
	clearInterval(theme_timer);
	theme_index--;
	if(theme_index<=0){
		theme_index=5;
		theme_liderMiddle.style.left =-3856+window.innerWidth/2+"px";
	}
	move();
	
}

function theme_bottom(){
	for(var j=0;j<theme_bots.length;j++){
		theme_bots[j].style.backgroundColor= "rgba(229,231,226,1)";
		theme_bots[j].style.color="black";
		theme_boxs[j].style.display="none";
	}
}

for(var i =0;i<theme_bots.length;i++){
	theme_bots[i].theme_index2 =i;
	theme_bots[i].onmouseenter=function(){
		clearInterval(theme_timer3);
		theme_bottom();
		this.style.backgroundColor="rgb(46,149,87)";
		theme_boxs[this.theme_index2].style.display ="block";
		theme_index2=this.theme_index2;
	}
	theme_bots[i].onmouseleave=function(){
		theme_timer3Fn();  
	}
}
	
function theme_timer3Fn(){
	theme_timer3=setInterval(function(){
		theme_index2++;
		if(theme_index2>=6){
			theme_index2=0;
		}
		for(var i=0;i<theme_bots.length;i++){
			theme_bottom();
			theme_bots[theme_index2].style.backgroundColor="rgb(46,149,87)";
			theme_boxs[theme_index2].style.display ="block";
		}
	},5000)
}		
theme_timer3Fn()	;		
		
		
		
		
		
		
