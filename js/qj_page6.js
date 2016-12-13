var bbs_sRImgs=document.querySelectorAll(".bbs_sRImgs");
var bbs_sLImgs=document.querySelectorAll(".bbs_sLImgs");
var bbs_sImgs =document.querySelector(".bbs_sImgs");
var bbs_slider =document.querySelector(".bbs_slider");
var bbs_sliderRight =document.querySelector(".bbs_sliderRight");
var bbs_timer=null;
var bbs_timer1=null;
var bbs_timer2 =null;
var bbs_index =0;
var bbs_sLimgH =bbs_sLImgs[0].offsetHeight;
var bbs_l=0;
var bbs_bol=true;

for(var i=0;i<bbs_sRImgs.length;i++){
	bbs_sRImgs[i].bbs_index =i;
	bbs_sRImgs[i].onmouseover=function(){
		for(var j=0;j<bbs_sRImgs.length;j++){
			bbs_sRImgs[j].style.opacity=0.4;
			bbs_sRImgs[j].style.borderColor="transparent";
		}
		var t=0,d=30;
		var bbs_start=bbs_sImgs.offsetTop;
		var bbs_end =-this.bbs_index*bbs_sLimgH;
		var speed=(bbs_end-bbs_start)/d;
		this.style.opacity=1;
		this.style.borderColor="rgb(204,204,204)";
		
		clearInterval(bbs_timer);
		bbs_timer=setInterval(function(){
			t++;
			if(t>=d){
				clearInterval(bbs_timer);
			}
			bbs_start+=speed;
			bbs_sImgs.style.top =bbs_start+"px";
		},10);
		bbs_index=this.bbs_index;
	}
}



function bbs_timer2Fn(){
	if(bbs_bol){
		bbs_index++;
		if(bbs_index>=4){
			bbs_index=0;
		}
		for(var j=0;j<bbs_sRImgs.length;j++){
			bbs_sRImgs[j].style.opacity=0.4;
			bbs_sRImgs[j].style.borderColor="transparent";
		}
		bbs_sRImgs[bbs_index].style.opacity=1;
		bbs_sRImgs[bbs_index].style.borderColor="rgb(204,204,204)";
		
		var t=0,d=30;
		var bbs_start=bbs_sImgs.offsetTop;
		var bbs_end =-bbs_index*bbs_sLimgH;
		var speed=(bbs_end-bbs_start)/d;
		clearInterval(bbs_timer1);
		bbs_timer1=setInterval(function(){
			t++;
			if(t>=d){
				clearInterval(bbs_timer1);
			}
			bbs_start+=speed;
			bbs_sImgs.style.top =bbs_start+"px";
		},10);
	}
	bbs_timer2=setTimeout(bbs_timer2Fn,3000);
}

setTimeout(bbs_timer2Fn,3000);
bbs_slider.onmouseenter=function(){
	bbs_bol=false;
}

bbs_slider.onmouseleave=function(){    
	bbs_bol=true;		
}
	





var bbs_fenxiang_imgQuan=document.querySelectorAll(".bbs_fenxiang_imgQuan");
var bbs_fenxiang_imgA=document.querySelectorAll(".bbs_fenxiang_imgA");
var bbs_fenxiang_img1=document.querySelector(".bbs_fenxiang_img1");
var bbs_fenxiang_txt=document.querySelectorAll(".bbs_fenxiang_txt");
var bbs_fenxiang_index=0;

for(var i=0;i<bbs_fenxiang_imgQuan.length;i++){
	bbs_fenxiang_imgQuan[i].bbs_fenxiang_index=i;
	bbs_fenxiang_imgQuan[i].onmouseover=function(){
		for(var j=0;j<bbs_fenxiang_imgQuan.length;j++){
			bbs_fenxiang_imgA[j].style.display="none";
			bbs_fenxiang_txt[j].style.display="none";
		}
		bbs_fenxiang_imgA[this.bbs_fenxiang_index].style.display="block";
		bbs_fenxiang_txt[this.bbs_fenxiang_index].style.display="block";
	}
}
//************************贴吧***********************************************
var tieMore=document.getElementById("tieMore");
var fatieBig=document.getElementById("fatieBig");
var tieCha=document.getElementById("tieCha");
var tieba=document.getElementById("tieba");
var tieTable=tieba.getElementsByTagName("table")[0];
var tiebaYeShu=document.getElementById("tiebaYeShu");
var tiebaLeft=document.getElementById("tiebaLeft");
var tiebaRight=document.getElementById("tiebaRight");
var tiebaYe=document.getElementById("tiebaYe");
var tiebaBtn=document.getElementById("tiebaBtn");
var tieCurrentPage=0;
var tieTotalPage=0;

