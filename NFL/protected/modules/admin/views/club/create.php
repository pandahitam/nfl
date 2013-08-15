<?php
$this->breadcrumbs=array(
	'Clubs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Club', 'url'=>array('index')),
	array('label'=>'Manage Club', 'url'=>array('admin')),
);
?>



<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>