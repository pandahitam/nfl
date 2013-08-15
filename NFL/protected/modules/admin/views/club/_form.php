<div id="content-header">
				<h1>Buat Klub	</h1>
			</div>
			<div id="breadcrumb">
				<a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Klub</a>
				<a href="#" class="current"><?php echo $data['club_name']?></a>
			</div>
			
				<p></p>
				<div class="row-fluid">
					<div class="span12 center" style="text-align: center;">					
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon">
									<i class="icon-th"></i>
								</span>
								<h5>Buat Klub</h5>
                                
							</div>
                            
							<div class="widget-content">
                            		<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'club-form',
	'enableAjaxValidation'=>false,
)); ?>



	<?php echo $form->errorSummary($model); ?>
	<table>
    	<tr>
        	<th><?php echo $form->labelEx($model,'club_name',array('style'=>'text-align:left')); ?></th>
            <td>:</td>
            <td>
				<?php echo $form->textField($model,'club_name',array('size'=>30,'maxlength'=>30)); ?>
            	<?php echo $form->error($model,'club_name'); ?>    
           	</td>
        </tr>
        <tr>
        	<th><?php echo $form->labelEx($model,'username',array('style'=>'text-align:left')); ?></th>
            <td>:</td>
            <td>
				<?php echo $form->textField($model,'username',array('size'=>30,'maxlength'=>30)); ?>
           		<?php echo $form->error($model,'username'); ?>
            </td>
        </tr>
        <tr>
        	<th><?php echo $form->labelEx($model,'password',array('style'=>'text-align:left')); ?></th>
            <td>:</td>
            <td>
            	<?php echo $form->passwordField($model,'password',array('size'=>30,'maxlength'=>30)); ?>
                <?php echo $form->error($model,'password'); ?>
            </td>
        </tr>
        <tr>
        	<th><?php echo $form->labelEx($model,'location',array('style'=>'text-align:left')); ?></th>
           	<td>:</td>
            <td>
            	<?php echo $form->textField($model,'location',array('size'=>30,'maxlength'=>30)); ?>
                <?php echo $form->error($model,'location'); ?>
            </td>
        </tr>
        <tr>
        	<th><?php echo $form->labelEx($model,'join_date',array('style'=>'text-align:left')	); ?></th>
            <td>:</td>
            <tD>
            	<?php echo $form->textField($model,'join_date'); ?>
				<?php echo $form->error($model,'join_date'); ?>
            </tD>
        </tr>
        <tr>
        	<th><?php echo $form->labelEx($model,'contact_person_name',array('style'=>'text-align:left')); ?></th>
            <td></td>
            <td>
            	<?php echo $form->textField($model,'contact_person_name',array('size'=>30,'maxlength'=>30)); ?>
				<?php echo $form->error($model,'contact_person_name'); ?>
            </td>
        </tr>
        <tr>
        	<th><?php echo $form->labelEx($model,'contact_person_phone',array('style'=>'text-align:left')); ?></th>
            <td>:</td>
            <Td>
            	<?php echo $form->textField($model,'contact_person_phone',array('size'=>15,'maxlength'=>15)); ?>
				<?php echo $form->error($model,'contact_person_phone'); ?>
            </Td>
        </tr>
        <tr>
        	<td><?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn')); ?></td>
            <td></td>
            <td></td>
        </tr>		
    </table>
<?php $this->endWidget(); ?>
							</div>
						</div>
					</div>	
				</div>
			</div><!-- form -->