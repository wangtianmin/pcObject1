<?php
	mysql_connect(SAE_MYSQL_HOST_M.":".SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
	mysql_select_db(SAE_MYSQL_DB);
	mysql_query("set names utf8");
	date_default_timezone_set("PRC");
	
	$act=$_POST["act"];
	
	switch ($act){
		case "register":
			$user=$_POST["user"];
			$pass=$_POST["pass"];
			$phone=$_POST["phone"];
			$sql="INSERT INTO project_userinfo (id,user,pass,phone) VALUE (NULL,'{$user}','{$pass}','{$phone}')";
			$result=mysql_query($sql);
			if(mysql_affected_rows()>0){
				echo "注册成功";
			}else{
				echo "注册失败";
			}
		break;
		case "tishi":
			$user=$_POST["user"];
			$sql="SELECT * FROM project_userinfo WHERE user='{$user}'";
			$result=mysql_query($sql);
			if(mysql_num_rows($result)>0){
				echo "注册用户名已存在";
			}
		break;
		case "login":
			$user=$_POST["user"];
			$pass=$_POST["pass"];
			$sql="SELECT * FROM project_userinfo WHERE user='{$user}'";
			$result=mysql_query($sql);
			if(mysql_num_rows($result)>0){
				$arr=mysql_fetch_assoc($result);
				$pass1=$arr["pass"];
				if($pass==$pass1){
					echo "登陆成功";
				}else{
					echo "密码不正确";
				}
			}else{
				echo "没有该用户";
				
			}
		break;
		case "messageBoard":
			$user=$_POST["user"];
			$message=$_POST["message"];
			$time=$_POST["time1"];
			$sql="INSERT INTO project_messageBoard (id,user,message,time) VALUE (NULL,'{$user}','{$message}','{$time}')";
			$result=mysql_query($sql);
			if(mysql_affected_rows()>0){
				$sql="SELECT * FROM project_messageBoard ORDER BY id DESC LIMIT 5";
				$result=mysql_query($sql);
				while($arr=mysql_fetch_assoc($result)){
					$arr1[]=$arr;
				}
				echo json_encode($arr1);
			}else{
				echo "发表失败";
			}
		break;
		case "lookAll":
			$sql="SELECT * FROM project_messageBoard";
			$result=mysql_query($sql);
			$records=mysql_num_rows($result);
			$currentPage=$_POST["currentPage"]*5;
        $sql="SELECT * FROM project_messageBoard ORDER BY id DESC LIMIT {$currentPage},5";
			$result=mysql_query($sql);
			while($arr=mysql_fetch_assoc($result)){
                	$arr["record"]=$records;
					$arr2[]=$arr;
				}
				echo json_encode($arr2);
		break;
		case "tiebaMore":
			$sql="SELECT * FROM project_tie";
			$result=mysql_query($sql);
			$records=mysql_num_rows($result);
			$currentPage=$_POST["currentPage"]*10;
			$sql="SELECT id,readCount,type,theme,author,shareTime FROM project_tie ORDER BY id DESC LIMIT {$currentPage},10";
			$result=mysql_query($sql);
			while($arr=mysql_fetch_assoc($result)){
                	$arr["record"]=$records;
					$arr2[]=$arr;
				}
				echo json_encode($arr2);
		break;
		case "removeTie":
			$id=$_POST["id"];
			$sql="DELETE FROM project_tie WHERE id='{$id}'";
			$result=mysql_query($sql);
			if(mysql_affected_rows()>0){
				$sql="SELECT * FROM project_tie";
				$result=mysql_query($sql);
				$records=mysql_num_rows($result);
				$currentPage=$_POST["currentPage"]*10;
				$sql="SELECT id,readCount,type,theme,author,shareTime FROM project_tie ORDER BY id DESC LIMIT {$currentPage},10";
				$result=mysql_query($sql);
				while($arr=mysql_fetch_assoc($result)){
               	 	$arr["record"]=$records;
						$arr2[]=$arr;
					}
					echo json_encode($arr2);
			}
		break;
		case "kanTie":
			$id=$_POST["id"];
			$readCount=$_POST["tiecount"];
			$sql="UPDATE project_tie SET readCount='{$readCount}' WHERE id='{$id}'";
			$result=mysql_query($sql);
			if(mysql_affected_rows()>0){
				$sql="SELECT * FROM project_tie WHERE id='{$id}'";
				$result=mysql_query($sql);
				if(mysql_num_rows($result)>0){
					$arr=mysql_fetch_assoc($result);
					echo json_encode($arr);
				}
			}
		break;
		case "faTie":
			$user=$_POST["user"];
			$type=$_POST["type"];
			$theme=$_POST["theme"];
			$shareTime=$_POST["shareTime"];
			$content=$_POST["content"];
			$sql="INSERT INTO project_tie (id,readCount,type,theme,author,shareTime,content) VALUE (NULL,0,'{$type}','{$theme}','{$user}','{$shareTime}','{$content}')";
			$result=mysql_query($sql);
			if(mysql_affected_rows()>0){
				$sql="SELECT * FROM project_tie";
				$result=mysql_query($sql);
				$records=mysql_num_rows($result);
				$currentPage=$_POST["currentPage"]*10;
				$sql="SELECT id,readCount,type,theme,author,shareTime FROM project_tie ORDER BY id DESC LIMIT {$currentPage},10";
				$result=mysql_query($sql);
				while($arr=mysql_fetch_assoc($result)){
                		$arr["record"]=$records;
						$arr2[]=$arr;
					}
				echo json_encode($arr2);
			}
		break;
		case "selectType":
			$type=$_POST["type"];
			if($type=="*"){
				$sql="SELECT * FROM project_tie";
			}else{
				$sql="SELECT * FROM project_tie WHERE type='{$type}'";
			}
			$result=mysql_query($sql);
			$records=mysql_num_rows($result);
			$currentPage=$_POST["currentPage"]*10;
			if($type=="*"){
				$sql="SELECT id,readCount,type,theme,author,shareTime FROM project_tie ORDER BY id DESC LIMIT {$currentPage},10";
			}else{
				$sql="SELECT id,readCount,type,theme,author,shareTime FROM project_tie WHERE type='{$type}' ORDER BY id DESC LIMIT {$currentPage},10";
			}
			$result=mysql_query($sql);
				while($arr=mysql_fetch_assoc($result)){
                		$arr["record"]=$records;
						$arr2[]=$arr;
					}
				echo json_encode($arr2);
		break;
		case "changePass":
        	$user=$_POST["user"];
        	$oldPass=$_POST["oldPass"];
        	$newPass=$_POST["newPass"];
	    $sql="SELECT * FROM project_userinfo WHERE pass='{$oldPass}' AND user='{$user}'";
        	$result=mysql_query($sql);
        	if(mysql_num_rows($result)>0){
                $sql="UPDATE project_userinfo SET  pass='{$newPass}' WHERE user='{$user}'";
                $result=mysql_query($sql);
                if(mysql_affected_rows()>0){
                	echo "密码修改成功";
                }else{
                	echo "密码修改失败";
                }
            }else{
            	echo "原始密码不正确";
            }
        break;
        case "info":
			$user = $_POST["user"];
			$email = $_POST["email"];
			$xingm = $_POST["xingm"];
			$sex = $_POST["sex"];
			$birth = $_POST["birth"];
			$identity = $_POST["identity"];
			$adress = $_POST["adress"];
			$phone = $_POST["phone"];
			$weixin = $_POST["weixin"];
			$country = $_POST["country"];
			$city = $_POST["city"];
			$postcode = $_POST["postcode"];
			//判断该用户信息是否已经修改过信息
			$sql = "SELECT user FROM project_userinfo_database WHERE user='{$user}'";
			$result = mysql_query($sql);
			if(mysql_num_rows($result)>0){
				//表示数据库已经有该用户的信息
				$sql = "UPDATE project_userinfo_database SET email='{$email}',name='{$xingm}',sex='{$sex}',birth='{$birth}',identity='{$identity}',address='{$adress}',phone='{$phone}',weixin='{$weixin}',country='{$country}',city='{$city}',postcode='{$postcode}' WHERE user='{$user}'";
				$result = mysql_query($sql);
				if(mysql_affected_rows()>0){
					echo '{"error":"0","msg":"修改成功"}';
				}else{
					echo '{"error":"1","msg":"修改失败"}';
				}
			}else{
				//表示没有该用户的信息
				$sql="INSERT INTO project_userinfo_database (id,user,email,name,sex,birth,identity,address,phone,weixin,country,city,postcode) VALUE (NULL,'{$user}','{$email}','{$xingm}','{$sex}','{$birth}','{$identity}','{$adress}','{$phone}','{$weixin}','{$country}','{$city}','{$postcode}')";
				$result = mysql_query($sql);
				if(mysql_affected_rows()>0){
					echo '{"error":"0","msg":"添加成功"}';
				}else{
					echo '{"error":"1","msg":"添加失败"}';
				}
			}
		break;
        case "getphone":
			$user = $_POST["user"];
        	$sql = "SELECT * FROM project_userinfo WHERE user='{$user}'";
        	$result = mysql_query($sql);
        	if(mysql_num_rows($result)>0){
				while($arr = mysql_fetch_assoc($result)){
					echo $arr["phone"];
				}
			}else{
				echo '{"error":"1","msg":"查找失败"}';
			}
		break;
		case "zan":
			$id=$_POST["id"];
			$user=$_POST["user"];
			$value=$_POST["value"];
			$sql="SELECT zan FROM project_userinfo WHERE user='{$user}'";
			$result=mysql_query($sql);
			if(mysql_num_rows($result)>0){
				$arr=mysql_fetch_assoc($result);
				$arr1=explode(",",$arr["zan"]);
				if(in_array($id,$arr1)){
					echo "该用户已赞过";
				}else{
					$arr1[]=$id;
					$str1=implode(",",$arr1);
					$sql="UPDATE project_userinfo SET zan='{$str1}' WHERE user='{$user}'";
					$result=mysql_query($sql);
					if(mysql_affected_rows()>0){
						$sql="UPDATE project_zan SET zan='{$value}' WHERE id='{$id}'";
						$result=mysql_query($sql);
						if(mysql_affected_rows()>0){
							echo "点赞成功";
						}
					}
				}
			}
		break;
		default:echo $act;
		break;
	}
?>