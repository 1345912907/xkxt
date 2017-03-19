<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title>checkLogin.php</title>
	
    <meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
    <meta http-equiv="description" content="this is my page">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    
    <!--<link rel="stylesheet" type="text/css" href="./styles.css">-->

  </head>
  
  <body>
    <?php
    session_start();
	$myusername= $_POST["username"];
	$mypassword = $_POST["password"];
    
	//连接数据库服务器
	$con = mysql_connect("localhost:3306","root","root");
	if (!$con){
  		die('Could not connect: ' . mysql_error());
  	}
	//选择数据库
	mysql_select_db("xkxt_db", $con);
	//写SQL语句,并执行
	$sql = "select * from tbl_user where username='$myusername' and password='$mypassword' ";
	$result = mysql_query($sql,$con);
	$row = mysql_num_rows($result); //查询结果条数
	print_r("记录数量："+$row);
	if($row==1){
		$_SESSION["currentUser"] = $myusername;
		header("Location: index.php");
	} 
	else
		header("Location: login.php");
	mysql_close($con);
    ?>
  </body>
</html>
