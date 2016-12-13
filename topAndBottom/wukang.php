<?php

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>武康路</title>
		<link rel="stylesheet" type="text/css" href="../css/menu.css"/>
		<style>
			*{margin:0;padding:0;}
			.wukang_a{text-decoration: none;color: rgba(255,255,255,1);display: inline-block;}
			.wukang_First{
				position: relative;
				width: 966px;height: 520px;
				background:url("../img/wukanglu/bg.jpg") repeat 0 0;
				margin:10px auto;
			}
			.wukang_img1{
				position: absolute;
				left: 0;top:60px;
				width: 966px;height: 350px;
				background:url("../img/wukanglu/4.jpg") 0 0 no-repeat,url("../img/wukanglu/5.jpg") 483px 0 no-repeat;
				background-size:483px 350px,483px 350px ;
				opacity: 1;
			}
			.wukang_img2{
				position: absolute;
				left: 0;top:60px;
				width: 966px;height: 350px;
				background:url("../img/wukanglu/6.jpg") 0 0 no-repeat,url("../img/wukanglu/3.jpg") 483px 0 no-repeat;
				background-size:483px 350px,483px 350px ;
				opacity: 0;
			}
			.wukang_img3{
				position: absolute;
				left: 0;top:60px;
				width: 966px;height: 350px;
				background:url("../img/wukanglu/1.jpg") 0 0 no-repeat,url("../img/wukanglu/2.jpg") 483px 0 no-repeat;
				background-size:483px 350px,483px 350px ;
				opacity: 0;
				
			}
			.wukang_tuoyuan{
				position: absolute;
				top:26px;left: 50%;
				width:330px;height: 398px;
				transform: translateX(-165px);
				background-color: rgba(117,76,27,1);
				border-radius:50%;
				box-shadow: 0 0 10px gold;
				animation: tuoyuanMove 4s infinite;
			}
			@keyframes tuoyuanMove{
				0%{box-shadow: 0 0 10px gold;}
				100%{box-shadow: 0 0 30px gold;}
			}
			.wukang_tuoyuan p:nth-child(1){
				position: absolute;
				top: 30px;left: 50%;
				font-size: 40px;
				margin-left: -60px;
				color: rgba(230,221,187,1);
			}
			.wukang_tuoyuan p:nth-child(2){
				position: absolute;
				top: 76px;left: 50%;
				font-size: 24px;
				margin-left: -120px;
				color: rgba(196,180,148,1);
			}
			.wukang_bg_xian{
				position: absolute;
				top: 440px;left:0px;
				width: 966px;height: 13px;
				background: url("../img/wukanglu/logo_xian.jpg");
				background-size:100% 100%;
			}
			.wukang_First_A{
				position: absolute;
				top: 134px;left: 90px;
				width: 146px;height: 231px;	
			}
			.wukang_First_A li{
				height: 32px;
				border-bottom: 1px dotted rgba(182,148,108,1);
				line-height: 32px;
				text-align: center;
				opacity: 0.8;
			}
			.wukang_First_A li a:hover{
				color: gold;
			}
			.wk_imgQ{
				transition: all 1s;
			}
		</style>
	</head>
	<body>
		<?php require_once "top.html"; ?>
		<div class="wukang_First">
			<div class="wukang_img1 wk_imgQ"></div>
			
			<div class="wukang_img2 wk_imgQ"></div>
			
			<div class="wukang_img3 wk_imgQ"></div>
			
			<div class="wukang_tuoyuan">
				<p>武康路</p>
				<p>SHANGHAI WUKANG</p>
				<ul class="wukang_First_A" style="list-style: none;">
					<li><a href="###" class="wukang_a">首&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;页</a></li>
					<li><a href="wukang_gaikuang.php" class="wukang_a">武康路概况</a></li>
					<li><a href="wukang_gaikuang.php" class="wukang_a">武康路地图</a></li>
					<li><a href="wukang_gaikuang.php" class="wukang_a">武康路历史人文</a></li>
					<li><a href="wukang_gaikuang.php" class="wukang_a">武康路各类信息</a></li>
					<li><a href="wukang_gaikuang.php" class="wukang_a">武康路旅游咨询中心</a></li>
					<li style="border: none;"><a href="wukang_gaikuang.php" class="wukang_a">自行车租赁</a></li>
				</ul>
			</div>
			<div class="wukang_bg_xian"></div>
		</div>
	</body>
	<script src="../js/menu.js"></script>
	<script>
		var wkNavs=document.querySelectorAll(".wukang_a");
		var wkIndex=0;
		var wkIndex2=0;
		var wk_imgQs=document.querySelectorAll(".wk_imgQ");
		
		for(var i =0;i<wkNavs.length;i++){
			wkNavs[i].wkIndex =i;
			wkNavs[i].onclick=function(){
				window.sessionStorage.setItem("wkIndex1",this.wkIndex);
			}
		}
		function wk_hidden(){
			wkIndex2++;
			if(wkIndex2>2){
				wkIndex2=0;	
			}
			for(var i=0;i<wk_imgQs.length;i++){
				wk_imgQs[i].style.opacity="0";
			}
			wk_imgQs[wkIndex2].style.opacity="1";

		}
		setInterval(wk_hidden,4000);

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
