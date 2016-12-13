<?php                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
header("Content-Type:text/html;charset=utf-8");
mysql_connect(SAE_MYSQL_HOST_M.":".SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
mysql_select_db(SAE_MYSQL_DB);
mysql_query("set names utf8");
date_default_timezone_set("PRC");

$id = $_GET["id"];

$sql="SELECT * FROM project_xuhui_travel WHERE id='{$id}'";
$result=mysql_query($sql);
$arr = mysql_fetch_assoc($result);
//var_dump($arr);


?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>千景旅游网-<?php echo $arr["theme"]; ?></title>
		<link rel="stylesheet" type="text/css" href="../css/menu.css"/>
		<link rel="stylesheet" type="text/css" href="../css/xuhui_recommend.css"/>
		<style type="text/css">
			*{
				margin: 0;
				padding: 0;
				text-decoration: none;
				list-style-type: none;
			}
		</style>
	</head>
	<body>
		<!--头部-->
		<?php require_once "top.html" ?>
	<!--主体-->
	<div class="xuhui_recommend_main">
		<div class="content">
			<div class="left">
				<div class="title">
					<a href="###">千景旅游网</a>→
					<a href="###">徐汇旅游</a>→
					<?php echo $arr["theme"]; ?>
				</div>
				<?php 
					$arr2 = explode(",",$arr["picture"]);
					$num = count($arr2);
					$arr3 = explode(",",$arr["shopname"]);
					$arr4 = explode(",",$arr["address"]);
					$arr5 = explode(",",$arr["phone"]);
					$arr6 = explode("&",$arr["about"]);
					for($i=0;$i<$num;$i++){
				?>
				<ul class="spots">
					<li>
						<a href="###">
							<img src="<?php echo $arr2[$i]; ?>"/>
						</a>
					</li>
					<li>
						<a href="###" class="name"><?php echo $arr3[$i]; ?></a><br />
						<?php echo $arr4[$i]."<br />"; ?>
						<?php echo $arr5[$i]."<br />"; ?>
						<a href="###"><?php echo $arr6[$i]; ?></a>
					</li>
				</ul>
				<?php		
					}
				?>
			</div>
			<div class="right">
				<ul class="share">
					<li><a href="###"></a></li>
					<li><a href="###"></a></li>
					<li><a href="###"></a></li>
					<li><a href="###"></a></li>
					<li><a href="###"></a></li>
					<li><a href="###"></a></li>
					<li><a href="###"></a></li>
					<li><a href="###"></a></li>
					<li><a href="###"></a></li>
				</ul>
				<ul class="tupian">
					<li>
						<a href="###"><img src="../img/db_xuhui/sites1.jpg"/></a>
					</li>
					<li>
						<a href="###"><img src="../img/db_xuhui/sites2.jpg"/></a>
					</li>
					<li>
						<a href="###"><img src="../img/db_xuhui/sites3.jpg"/></a>
					</li>
				</ul>
			</div>
			
		</div>
	</div>
	<!--尾部-->
	<?php require_once "bottom.html" ?>
	</body>
	<script src="../js/menu.js"></script>
    <script>
    	var menuAs=document.getElementById("menu_bottom").getElementsByTagName("a");
	    	for(var j=0;j<menuAs.length;j++){
            menuAs[j].style.backgroundColor="";
            menuAs[j].style.color="";
		}
        menuAs[2].style.backgroundColor="green";
        menuAs[2].style.color="white";
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