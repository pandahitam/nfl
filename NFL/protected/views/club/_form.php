<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'club-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'club_name'); ?>
		<?php echo $form->textField($model,'club_name',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'club_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'location'); ?>
		<?php echo $form->textField($model,'location',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'location'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'join_date'); ?>
		<?php echo $form->textField($model,'join_date'); ?>
		<?php echo $form->error($model,'join_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_person_name'); ?>
		<?php echo $form->textField($model,'contact_person_name',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'contact_person_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_person_phone'); ?>
		<?php echo $form->textField($model,'contact_person_phone',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'contact_person_phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'logo'); ?>
		<?php echo $form->textField($model,'logo',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'logo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'submit'); ?>
		<?php echo $form->textField($model,'submit',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'submit'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->