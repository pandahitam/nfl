<?php
$this->breadcrumbs=array(
	'Competitions'=>array('index'),
	$model->competition_id,
);

$this->menu=array(
	array('label'=>'List Competition', 'url'=>array('index')),
	array('label'=>'Create Competition', 'url'=>array('create')),
	array('label'=>'Update Competition', 'url'=>array('update', 'id'=>$model->competition_id)),
	array('label'=>'Delete Competition', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->competition_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Competition', 'url'=>array('admin')),
);
?>

<h1>View Competition #<?php echo $model->competition_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'competition_id',
		'competition_name',
		'location',
		'date',
	),
)); ?>
