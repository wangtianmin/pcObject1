
<?php
	mysql_connect(SAE_MYSQL_HOST_M.":".SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
	mysql_select_db(SAE_MYSQL_DB);
	mysql_query("set names utf8");
	date_default_timezone_set("PRC");
	$id=$_GET["id"];
	$sql="SELECT * FROM project_dbPage2_content WHERE id='{$id}'";
	$result=mysql_query($sql);
	if(mysql_num_rows($result)>0){
		$arr=mysql_fetch_assoc($result);
	}else{
		echo "没有此id";
	}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>千景旅游网</title>
    <link rel="stylesheet" type="text/css" href="../css/menu.css"/>
	<style>
	*{margin:0;padding:0}
		body{
			background-color: rgb(230,242,231);
		}
		#dbPage2Middle{
			background: url("../img/dbpage_2/kanqianjinbg2.png") no-repeat center -150px;
			background-size:100% 100%;
			padding-top: 50px;
		}
		#dbPage2M_big{
			width:1000px;
			height:487px;
			margin: 0 auto;
			position:relative;
		}
		#dbPage2M_big>img{
			width:1000px;
			height:487px;
			position:absolute;
			left:0;
			top:0;
			opacity: 0;
			transition: opacity 0.5s; 
		}
		#dbPage2M_big>img:nth-child(1){
			opacity: 1;
		}
		#dbPage2Title{
			position:absolute;
			top:-40px;
			left:0;
			font-size: 25px;
			font-weight: bolder;
		}
		#dbPage2Nav{
			position:absolute;
			right:0;
			bottom:0;
			width:550px;
			height:50px;
			border-top-left-radius: 30px;
			background-color: rgba(0,0,0,0.8);
		}
		#dbPage2Nav>img{
			width:83px;
			height:40px;
			float: left;
			margin-right:5px;
			margin-top: 5px;
		}
		#dbPage2Nav>img:nth-child(1){
			margin-left: 20px;
		}
		#dbPage2Bottom{
			width:1000px;
			margin: 0 auto;
			margin-top: 20px;
		}
		#dbPage2BottomList{
			width:800px;
			list-style-type: none;
			background-color: white;
		}
		#dbPage2BottomList>li{
			border-top:1px dashed darkgrey;
			padding-left: 10px;
		}
		#dbPage2BottomList>li:nth-child(1){
			border-top:1px solid transparent;
		}
		#dbPage2BottomList h3{
			background: url("../img/dbpage_2/qj_btn.png") no-repeat;
			padding-left: 15px;
			color:lightgray;
			height:30px;
			line-height: 30px;
			margin-top: 20px;
			margin-bottom: 20px;
		}
		#dbPage2BottomList p{
			width:750px;
			color:darkslategrey;
			font-size: 13px;
			line-height: 26px;
			margin-bottom: 30px;
		}
		#dbPage2BottomList>li:nth-child(1)>p{
			text-indent: 26px;
		}
		#dbFoot{
			background: url("../img/dbPage_2/bg_ab.png") no-repeat center -30px;
			height:100px;
			padding-top: 100px;
		}
		#dbFoot>p{
			height:80px;
			text-align: center;
			line-height: 80px;
			color:white;
			font-size: 12px;
			background-color: rgb(102,102,102);
		}
		#dbPageDayin{
			position:fixed;
			right:20px;
			bottom:145px;
			text-align: center;
			cursor: pointer;
		}
		#dbPageDayin>p{
			font-size: 13px;
		}
	</style>
