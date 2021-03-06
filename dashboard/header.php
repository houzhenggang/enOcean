<?php
  	session_start();
	if(!isset($_SESSION['username'])){
      header("Location:../index.php");
      exit;
    }
    include("functions.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<title>WGCX物联——智能家居</title>
	<link rel="stylesheet" type="text/css" href="../css/initial.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/toastr/toastr.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css?v=12.1">
	<!--[if lt IE 9]>
	 <script type="text/javascript">
	 	document.getElementsByTagName('body')[0].innerHTML = "";
		document.write("请使用现代浏览器浏览本网站，就算用IE，最低版本IE9，什么年代了，还用IE8，我都不想说你");
	 </script>
    <![endif]-->
</head>
<body>
	<!--  header start -->
	<header class="header yellow_white">
		<div class="sidebar-toggle">
			<i class="fa fa-bars"></i>
		</div>
		<a class="logo"> 
			<span>WGCX</span>
			物联
		</a>
		<div class="nav-self pull-right">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<img class="photoUrl" src="<?php echo get_photoUrl(); ?>" width="30" height="30">
				<span class="nickname"><?php echo get_nickname(); ?></span>
				<b class="caret"></b>
			</a>
			<ul class="dropdown-menu extented" role="menu">
				<li>
		      		<a href="./index.php">
		      			<i class="fa fa-dashboard"></i>
		      			控制台
		      		</a>
		      	</li>
		      	<li>
		      		<a href="./profile.php">
		      			<i class="fa fa-user"></i>
		      			个人信息
		      		</a>
		      	</li>
		      	<li>
		      		<a href="./safe_setting.php">
		      			<i class="fa fa-cog"></i>
		      			设置中心
		      		</a>
		      	</li>
		      	<li>
		      		<a href="../logout.php">
		      			<i class="fa fa-key"></i>
		      			注销登录
		      		</a>
		      	</li>
		    </ul>
		</div>
	</header>
	<!--  header end -->
	<!--  sidebar navigation start -->
	<aside>
		<div class="sidebar">
			<ul class="sidebar-menu" id="sidebar">
				<li class="submenu">
					<a  href="./index.php">
						<i class="fa fa-dashboard"></i>
						<span>控制台</span>
					</a>
				</li>
				<li class="submenu">
					<a href="profile.php">
						<i class="fa fa-user"></i>
						<span>个人信息</span>
					</a>
				</li>
				<li class="submenu">
					<a>
						<i class="fa fa-laptop"></i>
						<span>我的设备</span>
						<span class="folder-icon"></span>
					</a>
					<ul class="sub">
						<?php getDeviceString("header");?>
					</ul>
				</li>
				<li class="submenu">
					<a>
						<i class="fa fa-plus"></i>
						<span>添加设备</span>
						<span class="folder-icon"></span>
					</a>
					<ul class="sub">
						<li>
							<a href="javascript:;" id="addDeviceHeader">添加设备</a>
						</li>
						<li >
							<a href="javascript:;" id="addControllerHeader">添加控制器</a>
						</li>
					</ul>
				</li>
				<li class="submenu">
					<a href="./logbook.php">
						<i class="fa fa-gears"></i>
						<span>操作日志</span>
					</a>
				</li>
				<li class="submenu">
					<a href="safe_setting.php">
						<i class="fa fa-shield"></i>
						<span>安全设置</span>
					</a>
				</li>
				
			</ul>
		</div>
	</aside>
	<!--  sidebar navigation end -->