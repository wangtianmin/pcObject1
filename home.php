<?php 
header("Content-Type:text/html;charset=utf-8");
mysql_connect(SAE_MYSQL_HOST_M.":".SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
mysql_select_db(SAE_MYSQL_DB);
mysql_query("set names utf8");
date_default_timezone_set("PRC");

$sql="SELECT * FROM project_messageBoard ORDER BY id DESC LIMIT 5";
$result=mysql_query($sql);

$useDataBase=$_GET["user"];
$sql1="SELECT email FROM project_userinfo_database WHERE user='{$useDataBase}'";
$result1=mysql_query($sql1);
$arrDataBase=mysql_fetch_assoc($result1);
$emailDataBase=$arrDataBase["email"];
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>千景旅游网</title>
		<link rel="stylesheet" type="text/css" href="css/home.css"/>
		<link rel="stylesheet" type="text/css" href="css/menu.css"/>
	</head>
	<body>
		<?php require_once "topAndBottom/top.html" ?>
		<div class="p1_wrap">
			<div class="p1_middle">
				<div class="p1_news">
					<div class="p1_banner">
						<div class="p1_banner_middle">
							<ul class="p1_list1">
								<li>
									<a href="###"><img src="img/page_1/p1_banner1.jpg"/></a>
								</li>
								<li>
									<a href="###"><img src="img/page_1/p1_banner2.jpg"/></a>
									<div class="list_info">
										<div class="info_title">安迪·沃霍尔:影子</div>
										<div class="info_content">10月29日，“安迪·沃霍尔：影子”中国首展将正式登陆上海余德耀美术馆。这场展览被誉为“关于无常的纪念碑”(霍兰德·科特，《纽约时报》)，展览由上海余德耀美术馆联合纽约迪亚艺术……</div>	
									</div>
								</li>
								<li>
									<a href="###"><img src="img/page_1/p1_banner3.jpg"/></a>
									<div class="list_info">
										<div class="info_title">上海迪士尼乐园攻略贴，带你吃喝玩乐~</div>
										<div class="info_content">自2016年6月16日起，您将可以探索一个前所未有的神奇世界，每个人都能在这里点亮心中奇梦。这就是上海迪士尼乐园，充满创造力、冒险精神与无穷精彩的快乐天地。</div>	
									</div>
								</li>
								<li>
									<a href="###"><img src="img/page_1/p1_banner4.jpg"/></a>
									<div class="list_info">
										<div class="info_title">徐汇记忆</div>
										<div class="info_content">展览馆面积约460平方米，是综合反映徐汇区历史区情的常设展览馆，展品从浩繁的馆藏档案和丰富的地情资料中，整理梳理出大量图文信息，并在区域内广泛开展资料文献征集活动，收集到了大量……</div>	
									</div>
								</li>
								<li>
									<a href="###"><img src="img/page_1/p1_banner5.png"/></a>
								</li>
								<li>
									<a href="###"><img src="img/page_1/p1_banner6.jpg"/></a>
									<div class="list_info">
										<div class="info_title">出境旅游文明提示</div>
										<div class="info_content">提升公民素质，提倡文明旅行，让我们携起手来，从我做起，从现在做起，从点滴做起，提升出境旅游文明素质，展示文明中国、礼仪之邦风采，为实现民族复兴中国梦贡献力量。</div>	
									</div>
								</li>
								<li>
									<a href="###"><img src="img/page_1/p1_banner7.jpg"/></a>
									<div class="list_info">
										<div class="info_title">五星品质高端品牌——上海中星铂尔曼大酒店</div>
										<div class="info_content">上海中星铂尔曼大酒店，来自法国的高端五星级酒店品牌近期为您带来一系列的活动：11月西班牙美食节，年会、年夜饭开始预定啦，还有高大上的巢为明“飞奔的思绪”主题画展展出中，赶紧走起……</div>	
									</div>
								</li>
								<li>
									<a href="###"><img src="img/page_1/p1_banner8.jpg"/></a>
									<div class="list_info">
										<div class="info_title">徐家汇旅游全攻略——iTravels·爱旅游App下载</div>
										<div class="info_content">iTravels·徐家汇是一款移动应用产品，以智能导游，移动服务为核心理念，为广大游客提供最为详尽的徐家汇的景点游玩和吃住娱乐等全方位的旅游咨询服务。</div>	
									</div>
								</li>
							</ul>
							<ul class="p1_list2">
								<li class="active"><a href="###"></a></li>
								<li><a href="###"></a></li>
								<li><a href="###"></a></li>
								<li><a href="###"></a></li>
								<li><a href="###"></a></li>
								<li><a href="###"></a></li>
								<li><a href="###"></a></li>
								<li><a href="###"></a></li>
							</ul>
						</div>
					</div>
					<div class="p1_newsgroup">
						<ul class="news_list">
							<li class="active_li"><a href="###">11月|卓越行新西兰旅游分享会</a></li>
							<li class="active_li2"><a href="topAndBottom/clickAndOpen/newsLetter_bopu.php">余德耀美术馆|波普之上</a></li>
							<li class="active_li3"><a href="topAndBottom/clickAndOpen/newsLetter_oldHouse.php">展览|住在老房子图片展</a></li>
							<li class="active_li"><a href="###">11月|她和她的旅行收藏故事</a></li>
							<li class="active_li2"><a href="topAndBottom/clickAndOpen/newsLetter_gallery.php">杜若云章画廊｜村上隆</a></li>
							<li class="active_li3"><a href="topAndBottom/clickAndOpen/newsLetter_photography.php">摄影艺术中心丨自然</a></li>
							<li class="active_li"><a href="###">11月|澳大利亚自驾旅行分享会</a></li>
							<li class="active_li2"><a href="topAndBottom/clickAndOpen/newsLetter_herry.php">话剧艺术中心｜亨利五世</a></li>
							<li class="active_li3"><a href="topAndBottom/clickAndOpen/newsLetter_dega.php">云艺术中心｜德加首展</a></li>
						</ul>
						<div class="roll_news">
							<ul class="news_list">
								<li>
									<img src="img/page_1/p1_fangkuai.png"/>
									<a href="###">[时讯]</a>
									<a href="###">1号线莘庄站南广场人行天桥明起改道 启用新双层天桥</a>
								</li>
								<li>
									<img src="img/page_1/p1_fangkuai.png"/>
									<a href="###">[时讯]</a>
									<a href="###">上海功德林素菜包、小杨生煎等入围中国金牌旅游小吃</a>
								</li>
								<li>
									<img src="img/page_1/p1_fangkuai.png"/>
									<a href="###">[时讯]</a>
									<a href="###">"一瓤棉花做到头"的崇明老布 "洋气"起来有多美</a>
								</li>
								<li>
									<img src="img/page_1/p1_fangkuai.png"/>
									<a href="###">[时讯]</a>
									<a href="###">信步于金色"地毯"上 沪18条马路"落叶不扫"实施时间确定</a>
								</li>
								<li>
									<img src="img/page_1/p1_fangkuai.png"/>
									<a href="###">[时讯]</a>
									<a href="###">佘山深坑酒店已封顶 魔都地下还有什么好玩的？</a>
								</li>
								<li>
									<img src="img/page_1/p1_fangkuai.png"/>
									<a href="###">[时讯]</a>
									<a href="###">上海又一家商场关门！国内首家易买得停业在即</a>
								</li>
								<li>
									<img src="img/page_1/p1_fangkuai.png"/>
									<a href="###">[时讯]</a>
									<a href="###">沪龙水南路越江隧道规划方案出炉 未来徐汇直达浦东仅10分钟！</a>
								</li>
								<li>
									<img src="img/page_1/p1_fangkuai.png"/>
									<a href="###">[时讯]</a>
									<a href="###">黄浦引导三大商圈转型升级 打造上海国际消费城市示范区</a>
								</li>
								<li>
									<img src="img/page_1/p1_fangkuai.png"/>
									<a href="###">[时讯]</a>
									<a href="###">延安路中运量公交明年初通车 拟沿用“71路”线路名</a>
								</li>
								<li>
									<img src="img/page_1/p1_fangkuai.png"/>
									<a href="###">[时讯]</a>
									<a href="###">沪上艺术家赴井冈山写生 让"井冈星火"在创作中"燎原"</a>
								</li>
								<li>
									<img src="img/page_1/p1_fangkuai.png"/>
									<a href="###">[时讯]</a>
									<a href="###">上海文艺会堂55年来首次商演 曾是文艺家小天地</a>
								</li>
								<li>
									<img src="img/page_1/p1_fangkuai.png"/>
									<a href="###">[时讯]</a>
									<a href="###">近千家酒店“牵手”携程 共建新型共赢酒店生态圈</a>
								</li>
								<li>
									<img src="img/page_1/p1_fangkuai.png"/>
									<a href="###">[时讯]</a>
									<a href="###">上海抽检显示：部分迪士尼授权商品纺织品不合格</a>
								</li>
								<li>
									<img src="img/page_1/p1_fangkuai.png"/>
									<a href="###">[时讯]</a>
									<a href="###">沪一批文化场馆将投用或开工 世博会博物馆年底建成</a>
								</li>
								<li>
									<img src="img/page_1/p1_fangkuai.png"/>
									<a href="###">[时讯]</a>
									<a href="###">上海一处碉堡巧变成景观 原是淞沪抗战遗迹</a>
								</li>
								<li>
									<img src="img/page_1/p1_fangkuai.png"/>
									<a href="###">[时讯]</a>
									<a href="###">上海大世界将于12月28日重新开放 感受体验传统文化</a>
								</li>
								<li>
									<img src="img/page_1/p1_fangkuai.png"/>
									<a href="###">[时讯]</a>
									<a href="###">中国城市基础设施建设大会开幕 聚焦智慧城市发展</a>
								</li>
								<li>
									<img src="img/page_1/p1_fangkuai.png"/>
									<a href="###">[时讯]</a>
									<a href="###">特大城市发展与健康如何并进 上海持续保持发达国家水平</a>
								</li>
								<li>
									<img src="img/page_1/p1_fangkuai.png"/>
									<a href="###">[时讯]</a>
									<a href="###">南京路将变样 市百一店与东方商厦将成一家</a>
								</li>
								<li>
									<img src="img/page_1/p1_fangkuai.png"/>
									<a href="###">[时讯]</a>
									<a href="###">外滩这几幢老建筑背后的故事 真是第一次听说</a>
								</li>
							</ul>
						</div>
					</div>
				</div>	
				<div class="p1_lookQj">
					<div class="lookQj_title">
						<img src="img/page_1/p1_lookQj.png"/>
						<div class="spot">
							热门旅游景点:
							<a href="topAndBottom/dbpage2.php?id=22" class="scenic">绍兴柯岩景区</a>
							|
							<a href="topAndBottom/dbpage2.php?id=14" class="scenic">周庄</a>
							|
							<a href="topAndBottom/dbpage2.php?id=23" class="scenic">普陀山</a>
							|
							<a href="topAndBottom/dbpage2.php?id=24" class="scenic">千岛湖</a>
							|
							<a href="topAndBottom/dbpage2.php?id=8" class="scenic">西湖</a>
							<a href="lookQj.php" class="more">更多>></a>
						</div>
					</div>
					<div class="spots1">
						<a href="topAndBottom/dbpage2.php?id=11"></a>
						<div class="mask">
							<h3>东钱湖旅游度假区</h3>
							<p>东钱湖风景旅游区是国家3A级景区,位于宁波市东南。区内的东钱湖是浙江省第一大天然淡水湖,东西宽4.5公里,南北长8.5公里,水域面积19.89平方公里。</p>
						</div>
					</div>
					<div class="spots2 spots">
						<a href="topAndBottom/dbpage2.php?id=6"></a>
						<div class="mask">
							<h3>武义清水湾沁温泉</h3>
						</div>
					</div>
					<div class="spots3 spots">
						<a href="topAndBottom/dbpage2.php?id=3"></a>
						<div class="mask">
							<h3>一城故事一江湖————盐官</h3>
						</div>
					</div>
					<div class="spots4 spots">
						<a href="topAndBottom/dbpage2.php?id=19"></a>
						<div class="mask">
							<h3>一个万里挑一的地方————云和</h3>
						</div>
					</div>
				</div>
				<div class="p1_xuhui">
					<div class="xuhui_title">
						<img src="img/page_1/p1_xuhui.png"/>
						<div class="spot">
							热门:
							<a href="topAndBottom/xuhui_recommend.php?id=7" class="scenic">精彩徐汇，经典七景</a>
							|
							<a href="topAndBottom/xuhui_recommend.php?id=2" class="scenic">品味老洋房</a>
							|
							<a href="topAndBottom/xuhui_recommend.php?id=12" class="scenic">徐家汇源</a>
							|
							<a href="topAndBottom/xuhui_recommend.php?id=10" class="scenic">跟着电影逛徐汇</a>
							|
							<a href="topAndBottom/xuhui_recommend.php?id=4" class="scenic">漫游慢品武康路</a>
							<a href="xuhui.php" class="more">更多>></a>
						</div>
					</div>
					<ul class="selection_list">
						<li>
							<a href="topAndBottom/xuhui_recommend.php?id=1">
								<img src="img/page_1/p1_selec1.jpg"/>
							</a>
							<a href="topAndBottom/xuhui_recommend.php?id=1" class="title">心醉夜色，徐汇风情小马路</a>
						</li>
						<li>
							<a href="topAndBottom/xuhui_recommend.php?id=4">
								<img src="img/page_1/p1_selec2.jpg"/>
							</a>
							<a href="topAndBottom/xuhui_recommend.php?id=4" class="title">漫游慢品武康路</a>
						</li>
						<li>
							<a href="topAndBottom/xuhui_recommend.php?id=7">
								<img src="img/page_1/p1_selec3.jpg"/>
							</a>
							<a href="topAndBottom/xuhui_recommend.php?id=7" class="title">精彩徐汇，经典七景</a>
						</li>
						<li>
							<a href="topAndBottom/xuhui_recommend.php?id=11">
								<img src="img/page_1/p1_selec4.jpg"/>
							</a>
							<a href="topAndBottom/xuhui_recommend.php?id=11" class="title">下午茶推荐</a>
						</li>
						<li>
							<a href="topAndBottom/xuhui_recommend.php?id=2">
								<img src="img/page_1/p1_selec5.jpg"/>
							</a>
							<a href="topAndBottom/xuhui_recommend.php?id=2" class="title">品味小洋房</a>
						</li>
						<li>
							<a href="topAndBottom/xuhui_recommend.php?id=5">
								<img src="img/page_1/p1_selec6.jpg"/>
							</a>
							<a href="topAndBottom/xuhui_recommend.php?id=5" class="title">创意园区</a>
						</li>
						<li>
							<a href="topAndBottom/xuhui_recommend.php?id=8">
								<img src="img/page_1/p1_selec7.jpg"/>
							</a>
							<a href="topAndBottom/xuhui_recommend.php?id=8" class="title">精彩徐家汇</a>
						</li>
						<li>
							<a href="topAndBottom/xuhui_recommend.php?id=12">
								<img src="img/page_1/p1_selec8.jpg"/>
							</a>
							<a href="topAndBottom/xuhui_recommend.php?id=12" class="title">徐家汇源</a>
						</li>
						<li>
							<a href="topAndBottom/xuhui_recommend.php?id=3">
								<img src="img/page_1/p1_selec9.jpg"/>
							</a>
							<a href="topAndBottom/xuhui_recommend.php?id=3" class="title">衡复地区精品酒店</a>
						</li>
						<li>
							<a href="topAndBottom/xuhui_recommend.php?id=6">
								<img src="img/page_1/p1_selec10.jpg"/>
							</a>
							<a href="topAndBottom/xuhui_recommend.php?id=6" class="title">绿色生态游</a>
						</li>
					</ul>
				</div>
				<div class="p1_travels">
					<div class="travels">
						<div class="title">
							<a href="###">>>更多</a>
						</div>
						<ul class="essay_list">
							<li>
								<a href="topAndBottom/travel_notes_1.html" class="tu">
									<img src="img/page_1/p1_essay1.png"/>
								</a>
								<a href="topAndBottom/travel_notes_1.html" class="topic">2016年10月29日野性勘察加，自在观棕熊！自然摄影分享会精彩回顾</a>
								<span class="author">
									<img src="img/page_1/p1_author.gif"/>
									作者：vickydou 回复：14:23:22
									<img src="img/page_1/p1_reply.png"/>
									<strong>0</strong>
									/
									<strong>76</strong>
								</span>
								<a href="topAndBottom/travel_notes_1.html" class="outline">国庆刚过，金秋十月，我们又迎来了新一次的旅行分享会活动。秋高气爽，游客们纷至沓来，在中心听嘉宾分享特别的旅游经……</a>
							</li>
							<li>
								<a href="topAndBottom/travel_notes_2.html" class="tu">
									<img src="img/page_1/p1_essay2.jpg"/>
								</a>
								<a href="topAndBottom/travel_notes_2.html" class="topic">2016年9月24日旅行中的那些人和事旅行分享会精彩大回顾</a>
								<span class="author">
									<img src="img/page_1/p1_author.gif"/>
									作者：vickydou 回复：10:18:43
									<img src="img/page_1/p1_reply.png"/>
									<strong>0</strong>
									/
									<strong>257</strong>
								</span>
								<a href="topAndBottom/travel_notes_2.html" class="outline">今天武康路旅游咨询中心如期举办了“人来人往——旅行中的那些人和事”旅行分享会。秋高气爽，游客们纷至沓来，陆续入……</a>
							</li>
							<li>
								<a href="topAndBottom/travel_notes_3.html" class="tu">
									<img src="img/page_1/p1_essay3.jpg"/>
								</a>
								<a href="topAndBottom/travel_notes_3.html" class="topic">2016年8月27日加勒比海邮轮之旅旅行分享会精彩回顾</a>
								<span class="author">
									<img src="img/page_1/p1_author.gif"/>
									作者：vickydou 回复：10:26:36
									<img src="img/page_1/p1_reply.png"/>
									<strong>0</strong>
									/
									<strong>371</strong>
								</span>
								<a href="topAndBottom/travel_notes_3.html" class="outline">在邮轮上畅游加勒比海风光。看大海，看日出，在甲板上晒晒日光浴，在宴会厅吃上一顿海鲜大餐，还有比这更美好的事吗？……</a>
							</li>
						</ul>
					</div>
					<div class="notice">
						<div class="title"></div>
						<ul class="notice_list">
							<li>
								<a href="###">[千景活动]</a>
								<a href="###">【活动报名】2016年12月3日“漫游慢品武康路老房子故事会“活动</a>
							</li>
							<li>
								<a href="###">[千景活动]</a>
								<a href="###">寻找狂野之中的自然悸动 ——西澳大利亚自驾旅行分享会</a>
							</li>
							<li>
								<a href="###">[千景活动]</a>
								<a href="###">展览 | "住在老房子"图片展</a>
							</li>
							<li>
								<a href="###">[千景活动]</a>
								<a href="###">心醉夜色武康路 | “七大洲的小记忆” ——她和她的旅行收藏故事</a>
							</li>
							<li>
								<a href="###">[活动分享]</a>
								<a href="###">2016年11月第六十一期【漫游慢品武康路活动】精彩大回顾！</a>
							</li>
							<li>
								<a href="###">[活动分享]</a>
								<a href="###">2016年10月29日野性勘察加，自在观棕熊！自然摄影分享会精彩回顾</a>
							</li>
							<li>
								<a href="###">[千景活动]</a>
								<a href="###">100%pure New Zealand纯净新西兰 ——卓越行新西兰旅游分享会</a>
							</li>
							<li>
								<a href="###">[千景活动]</a>
								<a href="###">千景活动：野性勘察加，自在观棕熊！堪察加自然摄影分享会</a>
							</li>
							<li>
								<a href="###">[千景活动]</a>
								<a href="###">【活动报名】2016年11月5日“漫游慢品武康路老房子故事会“活动</a>
							</li>
							<li>
								<a href="###">[活动分享]</a>
								<a href="###">2016年10月第六十期【漫游慢品武康路活动】精彩大回顾！</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="p1_theme">
					<div class="title">
						<a href="###">>>更多</a>
					</div>
					<div class="wrap">
						<div class="middle">
							<ul class="list">
								<li>
									<a href="topAndBottom/wukang_gaikuang.php">
										<img src="img/page_1/p1_theme1.jpg"/>
									</a>
									<h4>“建筑师镜头中的老房子”摄影作品展</h4>
								</li>
								<li>
									<a href="topAndBottom/binJing.php">
										<img src="img/page_1/p1_theme2.jpg"/>
									</a>
									<h4>徐家汇源景区参观温馨提示</h4>
								</li>
								<li>
									<a href="topAndBottom/binJing.php">
										<img src="img/page_1/p1_theme3.jpg"/>
									</a>
									<h4>【拍拍上海各区的老房子】之黄埔区</h4>
								</li>
								<li>
									<a href="topAndBottom/wukang_gaikuang.php">
										<img src="img/page_1/p1_theme4.jpg"/>
									</a>
									<h4>金山旅游：你需要一个金周末</h4>
								</li>
								<li>
									<a href="topAndBottom/wukang.php">
										<img src="img/page_1/p1_theme5.jpg"/>
									</a>
									<h4>武康路</h4>
								</li>
								<li>
									<a href="topAndBottom/binJing.php">
										<img src="img/page_1/p1_theme6.jpg"/>
									</a>
									<h4>徐汇滨江--新风貌</h4>
								</li>
								<li>
									<a href="topAndBottom/binJing.php">
										<img src="img/page_1/p1_theme7.jpg"/>
									</a>
									<h4>缤纷徐家汇</h4>
								</li>
								<li>
									<a href="topAndBottom/wukang.php">
										<img src="img/page_1/p1_theme8.jpg"/>
									</a>
									<h4>徐汇区老房子水彩画展</h4>
								</li>
								<li>
									<a href="topAndBottom/wukang_gaikuang.php">
										<img src="img/page_1/p1_theme1.jpg"/>
									</a>
									<h4>“建筑师镜头中的老房子”摄影作品展</h4>
								</li>
								<li>
									<a href="topAndBottom/binJing.php">
										<img src="img/page_1/p1_theme2.jpg"/>
									</a>
									<h4>徐家汇源景区参观温馨提示</h4>
								</li>
								<li>
									<a href="topAndBottom/binJing.php">
										<img src="img/page_1/p1_theme3.jpg"/>
									</a>
									<h4>【拍拍上海各区的老房子】之黄埔区</h4>
								</li>
								<li>
									<a href="topAndBottom/wukang_gaikuang.php">
										<img src="img/page_1/p1_theme4.jpg"/>
									</a>
									<h4>金山旅游：你需要一个金周末</h4>
								</li>
							</ul>
						</div>
					</div>
					<a href="###" class="last"></a>
					<a href="###" class="next"></a>
				</div>
				<div class="p1_consult">
					<div class="consult">
						<div class="title"></div>
						<img src="img/page_1/p1_logo.png"/>
						<div class="login">
							<a href="###" class="active">游客登录</a>
							<a href="###">会员登录</a>	
						</div>
						<div id="form1" class="form">
							游客 <input type="text" name="tourist" id="tourist1" value="" class="tourist"/>
							Email <input type="text" name="email" id="email1" value="" class="email"/>
							<textarea name="" rows="4" cols="30"></textarea>
							<input type="submit" value="发表" id="publish1" class="publish"/>
						</div>
						<div id="form2" class="form">
							会员 <input type="text" name="tourist" id="tourist2" value="" class="tourist"/>
							Email <input type="text" name="email" id="email2" value="" class="email"/>
							<textarea id="huiyuanText" name="" rows="4" cols="30"></textarea>
							<input type="submit" value="发表" id="publish2" class="publish"/>
						</div>
					</div>
					<div class="division"></div>
					<div class="problem">
						<div class="title">
							<a id="lookAll" href="###">>>查看全部</a>
						</div>
						<ul class="problem_list" id="problem_list">
							<!--<li>
								<span>苏SJDH：</span>
								<a href="###">很有老上海的味道，灵额灵额！</a>
							</li>
							<li>
								<span>李梅梅：</span>
								<a href="###">再一次透过历史建筑深刻的感受到上海这座魔都魅力。感慨良多，也使我在这座城市更加幸福的生活下去。</a>
							</li>
							<li>
								<span>沈静爱杨磊：</span>
								<a href="###">爱上海，希望自己的家乡一直美下去，希望每个人都热爱这座城市，当自己的一样永远的呵护着。致老上海情怀的武康路。</a>
							</li>
							<li>
								<span>Maggie：</span>
								<a href="###">上次来这儿是深秋，这次来已是来年初夏，每一次都会有不一样的心情。旅行不为看风景，只为遇见更好的自己。</a>
							</li>
							<li>
								<span>刘馥源：</span>
								<a href="###">羊年大吉！今天在这里度过了美好的下午，悠扬的乐曲，动听的歌声，让人似乎回到时代倒流的上海滩。</a>
							</li>-->
							<?php 
								if(mysql_num_rows($result)>0){
									while($arr=mysql_fetch_assoc($result)){	
							?>
								<li>
									<span><?php echo $arr["user"]; ?>:</span>
									<a href="###"><?php echo $arr["message"]; ?></a>
								</li>
							<?php
									}
								}
							?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="sidebar">
			<a href="###"><img src="img/page_1/p1_volunteer.png"/></a>
			<img src="img/page_1/p1_weibo.png" class="barcode"/>
			<img src="img/page_1/p1_weixin.png" class="barcode"/>
		</div>
		<div id="liuyanban">
			<div id="liuyan">
				<p>留言板</p>
				<div id="cha">X</div>
				<ul id="liuyanList1">
					<!--<li>
						<p>苏SJDH：</p>
						<a href="###">很有老上海的味道，灵额灵额！</a>
						<p>2016-11-22 15:23:45</p>
					</li>
					<li>
						<p>李梅梅：</p>
						<a href="###">再一次透过历史建筑深刻的感受到上海这座魔都魅力。感慨良多，也使我在这座城市更加幸福的生活下去。</a>
						<p>2016-11-22 15:23:45</p>
					</li>
					<li>
						<p>沈静爱杨磊：</p>
						<a href="###">爱上海，希望自己的家乡一直美下去，希望每个人都热爱这座城市，当自己的一样永远的呵护着。致老上海情怀的武康路。</a>
						<p>2016-11-22 15:23:45</p>
					</li>
					<li>
						<p>Maggie：</p>
						<a href="###">上次来这儿是深秋，这次来已是来年初夏，每一次都会有不一样的心情。旅行不为看风景，只为遇见更好的自己。</a>
						<p>2016-11-22 15:23:45</p>
					</li>
					<li>
						<p>刘馥源：</p>
						<a href="###">羊年大吉！今天在这里度过羊年大吉！今天在这里度过羊年大吉！今天在这里度过羊年大吉！今天在这里度过羊年大吉！今天在这里度过羊年大吉！今天在这里度过羊年大吉！今天在这里度过羊年大吉！今天在这里度过羊年大吉！今天在这里度过羊年大吉！今天在这里度过羊年大吉！今天在这里度过羊年大吉！今天在这里度过羊年大吉！今天在这里度过羊年大吉！今天在这里度过羊年大吉！今天在这里度过羊年大吉！今天在这里度过羊年大吉！今天在这里度过羊年大吉！今天在这里度过羊年大吉！今天在这里度过羊年大吉！今天在这里度过羊年大吉！今天在这里度过了美好的下午，悠扬的乐曲，动听的歌声，让人似乎回到时代倒流的上海滩。</a>
						<p>2016-11-22 15:23:45</p>
					</li>-->
				</ul>
				<a href="###" id="liuyanPre">上一页</a>
				<a href="###" id="liuyanNext">下一页</a>
				<input id="yemianText" type="text" />
				<input type="button" id="yemianBtn" value="确定" />
				<p id="zonggong">-共有10页-</p>
			</div>
		</div>
		<?php require_once "topAndBottom/bottom.html" ?>
	</body>
	<script src="js/ajax.js"></script>
	<script type="text/javascript" src="js/home.js"></script>
	<script src="js/menu.js"></script>	
	<script>
    		var menuAs=document.getElementById("menu_bottom").getElementsByTagName("a");
    		for(var j=0;j<menuAs.length;j++){
            menuAs[j].style.backgroundColor="";
            menuAs[j].style.color="";
		}
        menuAs[0].style.backgroundColor="green";
        menuAs[0].style.color="white";
        
        //下句避免localstorage储存关闭浏览器再打开，把Email覆盖为空
         var email="<?php echo $emailDataBase?>"||window.localStorage.getItem("email")||window.sessionStorage.getItem("email");
        if(window.sessionStorage.getItem("user")!=null||window.localStorage.getItem("user")!=null){
        		if(window.sessionStorage.getItem("user")!=null){
        			if(email!=null){
        				window.sessionStorage.setItem("email",email);
        			}
        		}
        		if(window.localStorage.getItem("user")!=null){
        			if(email!=null){
        			window.localStorage.setItem("email",email);
        			}
        		}
        	}
        /**************************在线咨询******************************/
var logins = document.querySelectorAll(".login a");
var forms = document.getElementsByClassName("form");
var tourist2=document.getElementById("tourist2");
var email2=document.getElementById("email2");
for(var i=0;i<logins.length;i++){
	logins[i].index = i;
	
	logins[i].onclick = function(){
		for (var j=0;j<logins.length;j++) {
			logins[j].className = "";
		}
		for (var j=0;j<forms.length;j++) {
			forms[j].style.display = "none";
		}
		logins[this.index].className = "active";
		forms[this.index].style.display = "block";
	}
}
var loginFormUser=window.sessionStorage.getItem("user")||window.localStorage.getItem("user");
var loginFormEmail=window.sessionStorage.getItem("email")||window.localStorage.getItem("email");
if(loginFormUser!=null){
	logins[0].className = "";
	logins[1].className = "active";
	forms[0].style.display = "none";
	forms[1].style.display = "block";
    email2.value=loginFormEmail;
	tourist2.value=loginFormUser;
}
    </script>
</html>
   