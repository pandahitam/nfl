<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl?>/assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl?>/assets/css/bootstrap-responsive.min.css" />
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl?>/assets/css/fullcalendar.css" />	
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl?>/assets/css/unicorn.main.css" />
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl?>/assets/css/unicorn.grey.css" class="skin-color" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
		
		
		<div id="header">
			<h1><a href="./dashboard.html">Unicorn Admin</a></h1>		
		</div>
		
		<div id="search">
			<input type="text" placeholder="Search here..."/><button type="submit" class="tip-right" title="Search"><i class="icon-search icon-white"></i></button>
		</div>
		<div id="user-nav" class="navbar navbar-inverse">
            <ul class="nav btn-group">
                <li class="btn btn-inverse" ><a title="" href="#"><i class="icon icon-user"></i> <span class="text">Profile</span></a></li>
                <li class="btn btn-inverse"><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
            </ul>
        </div>
            
		<div id="sidebar">
			<a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
			<ul>
				<li class="submenu active open">
					<a href="#"><i class="icon icon-th-list"></i> <span>Klub</span></a>
				</li>
			</ul>
		
		</div>
				
		<div id="content">
			
		</div>
		
		

            <script src="<?php echo Yii::app()->request->baseUrl?>/assets/js/excanvas.min.js"></script>
            <script src="<?php echo Yii::app()->request->baseUrl?>/assets/js/jquery.min.js"></script>
            <script src="<?php echo Yii::app()->request->baseUrl?>/assets/js/jquery.ui.custom.js"></script>
            <script src="<?php echo Yii::app()->request->baseUrl?>/assets/js/bootstrap.min.js"></script>
            <script src="<?php echo Yii::app()->request->baseUrl?>/assets/js/jquery.flot.min.js"></script>
            <script src="<?php echo Yii::app()->request->baseUrl?>/assets/js/jquery.flot.resize.min.js"></script>
            <script src="<?php echo Yii::app()->request->baseUrl?>/assets/js/jquery.peity.min.js"></script>
            <script src="<?php echo Yii::app()->request->baseUrl?>/assets/js/fullcalendar.min.js"></script>
            <script src="<?php echo Yii::app()->request->baseUrl?>/assets/js/unicorn.js"></script>
            <script src="<?php echo Yii::app()->request->baseUrl?>/assets/js/unicorn.dashboard.js"></script>
	</body>
</html>

