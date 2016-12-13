                                                                                                                              var imgs = document.querySelectorAll(".p1_list1 img");
var list = document.querySelector(".p1_list1");
var lis = document.querySelectorAll(".p1_list2 li");
var wrap = document.querySelector(".p1_banner").offsetWidth;
var timer =null;
var enterBol = false;
var index = 0;

/**********************首页banner图*********************************/
timer = setInterval(move,3000);

function move(){
	if(enterBol){
		return;
	}
	index++;
	if(index>imgs.length-1){
		index = 0;
	}
	list.style.left = -wrap*index+"px";
	
	for(var i=0;i<lis.length;i++){
		lis[i].index = i;
		lis[i].className = "";
		lis[i].onmouseenter = function(){
			for(var j = 0; j < lis.length; j ++){
				lis[j].className = "";
			}
			enterBol = true;
			lis[this.index].className = "active";
			list.style.left = -wrap*this.index+"px";
			index = this.index;
		}
		
		lis[i].onmouseleave = function(){
			enterBol = false;
		}
	}
	lis[index].className = "active";
}

/*********************新闻滚动********************************/
var news_list = document.querySelector(".roll_news .news_list");
var timer2 = null;
var num = 0;
timer2 = setInterval(function(){
	num+=160;
	if(num>480){
		num=0;
	}
	news_list.style.top = -num+"px";
},4000)

/**********************主题之旅****************************/
var last = document.querySelector(".last");
var next = document.querySelector(".next");
var list2 = document.querySelector(".p1_theme .middle .list");
var num2 = 1;
var timer3 = null;
last.onclick = function(){
	num2--;
	if (num2 <0) {
		num2 = 1;
		list2.style.left = -1760+"px";
	}
	move2()
}
next.onclick = function(){
	num2++;
	if (num2 > 2) {
		num2 = 1;
		list2.style.left = "0px";
	}
	move2();
}

function move2(){
	var start = list2.offsetLeft;//起点
	var end = -num2*880;//终点
	var change = end - start;
	timer3 = setInterval(function(){
		if (change < 0) {
			//按的是右边的键
			start-=10;
			if (start <= end) {
				clearInterval(timer3);
			}
		}
		else if (change > 0) {
			//按的是左边边的键
			start += 10;
			if (start >= end) {
				clearInterval(timer3);
			}
		}
		
		list2.style.left = start+"px";
	},10)
}



/**************************会员发表******************************/
var huiyuanPublish=document.getElementById("publish2");
var huiyuanText=document.getElementById("huiyuanText");
var liuyanList=document.getElementById("problem_list");
huiyuanPublish.onclick=function(){
	var homeSession=window.sessionStorage.getItem("user");
	var homeLocal=window.localStorage.getItem("user");
	if(huiyuanText.value==""){
		alert("您还没留言，请留言，谢谢");
	}else if(homeLocal==null&&homeSession==null){
		alert("请登录好用户名再来留言，谢谢");
	}else{
		var homeUser=homeLocal||homeSession;
		var message=huiyuanText.value;
		var nowTime=new Date();
		var year=nowTime.getFullYear();
		var month=nowTime.getMonth()+1;
		var day=nowTime.getDate();
		var hour=nowTime.getHours();
		var minute=nowTime.getMinutes();
		var second=nowTime.getSeconds();
		var time=year+"-"+month+"-"+day+" "+hour+":"+minute+":"+second;
		fnAjax({
			url:"topAndBottom/userinfo_handle.php",
			sendType:"post",
			data:{
				act:"messageBoard",
				user:homeUser,
				message:message,
				time1:time
			},
			succFn:function(str){
				alert("发表成功");
				liuyanList.innerHTML="";
				var homeObj=JSON.parse(str);
				for(var i=0;i<homeObj.length;i++){
					var liObj=document.createElement("li");
					var spanObj=document.createElement("span");
					spanObj.innerHTML=homeObj[i].user+":";
					liObj.appendChild(spanObj);
					var aObj=document.createElement("a");
					aObj.href="###";
					aObj.innerHTML=homeObj[i].message;
					liObj.appendChild(aObj);
					liuyanList.appendChild(liObj);
				}
				huiyuanText.value="";
			}
		});
	}
}
/**************************查看全部******************************/
var cha=document.getElementById("cha");
var liuyanban=document.getElementById("liuyanban");
var liuyanList1=document.getElementById("liuyanList1");
var zonggong=document.getElementById("zonggong");
var lookAll=document.getElementById("lookAll");
var liuyanPre=document.getElementById("liuyanPre");
var liuyanNext=document.getElementById("liuyanNext");
var yemianText=document.getElementById("yemianText");
var yemianBtn=document.getElementById("yemianBtn");
var totalPage=0;
var currentPage=0;
lookAll.onclick=function(){
	messageBoardFn()
}
cha.onclick=function(){
	liuyanban.style.display="none";
}
liuyanNext.onclick=function(){
	currentPage++;
	if(currentPage>=totalPage){
		currentPage=0;
	}
	messageBoardFn()	;
}
liuyanPre.onclick=function(){
	currentPage--;
	if(currentPage<0){
		currentPage=totalPage-1;
	}
	messageBoardFn()	;
}
yemianBtn.onclick=function(){
	if(yemianText.value==""){
		return;
	}else if(/^\d+$/.test(yemianText.value)){
		if(yemianText.value>=1&&yemianText.value<=totalPage){
			currentPage=yemianText.value-1;
			messageBoardFn();
		}else{
			alert("页数不对");
		}
	}else{
		alert("你输入了非法字符");
		return;
	}
}

function messageBoardFn(){
		fnAjax({
		url:"topAndBottom/userinfo_handle.php",
		sendType:"post",
		data:{
			act:"lookAll",
			currentPage:currentPage
		},
		succFn:function(str){
				liuyanList1.innerHTML="";
				var homeObj=JSON.parse(str);
				for(var i=0;i<homeObj.length;i++){
					var liObj=document.createElement("li");
					var pObj1=document.createElement("p");
					pObj1.innerHTML=homeObj[i].user+":";
					liObj.appendChild(pObj1);
					var aObj=document.createElement("a");
					aObj.href="###";
					aObj.innerHTML=homeObj[i].message;
					liObj.appendChild(aObj);
					var pObj2=document.createElement("p");
					pObj2.innerHTML=homeObj[i].time;
					liObj.appendChild(pObj2);
					liuyanList1.appendChild(liObj);
				}
			totalPage=Math.ceil(homeObj[0].record/5);
			var currentYe=currentPage+1;
			zonggong.innerHTML="-共有"+totalPage+"页-,现在是第"+currentYe+"页";
			liuyanban.style.display="block";
		}
	});
}
/**************************游客发表******************************/
var youkepublish=document.getElementById("publish1");
youkepublish.onclick=function(){
	alert("请登录后在会员登录界面发表信息，谢谢");
}
