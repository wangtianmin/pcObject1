<?php

?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>binJiang</title>
		<link rel="stylesheet" type="text/css" href="../css/menu.css"/>
		<style>
			
			*{margin: 0;padding: 0;}
			.binJiang{
				width: 968px;
				margin: 40px auto;
				background: url("../img/binJiang/Z.jpg");
			}
			.binJiang ul{
				list-style: none;
			}
			.binJiang a{
				text-decoration: none;
				display: inline-block;
			}
			/**************设置END************/
			.binJiang_head{
				width: 968px;height: 310px;
				overflow: hidden;
			}
			.binJiang_headL{
				float: left;
				width: 300px;height: 310px;
				background-color: darkslategray;
			}
			.binJiang_headL p:nth-child(1){
				font-size: 16px;
				margin-left:120px;
				padding-top:20px ;
				color: white;
				opacity: 0.4;
			}
			.binJiang_headL p:nth-child(2){
				font-size: 56px;
				color: white;
				opacity: 0.6;
			}
			.bj_headL_list{
				width: 120px;height: 170px;
				margin:30px 0 0 100px;
			}
			.bj_headL_list li{
				width: 120px;
				height: 34px;
			}
			.bj_headL_list li a{
				color: rgba(255,255,255,0.8);
			}
			.bj_headL_list li a:hover{
				color: #EF8961;
			}
			.binJiang_headR{
				float: right;
				position: relative;
				width: 668px;height: 310px;
			}
			.binJiang_headR div:nth-child(1){
				position: absolute;
				top: 0;left: 0;
				width:668px;height: 310px;
				background: url("../img/binJiang/001b.jpg") no-repeat;
				background-size: 100% 100%;
			}
			.binJiang_headR div:nth-child(2){
				position: absolute;
				top: 0;left: 0;
				width: 668px;height: 310px;
				background: url("../img/binJiang/003b.jpg") no-repeat;
				background-size: 100% 100%;
			}
			.binJiang_headR>p{
				position: absolute;
				width: 668px;height: 30px;
				bottom: 0;left: 0;
				color: white;
				text-align: center;
				line-height: 30px;
				background-color: rgba(0,0,0,.6);
			}
			/***********body部分**********/
			.binJiang_body{
				width: 968px;
				margin-top:40px;
			}
			.bj_boFir{
				width: 876px;
				margin-left: 46px;
			}
			.bj_boFir_txt{
				width: 855px;height: 222px;
				padding: 20px 10px 20px 10px;
				border: 1px solid rgb(224,224,224);
			}
			.bj_boFir_txt p{
				font-size: 14px;
				line-height: 18px;
				color: rgb(103,103,103);
			}
			.bj_boFir_txt p:nth-of-type(1){
				width: 600px;
			}
			.bj_boFir_txt p:nth-of-type(2){
				margin-top: 20px;
			}
			.bj_boFir_txt p:nth-of-type(3){
				margin-top: 20px;
			}
			.bj_boFir_ditu{
				width: 168px;height: 90px;
				background: url("../img/binJiang/ditu.jpg") no-repeat;
				background-size: 100% 100%;
				margin: -280px 0 0 740px;
			}
			.bj_boFir_slider{
				position: relative;
				width: 780;height: 252px;
				margin: 240px 0 0 47px;
				perspective: 500px;
				perspective-origin:50% 50%;
			}
			.bj_boFir_sMid{
				position: absolute;
				top: 0;left: 0;
				width: 780px;height: 252px;
				transform-style: preserve-3d;
				/*overflow: hidden;*/
			}
			.bj_boFir_sMid img{
				position: absolute;
				top: 0;left: 50%;
				width: 440px;height:  252px;
				margin-left: -220px;
				transition: all 1s; 
			}
			.bj_boFir_sMid img:hover{
				transform: translateZ(10px);
			}
			.bj_boFir_sMid img:nth-child(1){
				transform: translate3d(-400px,0,-400px);
			}
			.bj_boFir_sMid img:nth-child(2){
				transform: translate3d(-200px,0,-200px);
			}
			.bj_boFir_sMid img:nth-child(3){
				transform: translate3d(0px,0,0px);
			}
			.bj_boFir_sMid img:nth-child(4){
				transform: translate3d(200px,0,-200px);
				z-index: 2;
			}
			.bj_boFir_sMid img:nth-child(5){
				transform: translate3d(400px,0,-400px);
				z-index: 1;
			}
			
			.bj_fir_bL{
				position: absolute;
				width: 42px;height: 76px;
				top: 50%;left: 50%;
				margin:-38px 0 0 -300px;
				transition: all 0.6s;
			}
			.bj_fir_bL:hover{
				transform: translateX(10px);
			}
			.bj_fir_bR{
				position: absolute;
				width: 42px;height: 76px;
				top: 50%;left: 50%;
				margin:-38px 0 0 210px;
				transition: all 0.6s;
			}
			.bj_fir_bR:hover{
				transform: translateX(-10px);
			}
			/*body 第二部分*/
			.bj_boSec{
				width: 856px;
				position: relative;
				margin-left: 46px;
				padding: 40px 10px 20px 10px;
				border: 1px solid rgb(224,224,224);
			}
			.bj_boSec h3{
				color: red;
			}
			.bj_boSec p{
				margin-top: 20px;
				line-height: 20px;
				width: 500px;
			}
			.bj_boSec p:nth-of-type(1){
				font-weight: bold;
				color: rgb(173,194,84);
			}
			.bj_boSec p:nth-of-type(2){
				line-height: 18px;
				font-size: 12px;
				color:rgb(103,103,103);
			}
			.bj_boSec div:nth-child(4){
				position: absolute;
				top: -20px;right: -20px;
				width: 168px;height: 90px;
				background: url("../img/binJiang/ditu.jpg") no-repeat;
				background-size: 100% 100%;
			}
			.bj_boSec div:nth-child(5){
				position: absolute;
				right: 0;bottom: 20px;
				width: 342px;height: 238px;
				background: url("../img/binJiang/t1.jpg") no-repeat;
				background-size:334px 230px;
			}
			/*body 第三部分*/
			.bj_boThi{
				width: 906px;
				margin-left: 34px;
			}
			.bj_boThi div:nth-child(1){
				width: 903px;height: 81px;
				background: url("../img/binJiang/11.jpg") no-repeat;
				margin-top: 40px;
			}
			.bj_boThi div:nth-child(2){
				width: 168px;height: 90px;
				background: url("../img/binJiang/ditu.jpg") no-repeat;
				margin: -100px 0 0 740px;
			}
			.bj_boThi div:nth-child(3){
				margin-top: 20px;
				width: 906px;height: 394px;
				background: url("../img/binJiang/22.jpg") no-repeat;
			}
			.bj_boThi div:nth-child(4){
				margin-top: 20px;
				width: 906px;height: 401px;
				background: url("../img/binJiang/33.jpg") no-repeat;
			}
			/*body 第四部分*/
			.bj_for{
				width: 906px;
				margin-left: 34px;
			}
			.bj_for div:nth-child(1){
				width: 168px;height: 90px;
				background: url("../img/binJiang/ditu.jpg") no-repeat;
				margin:-30px 0 0 740px;
			}
			.bj_for div:nth-child(2){
				width: 903px;height: 472px;
				background: url("../img/binJiang/j1.jpg") no-repeat;
				background-size: 100% 100%;
			}
			.bj_for div:nth-child(3){
				width: 632px;height: 281px;
				background: url("../img/binJiang/j2.jpg") no-repeat;
			}
			/*body 第五部分*/
			.bj_fif{
				position: relative;
				width: 906px;height: 730px;
				margin-left: 34px;
			}
			.bj_fif_ditu{
				position: absolute;
				top: -34px;left:780px;
				width: 168px;height: 90px;
				background: url("../img/binJiang/ditu.jpg") no-repeat;
				z-index: 1;
			}
			.bj_fifImgs{
				position: absolute;
				top: 30px;left:3px;
				width: 900px;height: 656px;
				border: 1px solid rgb(224,224,224);
				
				
			}
			.bj_fifImgs_1{
				position: absolute;
				top: 25px;left: 25px;
				width: 850px;height: 470px;
			}
			.bj_fifImgs_1 img{
				position: absolute;
				top: 0;left: 0;
				width: 100%;height: 100%;
				opacity: 0;
				transition: all 0.8s; 
			}
			.bj_fifImgs_1 img:nth-child(1){
				opacity: 1;
			}
			.bj_fif_bL{
				position: absolute;
				top: 220px;left: 40px;
				z-index: 1;
			}
			.bj_fif_bR{
				position: absolute;
				top: 220px;right: 40px;
				z-index: 1;
			}
			.bj_fifImgs_2{
				position: absolute;
				top: 550px;left: 108px;
			}
			.bj_fifImgs_2 img{
				border: 2px solid transparent;
			}
			
			.bj_fifImgs_2 img:nth-child(1){
				border: 2px solid orange;
			}
			.bj_fifImgs_2 img:hover{
				outline: 2px solid rgba(0,0,0,0.6);
			}
			.bj_fif_sL{
				position: absolute;
				top: 570px;left: 90px;
			}
			.bj_fif_sR{
				position: absolute;
				top: 570px;right: 90px;
			}
			
			.bj_footer{
				margin-top: 20px;
				width: 968px;
			}
			.bj_footer div:nth-child(2){
				width: 968px;height: 60px;
				background: url("../img/binJiang/tel.jpg") no-repeat 302.5px 0;
					margin-top: -60px;
			}
			.bj_foBeijing{
				width: 968px;height: 60px;
				background-color: rgb(143,143,143);
			}
			.bj_footer p{
				color: rgba(0,0,0,0.6);
				text-align: center;
				margin-top: 10px;
			}
		</style>
	</head>
	<body>
		<?php require_once "top.html" ?>
		<div class="binJiang">
			<div class="binJiang_head">
				<div class="binJiang_headL">
					<p>XUJIAHUI SHANGHAI</p>
					<p>CORNICHE</p>
					<ul class="bj_headL_list">
						<li><a href="###" class="bj_heA">首 &nbsp;&nbsp;&nbsp;&nbsp;页.....</a></li>
						<li><a href="###" class="bj_heA">滨江概况.....</a></li>
						<li><a href="###" class="bj_heA">滨江景点.....</a></li>
						<li><a href="###" class="bj_heA">交通信息.....</a></li>
						<li><a href="###" class="bj_heA">滨江美图.....</a></li>
					</ul>
				</div>
				<div class="binJiang_headR">
					<div></div>
					<div></div>
					<p>别样的沙滩风情，引领全球国际大都市的人文时尚潮流</p>
				</div>
			</div>
			
			<div class="binJiang_body">
				<div class="bj_boFir bj_quan">
					<div class="bj_boFir_txt">
						<p>徐汇滨江，这块与世博隔江相望的土地，作为世博园区的核心配套区域，因其区域的重要及未来功能的提升，
                      让世界的目光再次聚焦在滔滔黄浦江畔。新时代盛世花开，徐汇滨江延承历史经典，保留“老上海元素”，并
                      以现代城市水岸景观营造为核心，将黄浦江的辉煌历史与徐汇区的璀璨未来完美融合，8.4公里的滨江岸线为上海
                      呈现一道别样的江滩风情，引领上海这座国际大都市的人文时尚潮流。 </p>
						<p>
							徐汇滨江引入CORNICHE理念，通过四级梯度空间设计及楔形绿化原则，将城市景观从滨江岸线引入区域腹地，打造上海目前唯一一条可驱车饱览黄浦江壮丽景色的滨水景观大道——龙腾大道，并预留有轨电车轨道，设计休闲自行车道、休闲步道及亲水平台等多重休闲空间，让市民能够在闲暇之余与黄浦江零距离亲密接触，呼吸新鲜的城市气息。
						</p>
						<p>
							徐汇滨江旧时为著名的工业集聚地，改造后的滨江将一些著名的工业历史遗留保留下来，如南浦火车花园的老式蒸汽火车、北票码头塔吊、煤炭传输带、水泥厂预均库等等。
						</p>
					</div>
					<div class="bj_boFir_ditu"></div>
					
					<div class="bj_boFir_slider">
						<div class="bj_boFir_sMid">
							<img src="../img/binJiang/006b.jpg" alt="" />
							<img src="../img/binJiang/007b.jpg" alt="" />
							<img src="../img/binJiang/001b.jpg" alt="" />
							<img src="../img/binJiang/002b.jpg" alt="" />
							<img src="../img/binJiang/003b.jpg" alt="" />
							<img src="../img/binJiang/004b.jpg" alt="" />
							<img src="../img/binJiang/005b.jpg" alt="" />
							<img src="../img/binJiang/006b.jpg" alt="" />
							<img src="../img/binJiang/007b.jpg" alt="" />
							<img src="../img/binJiang/001b.jpg" alt="" />
							
						</div>
						<img src="../img/binJiang/leftbig.png" class="bj_fir_bL" alt="" />
						<img src="../img/binJiang/rightbig.png" class="bj_fir_bR" alt="" />
					</div>
				</div>
				
				<div class="bj_boSec bj_quan" style="display: none;">
					<h3>滨江概况</h3>
					<p>徐汇滨江，这块与世博隔江相望的土地，作为世博园区的核心配套区域，因其区域的重要及未来功能的提升，让世界的目光再次聚焦在滔滔黄浦江畔。新时代盛世花开，徐汇滨江延承历史经典，保留“老上海元素”，并以现代城市水岸景观营造为核心，将黄浦江的辉煌历史与徐汇区的璀璨未来完美融合，8.4公里的滨江岸线为上海呈现一道别样的江滩风情，引领上海这座国际大都市的人文时尚潮流。</p>
					<p>徐汇滨江引入CORNICHE理念，通过四级梯度空间设计及楔形绿化原则，将城市景观从滨江岸线引入区域腹地，打造上海目前唯一一条可驱车饱览黄浦江壮丽景色的滨水景观大道——龙腾大道，并预留有轨电车轨道，设计休闲自行车道、休闲步道及亲水平台等多重休闲空间，让市民能够在闲暇之余与黄浦江零距离亲密接触，呼吸新鲜的城市气息。徐汇滨江旧时为著名的工业集聚地，改造后的滨江将一些著名的工业历史遗留保留下来，如南浦火车花园的老式蒸汽火车、北票码头塔吊、煤炭传输带、水泥厂预均库等等。</p>
					<div></div>
					<div></div>
				</div>
					
				<div class="bj_boThi bj_quan" style="display: none;">
					<div></div>
					<div></div>
					<div></div>
					<div></div>
				</div>
				
				<div class="bj_for bj_quan" style="display: none;">
					<div></div>
					<div></div>
					<div></div>
				</div>
				
				<div class="bj_fif bj_quan" style="display: none;">
					<div class="bj_fif_ditu"></div>
					<div class="bj_fifImgs">
						<div class="bj_fifImgs_1">
							<img src="../img/binJiang/001b.jpg" alt="" />
							<img src="../img/binJiang/002b.jpg" alt="" />
							<img src="../img/binJiang/003b.jpg" alt="" />
							<img src="../img/binJiang/004b.jpg" alt="" />
							<img src="../img/binJiang/005b.jpg" alt="" />
							<img src="../img/binJiang/006b.jpg" alt="" />
							<img src="../img/binJiang/007b.jpg" alt="" />
						</div>
						<img src="../img/binJiang/leftbig.png" class="bj_fif_bL" alt="" />
						<img src="../img/binJiang/rightbig.png" class="bj_fif_bR" alt="" />
						<div class="bj_fifImgs_2">
							<img src="../img/binJiang/001s.jpg" alt="" />
							<img src="../img/binJiang/002s.jpg" alt="" />
							<img src="../img/binJiang/003s.jpg" alt="" />
							<img src="../img/binJiang/004s.jpg" alt="" />
							<img src="../img/binJiang/005s.jpg" alt="" />
							<img src="../img/binJiang/006s.jpg" alt="" />
							<img src="../img/binJiang/007s.jpg" alt="" />
						</div>
						<img src="../img/binJiang/left.png" class="bj_fif_sL" alt="" />
						<img src="../img/binJiang/right.png" class="bj_fif_sR" alt="" />
					</div>
					<!--<div></div>-->
				</div>
			</div><!--body END-->
			<div class="bj_footer">
				<div class="bj_foBeijing"></div>
				<div></div>
				<p>Copyright © 2010-2011 www.qjtrip.com All Rights Reserved 版权所有·上海市徐汇区旅游咨询中心</p>
				<p>建议使用1024*768以上的屏幕分辨率和6.0以上版本的IE来访问本站</p>
			</div>
		</div><!--quanwen END-->
	</body>
	<script src="../js/menu.js"></script>
	<script>
		var bj_fifI_1=document.querySelectorAll(".bj_fifImgs_1 img");
		var bj_fifI_2=document.querySelectorAll(".bj_fifImgs_2 img");
		var bj_fif_sL=document.querySelector(".bj_fif_sL");
		var bj_fif_sR=document.querySelector(".bj_fif_sR");
		var bj_fif_bL=document.querySelector(".bj_fif_bL");
		var bj_fif_bR=document.querySelector(".bj_fif_bR");
		var bj_quan=document.querySelectorAll(".bj_quan");
		var bj_heA=document.querySelectorAll(".bj_heA");
		var bjIndex=0;
		var bjIndex2=0;
		var bjTimer=null;
		console.log(bj_heA);
		
		function rClick(){
			for(var j=0;j<bj_fifI_1.length;j++){
				bj_fifI_1[j].style.opacity="0";
				bj_fifI_2[j].style.borderColor="transparent";
			}
			bj_fifI_1[bjIndex].style.opacity="1";
			bj_fifI_2[bjIndex].style.borderColor="orange";
		}
		
		for(var i=0;i<bj_fifI_2.length;i++){
			bj_fifI_2[i].bjIndex=i;
			bj_fifI_2[i].onmousedown=function(){
				for(var j=0;j<bj_fifI_1.length;j++){
					bj_fifI_1[j].style.opacity="0";
					bj_fifI_2[j].style.borderColor="transparent";
				}
				bj_fifI_1[this.bjIndex].style.opacity="1";
				this.style.borderColor="orange";
				this.style.outlineColor="transparent";
				bjIndex=this.bjIndex;
			}
			bj_fifI_2[i].onmouseup=function(){
				this.style.outlineColor="rgba(0,0,0,0.6)";
			}
		}
		
		for(var i=0;i<bj_heA.length;i++){
			bj_heA[i].bjIndex2=i;
			bj_heA[i].onclick=function(){
				for(var j=0;j<bj_heA.length;j++){
					bj_quan[j].style.display="none";
					bj_heA[j].style.color="rgba(255,255,255,0.8)";
				}
				bj_quan[this.bjIndex2].style.display="block";
				this.style.color="#EF8961";
			}
		}
		
		bj_fif_sR.onclick=function(){
			clearInterval(bjTimer);
			bjIndex++;
			if(bjIndex>6){
				bjIndex=0;
			}
			rClick();
			bjTimeFn()
		}
		bj_fif_sL.onclick=function(){
			clearInterval(bjTimer);
			bjIndex--;
			if(bjIndex<0){
				bjIndex=6;
			}
			rClick();
			bjTimeFn()
		}
		bj_fif_bR.onclick=function(){
			clearInterval(bjTimer);
			bjIndex++;
			if(bjIndex>6){
				bjIndex=0;
			}
			rClick();
			bjTimeFn()
		}
		
		bj_fif_bL.onclick=function(){
			clearInterval(bjTimer);
			bjIndex--;
			if(bjIndex<0){
				bjIndex=6;
			}
			rClick();
			bjTimeFn();
			console.log(bjIndex);
		}
		
		function bjTimeFn(){
			clearInterval(bjTimer);
			bjTimer=setInterval(function(){
				bjIndex++;
				if(bjIndex>6){
					bjIndex=0;
				}
				rClick();
			},3000);
			
		}
		bjTimeFn();
		
		
		var bj_boFir_sMid=document.querySelector(".bj_boFir_sMid");
		var bj_imgs =document.querySelectorAll(".bj_boFir_sMid img");
		var bjImgIndex=0;
		var bjclick=document.querySelector(".bjclick");
		var bj_fir_bL=document.querySelector(".bj_fir_bL");
		var bj_fir_bR=document.querySelector(".bj_fir_bR");
		var bjTimerX =null;
		
		function bjChange(){
			for(var j=0;j<bj_imgs.length;j++){
				bj_imgs[j].style.transform="translate3d(0,0,-400px)"
			}
			bj_imgs[bjImgIndex].style.transform="translate3d(-400px,0,-400px)";
			bj_imgs[bjImgIndex+1].style.transform="translate3d(-200px,0,-200px)";
			bj_imgs[bjImgIndex+2].style.transform="translate3d(0px,0,0px)";
			bj_imgs[bjImgIndex+3].style.transform="translate3d(200px,0,-200px)";
			bj_imgs[bjImgIndex+4].style.transform="translate3d(400px,0,-400px)";
		}
		bj_fir_bR.onclick=function(){
			bjImgIndex++;
			if(bjImgIndex>=5){
				bjImgIndex=0;
			}
			bjChange();
		}
		
		bj_fir_bL.onclick=function(){
			bjImgIndex--;
			if(bjImgIndex<=0){
				bjImgIndex=5;
			}
			bjChange();
		}
		
		function bjTimerFn(){
			bjTimerX=setInterval(function(){
				bjImgIndex++;
				if(bjImgIndex>=5){
					bjImgIndex=0;
				}
				bjChange();
			},2000);
		}
		bjTimerFn();
		bj_boFir_sMid.onmouseenter=function(){
			clearInterval(bjTimerX);
		}
		bj_boFir_sMid.onmouseleave=function(){
			bjTimerFn();
		}
		bj_fir_bL.onmouseenter=function(){
			clearInterval(bjTimerX);
		}
		bj_fir_bR.onmouseenter=function(){
			clearInterval(bjTimerX);
		}
		
		var menuAs=document.getElementById("menu_bottom").getElementsByTagName("a");
    		for(var j=0;j<menuAs.length;j++){
            menuAs[j].style.backgroundColor="";
            menuAs[j].style.color="";
		}
        menuAs[4].style.backgroundColor="green";
        menuAs[4].style.color="white";
        menuAs[0].href="../home.php";
	    menuAs[1].href="../lookQj.php";
	    menuAs[2].href="../xuhui.php";
	    menuAs[3].href="../news_active.php";	
	    menuAs[4].href="../qj_page5.php";
	    menuAs[5].href="../qj_page6.php";
	    menuAs[6].href="../aboutAs.php";
	    
	    var top_login=document.getElementById("top_login");
		var top_register=document.getElementById("top_register");
		top_login.href="login.html";
		top_register.href="register.php";
	</script>
	
</html>