tieMore.onclick=function(){
	tiebaMoreFn();
}
tieCha.onclick=function(){
	fatieBig.style.display="none";
}
tiebaRight.onclick=function(){
	tieCurrentPage++;
	if(tieCurrentPage>=tieTotalPage){
		tieCurrentPage=0;
	}
	tiebaMoreFn();
}
tiebaLeft.onclick=function(){
	tieCurrentPage--;
	if(tieCurrentPage<0){
		tieCurrentPage=tieTotalPage-1;
	}
	tiebaMoreFn();
}
function tiebaMoreFn(){
	fnAjax({
		url:"topAndBottom/userinfo_handle.php",
		sendType:"post",
		data:{
			act:"tiebaMore",
			currentPage:tieCurrentPage
		},
		succFn:function(str){
			tableFn(str);
			//*************删除在此写有效*********************
			removeFn();	
			kanTieFn();
		}
	});
}
//************************封装table重写函数********************************************
function tableFn(str){
	tieTable.innerHTML="";
			var tieObj=JSON.parse(str);
			var tieTr=document.createElement("tr");
			var tieTh1=document.createElement("th");
			tieTh1.innerHTML="阅读";
			tieTr.appendChild(tieTh1);
			var tieTh2=document.createElement("th");
			tieTh2.innerHTML="帖子";
			tieTr.appendChild(tieTh2);
			var tieTh3=document.createElement("th");
			tieTh3.innerHTML="作者";
			tieTr.appendChild(tieTh3);
			var tieTh4=document.createElement("th");
			tieTh4.innerHTML="分享时间";
			tieTr.appendChild(tieTh4);
			var tieTh5=document.createElement("th");
			tieTh5.innerHTML="操作";
			tieTr.appendChild(tieTh5);
			tieTable.appendChild(tieTr);
			for(var i=0;i<tieObj.length;i++){
				var tieTr1=document.createElement("tr");
				var tieTd1=document.createElement("td");
				tieTd1.className="tieCount";
				tieTd1.innerHTML=tieObj[i].readCount;
				tieTr1.appendChild(tieTd1);
				var tieTd2=document.createElement("td");
				tieTd2.className="td2";
				tieTd2.innerHTML="<a class='tietie' href='###'>【<span>"+tieObj[i].type+"</span>】"+tieObj[i].theme+"</a>";
				tieTr1.appendChild(tieTd2);
				var tieTd3=document.createElement("td");
				tieTd3.className="tieUser";
				tieTd3.innerHTML=tieObj[i].author;
				tieTr1.appendChild(tieTd3);
				var tieTd4=document.createElement("td");
				tieTd4.innerHTML=tieObj[i].shareTime;
				tieTr1.appendChild(tieTd4);
				var tieTd5=document.createElement("td");
				tieTd5.innerHTML="<a href='###' data-id='"+tieObj[i].id+"' class='tieCaoZuo'>删除</a>";
				tieTr1.appendChild(tieTd5);
				tieTable.appendChild(tieTr1);
			}
			tieTotalPage=Math.ceil(tieObj[0].record/10);
			var currentYe=tieCurrentPage+1;
			tiebaYeShu.innerHTML="-共有"+tieTotalPage+"页-,现在是第"+currentYe+"页";
			fatieBig.style.display="block";
			
}





tiebaBtn.onclick=function(){
	if(tiebaYe.value!=""){
		if(/^\d+$/.test(tiebaYe.value)){
			if(tiebaYe.value>=1&&tiebaYe.value<=tieTotalPage){
				tieCurrentPage=tiebaYe.value-1;
				tiebaMoreFn();
			}else{
				alert("超出了页码范围");
			}
		}else{
			alert("输入非法字符");
		}
	}
	tiebaYe.value="";
}

