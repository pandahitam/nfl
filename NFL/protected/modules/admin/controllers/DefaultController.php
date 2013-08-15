<?php

class DefaultController extends Controller
{
	public $layout="main";
	public function actionIndex()
	{
		$this->redirect('index.php/?r=admin/admin');
	}
	
	public function actionRegisterCompetition(){
		$this->render('registerCompetition');	
	}
}