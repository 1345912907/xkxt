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
function deleteNum(num){
	location.href="student3.php?mynum="+num;
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
这里列出所有的学生信息
<h1>用户列表</h1>
	<table border="1px">
		<tr>
        	<th>学号</th>
        	<th>姓名</th>
        	<th>年龄</th>
        	<th>号码</th>
        	<th>性别</th>
        	<th>操作</th>
    	</tr>
    		<?php    
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "xkxt_db";
    // 创建连接
    $conn = new mysqli($servername, $username, $password, $dbname);
    // 检测连接
    if ($conn->connect_error) {
    	die("连接失败: " . $conn->connect_error);
    }
    
    $sql = "select * from stu";
    $result = $conn->query($sql);//查到数据的结果集
    
    if ($result->num_rows > 0) {
    	// 输出每行数据
    	//mysql_fetch_assoc() 函数从结果集中取得一行作为关联数组。
    	//返回根据从结果集取得的行生成的关联数组，如果没有更多行，则返回 false。
    	//$myphone = "";
    	while($row = $result->fetch_assoc()) {
    		//print_r($row);
    		/* echo "用户名:".$row["phone"];
    		echo " 密码：".$row["username"];
    		echo "<br>"; */
    		echo "<tr>";
	    		echo "<td>";
	    			echo $row["num"];
	    		echo "</td>";
	    		echo "<td>";
	    			echo $row["name"];
	    		echo "</td>";
	    		echo "<td>";
    		        echo $row["old"];
	    		echo "</td>";
	    		echo "<td>";
    				echo $row["telephone"];
	    		echo "</td>";
	    		echo "<td>";
    		        echo $row["sex"];
	    		echo "</td>";
	    		echo "<td>";
	    		echo '<input type="button" value="修改" onclick="getNum('.$row["num"].');"> ';
	    		echo '<input type="button" value="删除" onclick="deleteNum('.$row["num"].');"> ';
	    		echo '<input type="button" value="选课" onclick="subjectNum('.$row["num"].');"> ';
	    		echo "</td>";
    		echo "</tr>";
    	}
    } else {
    	echo "0 个结果";
    }
    $conn->close();
	?>
		
		
		
	</table>




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
