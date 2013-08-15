<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('competition_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->competition_id), array('view', 'id'=>$data->competition_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('competition_name')); ?>:</b>
	<?php echo CHtml::encode($data->competition_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('location')); ?>:</b>
	<?php echo CHtml::encode($data->location); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />


</div>