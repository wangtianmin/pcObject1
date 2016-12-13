<?php 
	header("Content-Type:text/html;charset=utf-8");
	mysql_connect(SAE_MYSQL_HOST_M.":".SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
	mysql_select_db(SAE_MYSQL_DB);
	mysql_query("set names utf8");
	date_default_timezone_set("PRC");
	
	$sql="SELECT * FROM project_zan";
	$result=mysql_query($sql);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="css/menu.css"/>
	<link rel="stylesheet" type="text/css" href="css/xuhui.css"/>
	<title>徐汇旅游</title>
</head>
<body>
<?php  require_once "topAndBottom/top.html"?>

<div class="page3_big">
	<div class="page3_wrap">
		<!--banner图切换-->
		<div class="page3_banner">
					<a href="###">
						<img src="img/page3/page3_2.jpg"/>
					</a>
					<a href="###">
						<img src="img/page3/page3_3.png"/>
					</a>
					<a href="###">
						<img src="img/page3/page3_1.jpg"/>
					</a>
					<a href="###">
						<img src="img/page3/page3_2.jpg"/>
					</a>
					<a href="###">
						<img src="img/page3/page3_3.png"/>
					</a>
					<a href="###">
						<img src="img/page3/page3_1.jpg"/>
					</a>
					<a href="###">
						<img src="img/page3/page3_2.jpg"/>
					</a>
					
		</div>
		<div class="page3_mask_left"></div>
		<div class="page3_mask_right"></div>
		<a class="last" href="###">&lt;</a>
		<a class="next" href="###">&gt;</a>
	</div>
</div>
<div class="page3_helper">
		<ul>
			<li>
				<a href="###">住宿</a>
			</li>
			<li>
				<a href="###">美食</a>
			</li>
			<li>
				<a href="###">交通</a>
			</li>
			<li>
				<a href="###">购物</a>
			</li>
			<li>
				<a href="###">娱乐</a>
			</li>
		</ul>
	</div>
<div class="page3_main">
	<div class="page3_main_div">
<!--------------------第一数列的DIV--------------------->
		<div class="page3_content1">
			<ul class="page3_content1_ul1">
				<li>
					<h3>
						<a href="topAndBottom/xuhui_recommend.php?id=1">
							心醉夜色，徐汇风情小马路
						</a>
					</h3>
				</li>
				<li>
					<a href="topAndBottom/xuhui_recommend.php?id=1">
						<img src="img/page3/page3_4.jpg"/>
					</a>
				</li>
				<li>
					<a href="topAndBottom/xuhui_recommend.php?id=1">
						穿过徐家汇公园，浓密的法国梧桐下掩映着一条条雅致的风情小路和一栋栋满载传奇的名人旧居，他们共同筑起了繁华世界里的涤尘之所。上海西区曾是海派文化集萃之地，上世纪三四十年代，这里汇聚了2000多栋文化名家、达官显贵居住过的老洋房，其中的衡山路、湖南路、武康路、东平路、桃江路、汾阳路等64条马路成为“永不拓宽”，形成了今天的历史文化风貌保护区。
						<br />
					</a>
				</li>
				<li>
					<div class="zan"></div>
				</li>
			</ul>
			<ul class="page3_content1_ul1 page3_content1_ul1_2 ">
				<li>
					<h3>
						<a href="topAndBottom/xuhui_recommend.php?id=2">
							品味老洋房
						</a>
					</h3>
				</li>
				<li>
					<a href="topAndBottom/xuhui_recommend.php?id=2">
						<img src="img/page3/page3_8.jpg"/>
					</a>
				</li>
				<li>
					<a href="topAndBottom/xuhui_recommend.php?id=2">
						老洋房是上海最经典的住宅形式，每一幢都承载着一段故事。它们被改建成新兴餐厅、酒吧、咖啡馆、茶室......新旧交融、古典浪漫与现代时尚共存，进门即能见到文化，吃的也是洋房里的文化味，端的是妙不可言......
						<br />
					</a>
				</li>
				<li>
					<div class="zan"></div>
				</li>
			</ul>
			<ul class="page3_content1_ul1 page3_content1_ul1_3">
				<li>
					<h3>
						<a href="topAndBottom/xuhui_recommend.php?id=3">
							衡复地区精品酒店
						</a>
					</h3>
				</li>
				<li>
					<a href="topAndBottom/xuhui_recommend.php?id=3">
						<img src="img/page3/page3_12.jpg"/>
					</a>
				</li>
				<li>
					<a href="topAndBottom/xuhui_recommend.php?id=3">
						旅居徐汇，最爱她的风情万种——从永不拓宽的小马路上的梧桐绿意，到那些有着传奇故事的老洋房，无论是星级宾馆、旅游饭店、抑或精品酒店，无一例外，都兼具了海派文化的历史风韵和安逸温馨的文化腔浓。在这里，酒店亦是景点，一夜，也精彩。
						<br />
					</a>
				</li>
				<li>
					<div class="zan"></div>
				</li>
			</ul>
			<ul class="page3_content1_ul1 page3_content1_ul1_4">
				<li>
					<h3>
						<a href="topAndBottom/xuhui_recommend.php?id=5">
							追寻红色足迹，品读魅力徐汇
						</a>
					</h3>
				</li>
				<li>
					<a href="topAndBottom/xuhui_recommend.php?id=5">
						<img src="img/page3/page3_16.jpg" alt="" />
					</a>
				</li>
				<li>
					<a href="topAndBottom/xuhui_recommend.php?id=5">
						为纪念中国人名抗日战争胜利暨世界反法西斯战争胜利70周年，弘扬伟大的爱国主义和民族主义精神，将徐汇的红色旅游资源进行整合包装，统一主题、统一策划，以新颖的红色主题、新鲜的活动内容，新兴的活动形式集中展示徐汇独具魅力的旅游目的地形象，将举办此活动。
						<br />
					</a>
				</li>
				<li>
					<div class="zan"></div>
				</li>
			</ul>
		</div>
<!----------------------第二数列的DIV------------------->			
		<div class="page3_content2">
			<ul class="page3_content1_ul1 page3_content1_ul2">
				<li>
					<h3>
						<a href="topAndBottom/xuhui_recommend.php?id=4">
							漫游漫品武康路
						</a>
					</h3>
				</li>
				<li>
					<a href="topAndBottom/xuhui_recommend.php?id=4">
						<img src="img/page3/page3_5.jpg"/>
					</a>
				</li>
				<li>
					<a href="topAndBottom/xuhui_recommend.php?id=4">
						武康路位于上海市徐汇区东北部，北起华山路，南至淮海中路与兴国路交汇处，全线略呈弧形，全长1.17公里，是一条由北向南的单向行车道。原名福开森路，建于1907年，至1943年才更名为武康路，一公里见长的小马路，当时为上海法租界花园住宅区域的典型代表，后新建小型公寓和新式里弄房屋，被誉为上海著名的高级住宅区，整条马路环境幽静而高雅，是上海中心城区最具欧陆风情街区之一。
						<br />
					</a>
				</li>
				<li>
					<div class="zan"></div>
				</li>
			</ul>
			<ul class="page3_content1_ul1 page3_content1_ul2_2 ">
				<li>
					<h3>
						<a href="topAndBottom/xuhui_recommend.php?id=5">
							创意园区
						</a>
					</h3>
				</li>
				<li>
					<a href="topAndBottom/xuhui_recommend.php?id=5">
						<img src="img/page3/page3_9.jpg"/>
					</a>
				</li>
				<li>
					<a href="topAndBottom/xuhui_recommend.php?id=5">
						固本肥皂、大中华橡胶、“大地牌”雨衣、梅林罐头、“三五牌”台钟、“飞鱼牌”手帕……这些闪耀着国货之光的产品于一个多世纪前在徐汇境内的近代工业上留下了浓墨重彩的一页。当这些品牌渐渐淡出人们的视线，创意时代开始来临，大大小小、形形色色的创意园区诞生了，它们分布在徐汇区各大区域，创意成了一种生活方式。
						<br />
						　　这些创意园大都由旧工厂翻修而来，由老街市改造而成，虽然前世不尽相同，但今生都注定大放异彩……
					</a>
				</li>
				<li>
					<div class="zan"></div>
				</li>
			</ul>
			<ul class="page3_content1_ul1 page3_content1_ul2_3">
				<li>
					<h3>
						<a href="topAndBottom/xuhui_recommend.php?id=6">
							绿色生态园
						</a>
					</h3>
				</li>
				<li>
					<a href="topAndBottom/xuhui_recommend.php?id=6">
						<img src="img/page3/page3_13.jpg"/>
					</a>
				</li>
				<li>
					<a href="topAndBottom/xuhui_recommend.php?id=6">
						热闹的城市生活有时也会令人乏味，繁忙的工作总令人处于亚健康，不如来一次绿色生态之旅，在山水花草中尽情深呼吸。
						<br />
					</a>
				</li>
				<li>
					<div class="zan"></div>
				</li>
			</ul>
			<ul class="page3_content1_ul1 page3_content1_ul2_4">
				<li>
					<h3>
						<a href="topAndBottom/xuhui_recommend.php?id=10">
							修学之旅
						</a>
					</h3>
				</li>
				<li>
					<a href="topAndBottom/xuhui_recommend.php?id=10">
						<img src="img/page3/page3_17.jpg" alt="" />
					</a>
				</li>
				<li>
					<a href="topAndBottom/xuhui_recommend.php?id=10">
						青葱校园时光，总有着太多的情怀和追忆，在校园里感受时光的沉淀，文化的传承和教育的脉络，让人变的平静而充实。不管你早已毕业了多久，漫步在校园里，总觉得自己还是当年那个积极求知的学生，在徐汇来一场别具一格的修学之旅吧，相信你定有所斩获。
						<br />
					</a>
				</li>
				<li>
					<div class="zan"></div>
				</li>
			</ul>
		</div>
<!----------------------第三列的DIV--------------------->
		<div class="page3_content3">
			<ul class="page3_content1_ul1 page3_content1_ul2 page3_content1_ul3 ">
				<li>
					<h3>
						<a href="topAndBottom/xuhui_recommend.php?id=7">
							精彩徐汇，经典七景
						</a>
					</h3>
				</li>
				<li>
					<a href="topAndBottom/xuhui_recommend.php?id=7">
						<img src="img/page3/page3_6.jpg"/>
					</a>
				</li>
				<li>
					<a href="topAndBottom/xuhui_recommend.php?id=7">
						历史徐汇，留下了诸多古迹，流传着脍炙人口的传说；时尚徐汇，随城市发展的脉搏而律动，衍生出了具有海派文化神韵的城市标志性景观。经典七景，成为蕴涵徐汇气质的经典旅游景观。
						<br />
					</a>
				</li>
				<li>
					<div class="zan"></div>
				</li>
			</ul>
			<ul class="page3_content1_ul1 page3_content1_ul2_2 page3_content1_ul3_2 ">
				<li>
					<h3>
						<a href="topAndBottom/xuhui_recommend.php?id=8">
							精彩徐家汇
						</a>
					</h3>
				</li>
				<li>
					<a href="topAndBottom/xuhui_recommend.php?id=8">
						<img src="img/page3/page3_10.jpg"/>
					</a>
				</li>
				<li>
					<a href="topAndBottom/xuhui_recommend.php?id=8">
						徐家汇曾经是远离市区、偏远荒凉的小镇，在近一百多年的历史演变中，逐渐成为了繁荣兴旺、寸土寸金的黄金地区，也成为旅行者在上海必去的景点之一。要了解十七世纪迄今的中西文化交往过程，“徐家汇源”会为你打开一本博古通今的文明之书；要尽享便捷购物的乐趣，不下10家的大型购物中心各具特色和主题，任你逛到脚酸；要在高楼林立中寻一方绿土，徜徉闹市里的生态之区，徐家汇公园能为你提供这样一个清新舒适的休憩地。
						<br />
					</a>
				</li>
				<li>
					<div class="zan"></div>
				</li>
			</ul>
			<ul class="page3_content1_ul1 page3_content1_ul2_3 page3_content1_ul3_3">
				<li>
					<h3>
						<a href="topAndBottom/xuhui_recommend.php?id=9">
							让我们去赶集把
						</a>
					</h3>
				</li>
				<li>
					<a href="topAndBottom/xuhui_recommend.php?id=9">
						<img src="img/page3/page3_14.jpg"/>
					</a>
				</li>
				<li>
					<a href="topAndBottom/xuhui_recommend.php?id=9">
						生活节奏越快，越让人忍不住想要逃开。赶集班的旅行方式不仅能让人迅速放松，也提供了一个快速融入当地文化的便捷途径。在徐汇，你能找到怎样的集市？你会感受到怎样的生活？
						<br />
					</a>
				</li>
				<li>
					<div class="zan"></div>
				</li>
			</ul>
			<ul class="page3_content1_ul1 page3_content1_ul2_4 page3_content1_ul3_4">
				<li>
					<h3>
						<a href="topAndBottom/xuhui_recommend.php?id=10">
							跟着电影逛徐汇
						</a>
					</h3>
				</li>
				<li>
					<a href="topAndBottom/xuhui_recommend.php?id=10">
						<img src="img/page3/page3_18.jpg" alt="" />
					</a>
				</li>
				<li>
					<a href="topAndBottom/xuhui_recommend.php?id=10">
						徐汇区那些富有传奇色彩蕴藏历史文化的老宅，午后阳光下的法国梧桐和街景，深得影视制作人的喜爱，许多令人交口称赞的佳作都取材于徐汇，如果你是个电影迷，如果你愿意带着这份情怀来游览景点，这个专辑将带给你别样的旅行体验。
						<br />
					</a>
				</li>
				<li>
					<div class="zan"></div>
				</li>
			</ul>
		</div>
<!----------------------第四列DIV----------------------->
		<div class="page3_content4">
			<ul class="page3_content1_ul1 page3_content1_ul2 page3_content1_ul4">
				<li>
					<h3>
						<a href="topAndBottom/xuhui_recommend.php?id=11">
							下午茶推荐
						</a>
					</h3>
				</li>
				<li>
					<a href="topAndBottom/xuhui_recommend.php?id=11">
						<img src="img/page3/page3_7.jpg"/>
					</a>
				</li>
				<li>
					<a href="topAndBottom/xuhui_recommend.php?id=11">
						咖啡馆里的音乐伴随着咖啡的香气，不仅能让浮躁沉寂，甚至能驱走莫名的惶恐。抱一本厚厚的小说，就着淡淡的音乐和浓浓的咖啡，可以忘记一切烦恼。要么专注要么随意,或者聊天或者不语，没有人可以约束你必须做些什么...
						<br />
					</a>
				</li>
				<li>
					<div class="zan"></div>
				</li>
			</ul>
			<ul class="page3_content1_ul1 page3_content1_ul2_2 page3_content1_ul4_2 ">
				<li>
					<h3>
						<a href="topAndBottom/xuhui_recommend.php?id=12">
							徐家汇源
						</a>
					</h3>
				</li>
				<li>
					<a href="topAndBottom/xuhui_recommend.php?id=12">
						<img src="img/page3/page3_11.jpg"/>
					</a>
				</li>
				<li>
					<a href="topAndBottom/xuhui_recommend.php?id=12">
						400年前，徐光启首先把自己的眼光投向深邃的星空和外部辽阔的世界。他的热切探索成为中国近代科学文化发展史的开端，而他一生的荣光都镌刻在徐家汇这片土地上。我们相信徐光启就是我们上海海派文化活力的来源，于是400年后，我们循着这文化的根脉设想孕育一个“生活着的百年上海”的形象，这就是“徐家汇源”。这里蕴藏了对外来文化“食而能化、化而能食”的大气魄和用中国文化去影响别人的大作为，通过前瞻性的开发和高度“统筹”，从深厚的文化积淀中、在新时代中重铸。
						<br />
					</a>
				</li>
				<li>
					<div class="zan"></div>
				</li>
			</ul>
			<ul class="page3_content1_ul1 page3_content1_ul2_3 page3_content1_ul4_3">
				<li>
					<h3>
						<a href="topAndBottom/xuhui_recommend.php?id=13">
							足迹徐汇
						</a>
					</h3>
				</li>
				<li>
					<a href="topAndBottom/xuhui_recommend.php?id=13">
						<img src="img/page3/page3_15.jpg"/>
					</a>
				</li>
				<li>
					<a href="topAndBottom/xuhui_recommend.php?id=13">
						2015年是中国人民抗日战争胜利70周年，也是世界反法西斯战争胜利70周年。在这样值得纪念的日子里，我们特别精选出徐汇区的部分景点，供大家追寻英雄的足迹，感受先辈们赤诚的爱国之心。其实，胜利的战场，不只在枪林弹雨中，更在于每一个敬业爱国者的坚定意志里。
						<br />
					</a>
				</li>
				<li>
					<div class="zan"></div>
				</li>
			</ul>
			<ul class="page3_content1_ul1 page3_content1_ul2_4 page3_content1_ul4_4">
				<li>
					<h3>
						<a href="topAndBottom/xuhui_recommend.php?id=4">
							2015上海旅游节
						</a>
					</h3>
				</li>
				<li>
					<a href="topAndBottom/xuhui_recommend.php?id=4">
						<img src="img/page3/page3_19.jpg" alt="" />
					</a>
				</li>
				<li>
					<a href="topAndBottom/xuhui_recommend.php?id=4">
					上海旅游节创办于1990年，每年的9月中旬至10月上旬在上海举行。上海旅游节是由上海市旅游局、上海市文化广播影视管理局、上海市商务委员会共同主办的，是目前国内规模最大，最具城市影响力的大型旅游节庆活动。上海至今已成功举办25届精彩难忘的旅游节。
						<br />
						　　上海旅游节以“人民大众的节日”为定位，以“走进美好与欢乐”为主题，通过丰富多彩、各具特色的上海各区县节庆活动，推进“一带一路”战略对旅游业的发展要求，吸引社会各界的大力支持和广泛参与。上海旅游节已成为上海建设世界著名旅游城市节庆盛典的标志，其中传统活动有上海旅游节花车巡游暨评比大奖赛、微游上海等；结合观光、休闲、娱乐、文体、会展、美食、购物于一体的旅游体验以及近百项市民参与的节庆活动，向海内外集中展现了四季上海都市风光、都市文化和都市人文的无穷魅力。
					</a>
				</li>
				<li>
					<div class="zan"></div>
				</li>
			</ul>
		</div>
	</div>
</div>
<div class="page3_footer">
	沪ICP备12040923号 COPYRIGHT© 2012 ALL RIGHTS RESERVED 版权所有 上海市徐汇区旅游咨询中心
</div>
</body>
<script src="js/ajax.js"></script>
<script src="js/menu.js"></script>
<script type="text/javascript" src="js/xuhui.js" ></script>
<script>
    	var menuAs=document.getElementById("menu_bottom").getElementsByTagName("a");
   		 for(var j=0;j<menuAs.length;j++){
            menuAs[j].style.backgroundColor="";
            menuAs[j].style.color="";
		}
        menuAs[2].style.backgroundColor="green";
        menuAs[2].style.color="white";
        //......................底下点赞按钮的功能.................
var heart=document.querySelectorAll(".zan");
var heartUser=window.sessionStorage.getItem("user")||window.localStorage.getItem("user");
var heartArr=[];
<?php
	while($arr=mysql_fetch_assoc($result)){	
?>
	heartArr.push("<?php echo $arr["zan"]?>");
<?php
}
	?>
for (var i = 0; i < heart.length; i++) {
	heart[i].innerHTML=heartArr[i];
	heart[i].index=i;
	heart[i].onclick=function(){
		var idIndex=Number(this.index)+1;
		var valueIndex=Number(this.innerHTML)+1;
		if(heartUser==null){
			alert("请登录后再赞");
			return;
		}else{
			fnAjax({
				url:"topAndBottom/userinfo_handle.php",
				sendType:"post",
				data:{
					act:"zan",
					user:heartUser,
					id:idIndex,
					value:valueIndex
				},
				succFn:function(str){
					alert(str);
					if(str=="点赞成功"){
						heart[idIndex-1].innerHTML=valueIndex;
					}
				}
			});
		}
	}
}

   </script>
</html>