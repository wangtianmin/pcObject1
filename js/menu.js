var top_login=document.getElementById("top_login");
var top_register=document.getElementById("top_register");
var top_user=document.getElementById("top_user");
var top_userSpan=document.getElementById("top_userSpan");
var sessionUser=window.sessionStorage.getItem("user");
var localUser=window.localStorage.getItem("user");
if(sessionUser!=null){
    top_user.style.display="block";
    top_userSpan.innerHTML=sessionUser;
    top_login.style.display="none";
    top_register.style.display="none";
}else if(localUser!=null){
    top_user.style.display="block";
    top_userSpan.innerHTML=localUser;
    top_login.style.display="none";
    top_register.style.display="none";
}else{
    top_user.style.display="none";
    top_login.style.display="block";
    top_register.style.display="block";
}
var topList=document.getElementById("topList");
top_user.onmouseenter=function(){
	topList.style.display="block";
}
top_user.onmouseleave=function(){
		topList.style.display="none";
}
var topLis=topList.getElementsByTagName("li");
topLis[0].onclick=function(){
	if(sessionUser!=null){
		window.sessionStorage.removeItem("user");
		window.sessionStorage.removeItem("email");
	}else if(localUser!=null){
		window.localStorage.removeItem("user");
		window.localStorage.removeItem("email");
	}
	top_user.style.display="none";
    top_login.style.display="block";
    top_register.style.display="block";
}
topLis[1].onclick = function(){
	fnAjax({
		url:"topAndBottom/userinfo_handle.php",
		sendType:"post",
		data:{
			act:"getphone",
			user:top_userSpan.innerHTML,
		},
		succFn:function(str){
           window.sessionStorage.setItem("phone",str);
           window.location.href="topAndBottom/userdatabase.html";
		}
	});
}
topLis[2].onclick=function(){
    
	window.location.href="topAndBottom/change_password.html";
}