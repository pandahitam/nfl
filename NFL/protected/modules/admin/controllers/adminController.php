<?php
class adminController extends Controller{
	
	public $layout="main";
	public function actionIndex()
	{
		$this->render('competition');
	}
	
	public function actionRegisterCompetition(){
		$this->render('registerCompetition');	
	}
	
	public function actionDaftarKlub()
	{
		$this->render('daftarKlub');	
	}
	public function actionDaftarAtlit($id)
	{
		$this->render('daftarAtlit');	
	}
	public function actionLogout(){
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);		
	}

}
?>