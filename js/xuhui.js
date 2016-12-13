//.....................第三页banner图切换..................
 var page3_banner = document.querySelector(".page3_banner");
	var imgs = document.querySelectorAll(".page3_banner img");
//console.log(page3_banner)
	var last = document.querySelector(".last");
	var next = document.querySelector(".next");
	var timer = null;
	var accord = null;
	var page3_wrap = document.querySelector(".page3_wrap");
	page3_banner.style.width = (imgs.length+1)*(imgs[0].offsetWidth+5)+"px";
	
	function move(){
		var t = 0;//循环计数
		var d = 30;//总的循环次数
		var start = page3_banner.offsetLeft;//起点，初始改变的middle的left值
//		console.log(start);
		var end = -(index-1)*(imgs[0].offsetWidth+5);//终点，是改变之后middle的	left值
		var change = end-start;//middle的left值的改变量
		var speed =change/d;
		clearInterval(timer);
		console.log(change);
		timer = setInterval(function(){
			t++;//开始计数
			if(t>=d){
				//循环结束
				clearInterval(timer);
			}
			start+=speed;
			
			page3_banner.style.left = start+"px";//每次middle的left值的设置
		}, 30);
	}
	


var index=1;
last.onclick = function(){
	clearInterval(accord);
	index--;
	if (index<=0) {
		index=imgs.length-4;
		page3_banner.style.left=-(3)*(imgs[0].offsetWidth+5)+"px";
	}
	console.log(index)
	move();
}
//last.onmouseenter = function(){
//	clearInterval(accord);
//}
//last.onmouseleave = function(){
//	img();
//}

var zidongBol=true;
page3_wrap.onmouseenter = function(){
	zidongBol=false;
}
page3_wrap.onmouseleave = function(){
	zidongBol=true;
}
var zidongTimer=null;
function xuHuizidong(){
	if(zidongBol){
		index++;
		if (index>=imgs.length-3){
			index=1;
			page3_banner.style.left=965+"px";
		}
		
		move();
	}
	
	zidongTimer=setTimeout(xuHuizidong,5000);
}
setTimeout(xuHuizidong,5000);

next.onclick = function(){
	clearInterval(accord);
	index++;
	if (index>=imgs.length-3){
		index=1;
		page3_banner.style.left=965+"px";
	}
	
	move();
}


