/********************banner图********************************/
var wrap = document.querySelector(".p2_banner");
var middle = document.querySelector(".middle");
var aimgs = document.querySelectorAll(".middle img");
var left = document.querySelector(".p2_banner .left");
var right = document.querySelector(".p2_banner .right");
var timer = null;
var timer2 = null;
var index =0;
var num =0;
var sum =0;

var maxWidth = 966*12;

var l = middle.offsetLeft;
var arr = [];
for (var i=1;i<13;i++) {
	arr.push(-966*i);
}
console.log(arr);
function move(){
	clearInterval(timer);
	timer = setInterval(function(){
		//移动left值
		l-=6;
		if(l == 0 || l == arr[0] || l == arr[1] || l == arr[2] || l == arr[3] || l == arr[4] || l == arr[5] || l == arr[6] || l == arr[7] || l == arr[8] || l == arr[9] || l == arr[10] || l == arr[11]){
			index++;
			if(index>11){
				index = 0;
			}
			console.log(index);
			clearInterval(timer);
			timer2 = setTimeout(move,3500);
		}
		
		if(l<-maxWidth){
			l=0;
		}
		middle.style.left = l +"px";
	},10)
}
timer2 = setTimeout(move,3500);

/*************************鼠标移入清除定时器**************************************/
wrap.onmouseenter = function(){
	clearInterval(timer);
	clearTimeout(timer2);
}
wrap.onmouseleave = function(){
	move();
}

left.onclick = function(){
	num++;
	index--;
	sum+=966;
	console.log(index);	
	if(index<=-1){
		middle.style.left = -11592+966*(-index-1) +"px";	
		l = -11592+966*(-index-1);
	}else{
		middle.style.left = l+sum +"px";	
		l = l+sum;
	}
	sum=0;
}

right.onclick = function(){
	num++;
	index++;
	sum-=966;
	console.log(index);	
	if(index>=11){
		index = index-11;
		middle.style.left = 0-index*966 +"px";	
		l = 0-index*966;
	}else{
		middle.style.left = l+sum +"px";	
		l = l+sum;
	}
	sum=0;
}

/******************************  Tab切换  *********************************/
var cons = document.querySelectorAll(".con");
var lis = document.querySelectorAll(".list li");
var h4s = document.querySelectorAll(".con h4");
var ass = document.querySelectorAll(".box a");

for (var i=0;i<lis.length;i++) {
	lis[i].index = i;
	
	lis[i].onclick = function(){
		for (var j=0;j<lis.length;j++) {
			lis[j].className = "";
			cons[j].style.display = "none";
		}
		
		lis[this.index].className = "active";
		cons[this.index].style.display = "block";
	}
}
for (var i=0;i<ass.length;i++) {
	ass[i].index = i;
	
	ass[i].onmouseenter = function(){
		for (var j=0;j<h4s.length;j++) {
			h4s[j].style.display = "none";
		}
		h4s[this.index].style.display = "block";
	}
	
	ass[i].onmouseleave = function(){
		h4s[this.index].style.display = "none";
	}
}

/**************************热门景点**************************************/
var spots = document.querySelectorAll(".spots_list li");
var spots_h4s = document.querySelectorAll(".spots_list h4");

for (var i=0;i<spots.length;i++) {
	spots[i].index =i;
	
	spots[i].onmouseenter = function(){
		for (var j=0;j<spots_h4s.length;j++) {
			spots_h4s[j].style.display = "none";
		}
		spots_h4s[this.index].style.display = "block";
	}
	spots[i].onmouseleave = function(){
		
		spots_h4s[this.index].style.display = "none";
	}
}




