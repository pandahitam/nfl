<?php
$this->breadcrumbs=array(
	'Competitions'=>array('index'),
	$model->competition_id=>array('view','id'=>$model->competition_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Competition', 'url'=>array('index')),
	array('label'=>'Create Competition', 'url'=>array('create')),
	array('label'=>'View Competition', 'url'=>array('view', 'id'=>$model->competition_id)),
	array('label'=>'Manage Competition', 'url'=>array('admin')),
);
?>



<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>