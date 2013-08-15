<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('club_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->club_id), array('view', 'id'=>$data->club_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('club_name')); ?>:</b>
	<?php echo CHtml::encode($data->club_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('location')); ?>:</b>
	<?php echo CHtml::encode($data->location); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('join_date')); ?>:</b>
	<?php echo CHtml::encode($data->join_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_person_name')); ?>:</b>
	<?php echo CHtml::encode($data->contact_person_name); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_person_phone')); ?>:</b>
	<?php echo CHtml::encode($data->contact_person_phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('logo')); ?>:</b>
	<?php echo CHtml::encode($data->logo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('submit')); ?>:</b>
	<?php echo CHtml::encode($data->submit); ?>
	<br />

	*/ ?>

</div>