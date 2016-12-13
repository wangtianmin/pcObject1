<?php
	mysql_connect(SAE_MYSQL_HOST_M.":".SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
	mysql_select_db(SAE_MYSQL_DB);
	mysql_query("set names utf8");
	date_default_timezone_set("PRC");
	
	$sql="SELECT * FROM project_Register_yanzheng";
	$result=mysql_query($sql);
	
	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>注册页面</title>
		<link rel="stylesheet" type="text/css" href="../css/loginRegister/register.css"/>
	</head>
	<body>
		<div id="register_top">
				<div id="reg_left">
					<img src="../img/reg.jpg" alt="" /><span><br/></span>
					<label id="reg_label1" for="reg_user">* 用户名</label>
					<input type="text" id="reg_user" /><span class="reg_span">可输入英文、数字、下划线和汉字，至少4个字符，最长14个字符或7个汉字</span><span><br/><span>
						<span><br/><span><span><br/><span>
					<label id="reg_label2" for="reg_pass">* 密码</label>
					<input type="password" id="reg_pass" /><span class="reg_span">至少6个字符，可以包含英文、数字、下划线和汉字</span><span><br/><span>
						<span><br/><span><span><br/><span>
					<label id="reg_label3" for="reg_passAgain">* 确认密码</label>
					<input type="password" id="reg_passAgain" /><span class="reg_span">请再次输入密码</span><span><br/><span>
						<span><br/><span><span><br/><span>
					<label id="reg_label4" for="reg_phone">* 手机号码</label>
					<input type="text" id="reg_phone" /><span class="reg_span">请输入正确的手机号，便于我们与你取得联系</span><span><br/><span>
						<span><br/><span><span><br/><span>
					<label id="reg_label5" for="reg_yanzhengma">* 验证码</label>
					<input type="text" id="reg_yanzhengma" />
					<img src="../img/yanzhengma/yan1.jpeg" alt="" id="yanzheng" />
					<a href="###" id="noknow">看不清?</a><span class="reg_span"></span>
					<span><br/><span>
					<input type="button" id="reg_btn" value="立即注册" />
				</div>
				<!--<div id="reg_xian"></div>-->
				<div id="reg_right">
					<p id="reg_tishi">已有千景账号？请直接登录</p>
					<a href="login.html" id="reg_login">登录</a>
					<p id="reg_tishi2">你也可以用其他账号登录:</p>
					<a href="###" id="reg_weibo"></a>
					<a href="###" id="reg_qq"></a>
				</div>
		</div>
		<div id="register_bottom">
			<p>联系我们 021-64339773</p>
			<p>沪ICP备12040923号 COPYRIGHT©2012 ALL RIGHTS RESERVED 版权所有 上海市徐汇区旅游公共服务中心
</p>
		</div>
	</body>
	<script src="../js/ajax.js"></script>
	<script>
        function rand(min,max){
				return parseInt(Math.random()*(max-min+1)+min);
			}
			
					//************************输入框后面的提示*********************************
			var reg_spans=document.getElementsByClassName("reg_span");
			
			var reg_btn=document.getElementById("reg_btn");
			
			var reg_user=document.getElementById("reg_user");
			var reg_pass=document.getElementById("reg_pass");
			var reg_passAgain=document.getElementById("reg_passAgain");
			var reg_phone=document.getElementById("reg_phone");
			var reg_yanzhengma=document.getElementById("reg_yanzhengma");
			//************************聚焦失焦事件*********************************
			var regUserBol=false;
			var regPassBol=false;
			var regPassAgainBol=false;
			var regPhoneBol=false;
			var regYanzhengBol=false;
			
			reg_user.onfocus=function(){
				reg_user.style.borderColor="";
				reg_spans[0].style.display="inline";
				reg_spans[0].style.color="black";
			}
			reg_user.onblur=function(){
				reg_spans[0].style.display="none";
				if((/[@#\$%\^\&\*\?]+/g.test(reg_user.value))){
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
					fnAjax({
						url:"userinfo_handle.php",
						sendType:"post",
						data:{
							act:"tishi",
							user:reg_user.value
						},
						succFn:function(str){
							if(str!=""){
								reg_spans[0].style.display="inline";
								reg_spans[0].innerHTML=str;
								reg_spans[0].style.color="red";
							}else{
								regUserBol=true;
							}	
						}
					});
					
				}
			}
			reg_pass.onfocus=function(){
				reg_pass.style.borderColor="";
				reg_spans[1].style.display="inline";
				reg_spans[1].style.color="black";
			}
			reg_pass.onblur=function(){
				reg_spans[1].style.display="none";
				if((/[@#\$%\^\&\*\?]+/g.test(reg_pass.value))){
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
                if(reg_yanzhengma.value==""){
                		reg_yanzhengma.style.borderColor="red";
					 reg_spans[4].style.display="inline";
					reg_spans[4].style.color="red";
                    reg_spans[4].innerHTML="请输入验证码";
                }
                var user=reg_user.value;
                var pass=reg_pass.value;
                var phone=reg_phone.value;
                if(regUserBol&&regPassBol&&regPassAgainBol&&regPhoneBol&&regYanzhengBol){
                		fnAjax({
                			url:"userinfo_handle.php",
                			sendType:"post",
                			data:{
                				user:user,
                				pass:pass,
                				phone:phone,
                				act:"register"
                			},
                			succFn:function(str){
                				alert(str);
                				window.location.href="login.html";
                			}
                		});
                }
			}
			//************************验证码事件*********************************
            var yanzheng=document.getElementById("yanzheng");
            var noknow=document.getElementById("noknow");
            var r=rand(0,9);
            var arr1=[];
        	var arr2=[];
        
        	<?php 
            	if(mysql_num_rows($result)>0){
                    while($arr=mysql_fetch_assoc($result)){
                        
              ?>
        		arr1.push("<?php echo $arr["imgurl"];?>");
        		arr2.push("<?php echo $arr["imgvalue"]?>");
      	  <?php
                    }
                }
				
            ?>
        	yanzheng.src=arr1[r];
       		 reg_yanzhengma.onblur=function(){
        		if(!(/^[A-z0-9]{4}$/.test(arr2[r]))){
                    reg_spans[4].style.display="inline";
        			reg_yanzhengma.style.borderColor="red";
        			reg_spans[4].innerHTML="输入了非法字符或是写多了";
        			reg_spans[4].style.color="red";
        			r=rand(0,9);
        			yanzheng.src=arr1[r];
                }else if(reg_yanzhengma.value.toLowerCase()==arr2[r].toLowerCase()){
        			reg_yanzhengma.style.borderColor="";
        			reg_spans[4].innerHTML="";
        			regYanzhengBol=true;
        		}else{
                     if(reg_yanzhengma.value!=""){
                    reg_spans[4].style.display="inline";
        			reg_yanzhengma.style.borderColor="red";
        			reg_spans[4].innerHTML="写错了，重新输入";
        			reg_spans[4].style.color="red";
        			r=rand(0,9);
        			yanzheng.src=arr1[r];
                     }
        		}
                
        }
       		 noknow.onclick=function(){
       		 	r=rand(0,9);
        			yanzheng.src=arr1[r];
       		 }
	</script>
</html>
