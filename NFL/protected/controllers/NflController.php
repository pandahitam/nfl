<?php

class NflController extends Controller
{
	public $layout="main";
	public function actionIndex()
	{
		if(isset($_SESSION['username'])){
		$this->render('index');
		}else{
			$this->redirect('index.php/?r=login/login');	
		}
	}
	public function actionDaftarAtlet()
	{
		$this->render('daftarAtlet');	
	}
	public function actionDaftarKlub()
	{
		$this->render('daftarKlub');	
	}
	public function actionAddAtlet(){
		$model=new Atlet;
		$record="Null,'$_SESSION[username]','$_POST[atlet_name]','$_POST[position]','$_POST[handphone_number]','$_POST[born_date]'";
		$model->add($record);
		$this->redirect(Yii::app()->homeUrl);	
	}
	public function actionAddClub(){
		$model=new Club;
		$record="Null,'$_POST[club_name]','$_POST[username]','$_POST[password]','$_POST[location]','','$_POST[contact_person_name]','$_POST[contact_person_phone]','',''";
		$model->add($record);
		$this->redirect(Yii::app()->homeUrl);	
	}
	public function actionEditAtlet($id){
		$model=new Atlet;
		$this->render('editAtlet',array('model'=>$model));	
	}
	public function actionUpdateAtlet(){
		$model=new Atlet;
		$id=$_POST['atlet_id'];
		$record="`club_id` =  '2',
`atlet_name` =  '$_POST[atlet_name]',
`position` =  '$_POST[position]',
`handphone_number` =  '$_POST[handphone_number]',
`born_date` =  '$_POST[born_date]'";
		$model->update($record,$id);
		$this->redirect(Yii::app()->homeUrl);	
	}
	public function actionDeleteAtlet($id){
		$model = new Atlet;
		$model->delete($id);
		$this->redirect(Yii::app()->homeUrl);	
	}
	
	public function actionLogout(){
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);	
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}