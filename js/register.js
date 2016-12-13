//************************输入框后面的提示*********************************
var reg_spans=document.getElementsByClassName("reg_span");

var reg_btn=document.getElementById("reg_btn");

var reg_user=document.getElementById("reg_user");
var reg_pass=document.getElementById("reg_pass");
var reg_passAgain=document.getElementById("reg_passAgain");
var reg_phone=document.getElementById("reg_phone");
//************************聚焦失焦事件*********************************
var regUserBol=false;
var regPassBol=false;
var regPassAgainBol=false;
var regPhoneBol=false;

reg_user.onfocus=function(){
	reg_user.style.borderColor="";
	reg_spans[0].style.display="inline";
	reg_spans[0].style.color="black";
}
reg_user.onblur=function(){
	reg_spans[0].style.display="none";
	if(!(/^\w+$/g.test(reg_user.value))){
		if(reg_user.value!=""){
			reg_user.style.borderColor="red";
			 reg_spans[0].style.display="inline";
			 reg_spans[0].innerHTML="输入了非法字符";
			reg_spans[0].style.color="red";
			regUserBol=false;
		}
		
	}else if(reg_user.value.length<4||reg_user.value.length>14){
		reg_user.style.borderColor="red";
		 reg_spans[0].style.display="inline";
		 reg_spans[0].innerHTML="可输入英文、数字、下划线和汉字，至少4个字符，最长14个字符或7个汉字";
		reg_spans[0].style.color="red";
		regUserBol=false;
	} else{
		regUserBol=true;
	}
}
reg_pass.onfocus=function(){
	reg_pass.style.borderColor="";
	reg_spans[1].style.display="inline";
	reg_spans[1].style.color="black";
}
reg_pass.onblur=function(){
	reg_spans[1].style.display="none";
	if(!(/^\w+$/g.test(reg_pass.value))){
			reg_pass.style.borderColor="red";
			 reg_spans[1].style.display="inline";
			 reg_spans[1].innerHTML="输入了非法字符";
			reg_spans[1].style.color="red";
			regPassBol=false;
	}else if(reg_pass.value.length<6){
		reg_pass.style.borderColor="red";
		 reg_spans[1].style.display="inline";
		 reg_spans[1].innerHTML="至少6个字符，可以包含英文、数字、下划线和汉字";
		reg_spans[1].style.color="red";
		regPassBol=false;
	}else{
		regPassBol=true;
	}
}
reg_passAgain.onfocus=function(){
	reg_passAgain.style.borderColor="";
	reg_spans[2].style.display="inline";
	reg_spans[2].style.color="black";
}
reg_passAgain.onblur=function(){
	reg_spans[2].style.display="none";
	if(reg_passAgain.value!=reg_pass.value){
			reg_passAgain.style.borderColor="red";
			 reg_spans[2].style.display="inline";
			 reg_spans[2].innerHTML="密码与密码确认不一致";
			reg_spans[2].style.color="red";
			regPassAgainBol=false;
	}else{
		regPassAgainBol=true;
	}
}
reg_phone.onfocus=function(){
	reg_phone.style.borderColor="";
	reg_spans[3].style.display="inline";
	reg_spans[3].style.color="black";
}
reg_phone.onblur=function(){
	reg_spans[3].style.display="none";
	if(!(/^\d{11}$/.test(reg_phone.value))){
			reg_phone.style.borderColor="red";
			 reg_spans[3].style.display="inline";
			 reg_spans[3].innerHTML="手机号码只能是11位纯数字";
			reg_spans[3].style.color="red";
			regPhoneBol=false;
	}else{
		regPhoneBol=true;
	}
}
reg_btn.onclick=function(){
	if(reg_user.value==""){
		reg_user.style.borderColor="red";
		 reg_spans[0].style.display="inline";
		reg_spans[0].style.color="red";
	}
	if(reg_pass.value==""){
		reg_pass.style.borderColor="red";
		 reg_spans[1].style.display="inline";
		reg_spans[1].style.color="red";
	}
	if(reg_passAgain.value==""){
		reg_passAgain.style.borderColor="red";
		 reg_spans[2].style.display="inline";
		reg_spans[2].style.color="red";
	}
	if(reg_phone.value==""){
		reg_phone.style.borderColor="red";
		 reg_spans[3].style.display="inline";
		reg_spans[3].style.color="red";
	}
}
//************************验证码事件*********************************