</head>
<body>
	<?php require_once "top.html"?>
	<div id="dbPage2Middle">
		<div id="dbPage2M_big">
			<img src="" alt="" />
			<img src="" alt="" />
			<img src="" alt="" />
			<img src="" alt="" />
			<img src="" alt="" />
			<img src="" alt="" />
			<div id="dbPage2Nav">
				<img src="" alt="" />
				<img src="" alt="" />
				<img src="" alt="" />
				<img src="" alt="" />
				<img src="" alt="" />
				<img src="" alt="" />
			</div>
			<p id="dbPage2Title"><?php echo $arr["bigTitle"];?></p>
		</div>
	</div>
	<div id="dbPage2Bottom">
		<ul id="dbPage2BottomList">
			<li>
				<h3><?php echo $arr["bigTitle"];?>简介</h3>
				<p><?php echo $arr["jianjie"];?></p>
			</li>
			<li>
				<h3>门票</h3>
				<p><?php echo $arr["menpiao"];?></p>
			</li>
			<li>
				<h3>主要线路</h3>
				<p><?php echo $arr["mainRoad"];?></p>
			</li>
			<li>
				<h3>交通</h3>
				<p><?php echo $arr["transport"];?></p>
			</li>
			<li>
				<h3>住宿场所</h3>
				<p><?php echo $arr["sleep"];?></p>
			</li>
			<li>
				<h3>餐饮场所</h3>
				<p><?php echo $arr["eat"];?></p>
			</li>
			<li>
				<h3>其他</h3>
				<p><?php echo $arr["other"];?></p>
			</li>
		</ul>
	</div>
	<div id="dbFoot">
		<p>沪ICP备12040923号 COPYRIGHT© 2012 ALL RIGHTS RESERVED 版权所有 上海市徐汇区旅游咨询中心</p>
	</div>
	<div id="dbPageDayin">
		<img src="../img/dbpage_2/dayin.png" alt="" />
		<p>打印此页</p>
	</div>
</body>
    <script type="text/javascript" src="../js/menu.js"></script>
<script>
window.onload=function(){
	var dbPage2M_big=document.getElementById("dbPage2M_big");
	var dbPage2Imgs=document.querySelectorAll("#dbPage2M_big>img");
	var dbPage2ImgNavs=document.querySelectorAll("#dbPage2Nav>img");
	var dbPage2Index=0;
	var dbPage2mouseBol=true;
	//*************************通过数据库导入图片*********************************************
	var dbPage2ImgArr="<?php echo $arr["bannerPic"]?>".split(",");
	for(var i=0;i<dbPage2ImgNavs.length;i++){
		dbPage2ImgNavs[i].index=i;
		dbPage2ImgNavs[i].src=dbPage2ImgArr[i];
		dbPage2Imgs[i].src=dbPage2ImgArr[i];
		dbPage2ImgNavs[i].onmouseover=function(){
			for(var j=0;j<dbPage2Imgs.length;j++){
				dbPage2Imgs[j].style.opacity="0";
			}
			dbPage2Imgs[this.index].style.opacity="1";
			dbPage2Index=this.index;
		}
	}
	function dbPage2Move(){
		if(dbPage2mouseBol){
			dbPage2Index++;
			if(dbPage2Index>5){
				dbPage2Index=0;
			}
			for(var j=0;j<dbPage2Imgs.length;j++){
					dbPage2Imgs[j].style.opacity="0";
				}
			dbPage2Imgs[dbPage2Index].style.opacity="1";
		}
		setTimeout(dbPage2Move,5000);
	}
	setTimeout(dbPage2Move,5000);
	dbPage2M_big.onmouseenter=function(){
		dbPage2mouseBol=false;
	}
	dbPage2M_big.onmouseleave=function(){
		dbPage2mouseBol=true;
	}
	
	//*************************打印***********************************************
	var dbPageDayin=document.getElementById("dbPageDayin");
	dbPageDayin.onclick=function(){
		window.print();
	}
	//*************************菜单***********************************************
		var menuAs=document.getElementById("menu_bottom").getElementsByTagName("a");
	    	for(var j=0;j<menuAs.length;j++){
            menuAs[j].style.backgroundColor="";
            menuAs[j].style.color="";
		}
        menuAs[1].style.backgroundColor="green";
        menuAs[1].style.color="white";
    menuAs[0].href="../home.php";
    menuAs[1].href="../lookQj.php";
    menuAs[2].href="../xuhui.php";
    menuAs[3].href="../news_active.php";	
    menuAs[4].href="../qj_page5.php";
    menuAs[5].href="../qj_page6.php";
    menuAs[6].href="../aboutAs.php";
}
	var top_login=document.getElementById("top_login");
	var top_register=document.getElementById("top_register");
	top_login.href="login.html";
	top_register.href="register.php";
</script>
</html>