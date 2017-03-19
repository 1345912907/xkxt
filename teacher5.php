<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>新纶科技</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/master.css" rel="stylesheet">
	<link href="css/index.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- ##########页首########## -->
<!-- 公司logo -->
<div class="container title-logo">
	<div class="row">
        <div class="col-md-4">
			<a href="index.html">
				
			</a>
        </div>
		<div class="col-md-3">
        </div>
		<div class="col-md-2">
        </div>
		<div class="col-md-3">
        </div>
    </div>
</div>

<!-- 导航条 -->
<nav class="navbar navbar-default" role="navigation">
	<div class="container">

			<ul class="nav navbar-nav" style="width:100%;">
				<li class="active nav-top">
					<a href="index.html">首页</a>
					<img class="img-responsive" src="images/header.jpg" alt="网站logo">
				</li>

				<li class="dropdown nav-top">
					<a href="student.php" class="dropdown-toggle on" data-toggle="dropdown">学生信息管理</a>
					
				</li>

				<li class="dropdown nav-top">
					<a href="teacher.php" class="dropdown-toggle on" data-toggle="dropdown">教师信息管理</a>
				</li>

				<li class="dropdown nav-top">
					<a href="course.php" class="dropdown-toggle on" data-toggle="dropdown">课程信息管理</a>
				</li>
				<li class="dropdown nav-top">
					<a href="#" class="dropdown-toggle on" data-toggle="dropdown">选课</a>
				</li>
				<li class="dropdown nav-top">
					<a href="#" class="dropdown-toggle on" data-toggle="dropdown">个人中心</a>
					<ul class="dropdown-menu">
						<li><a href="produces.html">我的信息</a></li>
						<li><a href="produces.html">修改密码</a></li>
					</ul>
				</li>
			</ul>
		
	</div>
</nav>

<div class="line theme"></div>
<!-- ##########页首（end）########## -->

<!-- ##########主体########## -->
<div class="container">
这里修改教师信息
<h1>用户列表</h1>
<body>
<?php 
$teacher_num=$_POST['num'];
$teacher_Name=$_POST['teacherName'];
$teacher_age=$_POST['age'];
$teacher_tel=$_POST['telephone'];
$teacher_cou=$_POST['courseName'];
$teacher_sex=$_POST['sex'];
$teacher_add=$_POST['address'];
$con = mysql_connect("localhost:3306","root","root");
if (!$con){
	die('Could not connect: ' . mysql_error());
}
mysql_select_db("teacher", $con);
$str = "INSERT INTO course (num,teacherName,age,telephone,courseName,sex,address)
VALUES ('$teacher_num', '$teacher_Name', '$teacher_age','$teacher_tel','$teacher_cou',
'$teacher_sex','$teacher_add')";
echo $teacher_add;
header("Location:teacher.php");
mysql_query($str);
mysql_close($con);

?>

</body>
