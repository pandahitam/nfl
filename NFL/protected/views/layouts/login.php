<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Unicorn Admin</title>
		<meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl?>/assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl?>/assets/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl?>/assets/css/unicorn.login.css" />
    </head>
    <body>
        <div id="logo">
            <img src="<?php echo Yii::app()->request->baseUrl?>/assets/img/logo.png" alt="" />
        </div>
        <div id="loginbox">            
           <?php echo $content;?>
        </div>
        
        <script src="<?php echo Yii::app()->request->baseUrl?>/assets/js/jquery.min.js"></script>  
        <script src="<?php echo Yii::app()->request->baseUrl?>/assets/js/unicorn.login.js"></script> 
    </body>
</html>
