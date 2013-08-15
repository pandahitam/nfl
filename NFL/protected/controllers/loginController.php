<?php
class loginController extends Controller{
	public $layout="login";
	public function actionLogin(){
		$this->render('login');
	}
	
	public function actionCheckLogin(){
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql="select * from club where username ='$username' AND password='$password'";
		$qry=mysql_query($sql);
		$data=mysql_num_rows($qry);
		if($data==1){
			$_SESSION['username']=$username;
			$this->redirect(Yii::app()->homeUrl);
			
		}
		
		
	}
}
?>