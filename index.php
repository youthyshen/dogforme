
<!DOCTYPE HTML>
<html>
	<head>
		<title> 舔狗日记</title>
		<meta name="keywords" content="舔狗日记,青山绿水,dog.forme.hk">
        <meta name="description" content="这是一个舔狗日记集合网站">
        <link rel="shortcut icon" href="favicon.ico">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="./static/css/main.css" />
		<noscript><link rel="stylesheet" href="./static/css/noscript.css" /></noscript>
	</head>
	<body onselectstart="return false" oncontextmenu=self.event.returnValue=false> 

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="logo">
							<span>舔狗日记</span>						</div>
						<div class="content">
							<div class="inner">
								<h2><?php echo date('Y-m-d', strtotime( '+'.mt_rand(-100,0).' days'))?> 
								<?php $string[0]="晴";$string[1]="雨";$string[2]="多云";$string[3]="暴雨";$string[4]="晴转多云";$num = rand(0,4);//这里根据你的需要改变
echo $string[$num];
?></h2>
								<h3 id="sentence"></h3>
							</div>
						</div>
                    <button class="btn btn-primary btn-filled btn-xs" onclick="location.reload(true)">再来一段</button>
						<nav>
					</header>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">©DOG FORMe 版权所有<a target="_black" href='http://dog.forme.hk'>DOG Forme 发布</a></p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="./static/js/jquery.min.js"></script>
			<script src="./static/js/skel.min.js"></script>
			<script src="./static/js/util.js"></script>
			<script src="./static/js/main.js"></script>
            <script src="./static/js/index.js"></script>

 

	</body>
</html>
