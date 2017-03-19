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
这里修改你的信息
<h1>用户列表</h1>
<body>
	   <form action="teacher5.php" method="post">
人员编号:<input type="text" name="num" placeholder="请输入人员编号"><br>
教师姓名:<input type="text" name="teacherName" placeholder="请输入姓名"><br>
年龄:<input type="text" name="age" placeholder="请输入年龄"><br>
电话号码:<input type="text" name="telephone" placeholder="请输入电话号码"><br>
所教科目:<input type="text" name="courseName" placeholder="请输入所教科目"><br>
性别:<input type="radio" name="sex" value="男" checked="checked"/>男
	<input type="radio" name="sex" value="女" />女<br>
住址:<input type="text" name="address" placeholder="请输入课程代码"><br>
<input type="submit" value="添加课程">
</form>
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