//************************删除***********************************************
var shanchus=tieba.getElementsByClassName("tieCaoZuo");
var tieUsers=tieba.getElementsByClassName("tieUser");
var bbs_user=window.sessionStorage.getItem("user")||window.localStorage.getItem("user");
function removeFn(){
	for(var j=0;j<shanchus.length;j++){
	shanchus[j].index=j;
	shanchus[j].onclick=function(){
		if(bbs_user==null){
			alert("请登录好再来操作");
		}else if(bbs_user==tieUsers[this.index].innerHTML){
			var removeId=this.getAttribute("data-id");
			fnAjax({
				url:"topAndBottom/userinfo_handle.php",
				sendType:"post",
				data:{
					act:"removeTie",
					id:removeId,
					currentPage:tieCurrentPage
				},
				succFn:function(str){
					alert("删除成功");
					tableFn(str);
				}
			});
		}else{
			alert("只能删除你自己发的贴，谢谢");
		}
	}
}
}
//************************查看正文,这里用到了改***********************************************
var tieties=tieba.getElementsByClassName("tietie");
var tieCounts=tieba.getElementsByClassName("tieCount");
var kanTie=document.getElementById("kanTie");
var kanTieCha=document.getElementById("kanTieCha");
var kanTieTheme=document.getElementById("kanTieTheme");
var kanTieType=document.getElementById("kanTieType");
var kanTieUser=document.getElementById("kanTieUser");
var kanTieCount=document.getElementById("kanTieCount");
var kanTieContent=document.getElementById("kanTieContent");
function kanTieFn(){
	for(var k=0;k<tieties.length;k++){
	tieties[k].index=k;
	tieties[k].onclick=function(){
		var lookId=shanchus[this.index].getAttribute("data-id");
		var tiecount=Number(tieCounts[this.index].innerHTML)+1;
		tieCounts[this.index].innerHTML=tiecount;
		fnAjax({
			url:"topAndBottom/userinfo_handle.php",
			sendType:"post",
			data:{
				act:"kanTie",
				id:lookId,
				tiecount:tiecount
			},
			succFn:function(str){
				var tieObj=JSON.parse(str);
				kanTieTheme.innerHTML="主题:"+tieObj.theme;
				kanTieType.innerHTML="【"+tieObj.type+"】";
				kanTieUser.innerHTML=tieObj.author+" * 发表于 "+tieObj.shareTime;
				kanTieCount.innerHTML="阅读 "+tieObj.readCount;
				kanTieContent.innerHTML=tieObj.content;
				kanTie.style.display="block";
			}
		});
		
	}
}
kanTieCha.onclick=function(){
	kanTie.style.display="none";
}
}

//************************查看正文,这里用到了改***********************************************
var faTie=document.getElementById("faTie");
var faTieCha=document.getElementById("faTieCha");
var newTie=document.getElementById("newTie");
var faTheme=document.getElementById("faTheme");
var faTypes=document.getElementsByName("faType");
var faText=faTie.getElementsByTagName("textarea")[0];
var faTieBtn=document.getElementById("faTieBtn");
newTie.onclick=function(){
	if(bbs_user==null){
		window.location.href="topAndBottom/login.html";
	}else{
		faTheme.value="";
		faText.value="";
		faTie.style.display="block";
	}

}
faTieCha.onclick=function(){
	faTie.style.display="none";
}
faTieBtn.onclick=function(){
	var typeArr=["原创","转帖","Q&A","建议","其他"];
	var faType1="";
	var nowTime=new Date();
	var year=nowTime.getFullYear();
	var month=nowTime.getMonth()+1;
	var day=nowTime.getDate();
	var hour=nowTime.getHours();
	var minute=nowTime.getMinutes();
	var second=nowTime.getSeconds();
	var faTime=year+"-"+month+"-"+day+" "+hour+":"+minute+":"+second;
	if(faTheme.value==""||faText.value==""){
		alert("请把内容填写完整再提交");
	}else{
		for(var i=0;i<faTypes.length;i++){
			if(faTypes[i].checked==true){
				faType1=typeArr[faTypes[i].getAttribute("value")];
				break;
			}
		}
		fnAjax({
			url:"topAndBottom/userinfo_handle.php",
			sendType:"post",
			data:{
				currentPage:tieCurrentPage,
				act:"faTie",
				user:bbs_user,
				type:faType1,
				theme:faTheme.value,
				shareTime:faTime,
				content:faText.value
			},
			succFn:function(str){
				alert("发表成功");
				faTie.style.display="none";
				tableFn(str);
					//*************删除在此写有效*********************
				removeFn();	
				kanTieFn();
			}
		});
	}
}
var tieType=document.getElementById("tieType");
tieType.onchange=function(){
	var tieTypeArr=["原创","转帖","Q&A","建议","其他","*"];
	var selectType=tieTypeArr[tieType.value];
	fnAjax({
		url:"topAndBottom/userinfo_handle.php",
		sendType:"post",
		data:{
			act:"selectType",
			type:selectType,
			currentPage:tieCurrentPage
		},
		succFn:function(str){
			alert("分类成功");
			tableFn(str);
			removeFn();	
			kanTieFn();
		}
	});
}
