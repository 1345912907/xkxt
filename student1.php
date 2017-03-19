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
<script type="text/javascript">
function getNum(num){
	location.href="student1.php?mynum="+num;
}

</script>
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
这里修改你的信息
<h1>用户列表</h1>
	<body>
<?php
$mynum2 =  $_GET["mynum"];
echo $mynum2;
//连接数据库服务器
$con = mysql_connect("localhost:3306","root","root");
if (!$con){
	die('Could not connect: ' . mysql_error());
}
//选择数据库
mysql_select_db("xkxt_db", $con);
//写SQL语句,并执行
$sql = "select * from stu where num='$mynum2' ";//num是所用表的主键
$result = mysql_query($sql,$con);
$item = mysql_fetch_array($result);
//print_r($item);
//Array ( [0] => 2017110 [num] => 2017110 [1] => 寒冰 [name] => 寒冰 [2] => 女 [sex] => 女 [3] => 110 [old] => 110 [4] => 1237831 [telephone] => 1237831 [5] => 1 [password] => 1 )
//echo $item[0]; 
//echo $item["num"];
?>

<form action="student2.php" method="post">
学号:<input readonly="readonly" type="text" name="num" value="<?php echo $item["num"]; ?>">
<br>
姓名:<input type="text" name="name" value="<?php echo $item["name"]; ?>"><br>
年龄:<input type="text" name="old" value="<?php echo $item["old"]; ?>"><br>
号码:<input type="text" name="telephone" value="<?php echo $item["telephone"]; ?>"><br>
性别:<input type="text" name="sex" value="<?php echo $item["sex"]; ?>"><br>
<input type="submit" value="提交修改">
</form>

<?php
mysql_close($con);
?>
</body>




</div>
<!-- ##########主体（end）########## -->

<!-- ##########页脚########## -->
<div class="container web-footer">
	<!-- 底部 -->
	<div class="row" id="patent-footer">
			<p> © 2016 江西新纶科技有限公司 版权所有 | 赣ICP备06051111号 来源:<a href="http://www.mycodes.net/" target="_blank">源码之家</a>  </p>
    </div>
</div>	



<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>

	/*导航条标题点击事件*/
	$(".dropdown-toggle").click(function(){
		
		if($(this).attr('href')){
			window.location = $(this).attr('href');
		}

	});

	/*广告轮播*/
    $(function () {
        $('#ad-carousel').carousel();
        $('#menu-nav .navbar-collapse a').click(function (e) {
            var href = $(this).attr('href');
            var tabId = $(this).attr('data-tab');
            if ('#' !== href) {
                e.preventDefault();
                $(document).scrollTop($(href).offset().top - 70);
                if (tabId) {
                    $('#feature-tab a[href=#' + tabId + ']').tab('show');
                }
            }
        });
    });


    /*导航条*/
    $(function () {
	    $(".dropdown").mouseover(function () {
	    	
	        $(this).addClass("open");
	    });

	    $(".dropdown").mouseleave(function(){

	        $(this).removeClass("open");
	    });
	});

</script>
</body>
</html>
