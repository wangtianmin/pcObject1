var first_page = document.querySelector(".first_page");
var first = document.querySelector(".first");
var pre_page = document.querySelector(".pre_page");
var one = document.querySelector(".one");
var second = document.querySelector(".second");
var two = document.querySelector(".two");
var next_page = document.querySelector(".next_page");
var last_page = document.querySelector(".last_page");
var page4_main_left1 = document.querySelector(".page4_main_left1");
var page4_main_left2 = document.querySelector(".page4_main_left2");

var first_page2 = document.querySelector(".first_page2");
var first2 = document.querySelector(".first2");
var pre_page2 = document.querySelector(".pre_page2");
var one_next = document.querySelector(".one_next");
var second2 = document.querySelector(".second2");
var two_next = document.querySelector(".two_next");
var next_page2 = document.querySelector(".next_page2");
var last_page2 = document.querySelector(".last_page2");
var page4_main_left1 = document.querySelector(".page4_main_left1");
var page4_main_left2 = document.querySelector(".page4_main_left2");

var search = document.getElementById("search");
var city_name = document.getElementById("city_name");
var city_search = document.getElementById("city_search");
//.....................底部分页切换......................
next_page.onclick=function(){
	page4_main_left1.style.display="none";
	page4_main_left2.style.display="block";
	first2.style.display="inline";
	one_next.style.display="none";
	second2.style.display="none";
	two_next.style.display="inline";
	next_page2.style.display="none";
}
first_page2.onclick = function(){
	page4_main_left1.style.display="block";
	page4_main_left2.style.display="none";
}
last_page.onclick = function(){
	page4_main_left1.style.display="none";
	page4_main_left2.style.display="block";
	first2.style.display="inline";
	one_next.style.display="none";
	second2.style.display="none";
	two_next.style.display="inline";
	next_page2.style.display="none";
}
pre_page2.onclick = function(){
	page4_main_left1.style.display="block";
	page4_main_left2.style.display="none";
	first2.style.display="none";
	one_next.style.display="inline";
	second2.style.display="inline";
	two_next.style.display="none";
}
second.onclick = function(){
	page4_main_left1.style.display="none";
	page4_main_left2.style.display="block";
	first2.style.display="inline";
	one_next.style.display="none";
	second2.style.display="none";
	two_next.style.display="inline";
}
first2.onclick = function(){
	page4_main_left1.style.display="block";
	page4_main_left2.style.display="none";
	first2.style.display="none";
	one_next.style.display="inline";
	second2.style.display="inline";
	two_next.style.display="none";
}

//........................天气情况......................
