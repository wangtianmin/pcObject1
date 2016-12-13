var page7_main_left = document.querySelector(".page7_main_left");
var page7_about_ul = document.querySelector(".page7_about_ul");
var page7_about_lis = document.querySelectorAll(".page7_about_ul li a");
var page7_main_middle_top = document.querySelector(".page7_main_middle_top");
var h = document.querySelector(".page7_main_middle_top h1");
var page7_about_content = document.querySelector(".page7_about_content");
var page7_connect_content = document.querySelector(".page7_connect_content");
var page7_advertis_content = document.querySelector(".page7_advertis_content");
var page7_friend_content = document.querySelector(".page7_friend_content");
var page7_protect_content = document.querySelector(".page7_protect_content");
var page7_user_content = document.querySelector(".page7_user_content");
var page7_copyright_content = document.querySelector(".page7_copyright_content");


for (var i = 0; i <page7_about_lis.length; i++) {
	page7_about_lis[i].onclick=function(){
		for (var i = 0; i<page7_about_lis.length; i++) {
			h.innerHTML="";
		}
		h.innerHTML=this.innerHTML;
		if (this.innerHTML=="关于我们") {
			page7_about_content.style.display="block";		page7_connect_content.style.display="none";
			page7_advertis_content.style.display="none";
			page7_friend_content.style.display="none";
			page7_protect_content.style.display="none";
			page7_user_content.style.display="none";
			page7_copyright_content.style.display="none";
		}
		if (this.innerHTML=="联系我们") {
			page7_about_content.style.display="none";
	page7_connect_content.style.display="block";
	page7_advertis_content.style.display="none";
	page7_friend_content.style.display="none";
	page7_protect_content.style.display="none";
	page7_user_content.style.display="none";
	page7_copyright_content.style.display="none";
		}
		if (this.innerHTML=="诚聘英才") {
			page7_about_content.style.display="none";		page7_connect_content.style.display="none";
			page7_advertis_content.style.display="block";
			page7_friend_content.style.display="none";
			page7_protect_content.style.display="none";
			page7_user_content.style.display="none";
			page7_copyright_content.style.display="none";
		}
		if (this.innerHTML=="合作伙伴") {
			page7_friend_content.style.display="block";
			page7_about_content.style.display="none";		page7_connect_content.style.display="none";
			page7_advertis_content.style.display="none";
			page7_protect_content.style.display="none";
			page7_user_content.style.display="none";
			page7_copyright_content.style.display="none";
		}
		if (this.innerHTML=="隐私保护") {
			page7_friend_content.style.display="none";
			page7_about_content.style.display="none";		page7_connect_content.style.display="none";
				page7_advertis_content.style.display="none";
				page7_protect_content.style.display="block";
				page7_user_content.style.display="none";
				page7_copyright_content.style.display="none";
		}
		if (this.innerHTML=="用户协议") {
			page7_friend_content.style.display="none";
			page7_about_content.style.display="none";		page7_connect_content.style.display="none";
				page7_advertis_content.style.display="none";
				page7_protect_content.style.display="none";
				page7_user_content.style.display="block";
				page7_copyright_content.style.display="none";
		}
		if (this.innerHTML=="版权声明") {
			page7_copyright_content.style.display="block";
			page7_friend_content.style.display="none";
			page7_about_content.style.display="none";		page7_connect_content.style.display="none";
				page7_advertis_content.style.display="none";
				page7_protect_content.style.display="none";
				page7_user_content.style.display="none";
		}
	}
}

