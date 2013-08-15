

	

<!-- form -->

<div id="content-header">
				<h1>Buat Kompetisi</h1>
			</div>
			<div id="breadcrumb">
				<a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Kompetisi</a>
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
								<h5>Daftar Kompetisi</h5>
                                
							</div>
                            
							<div class="widget-content">
                            	<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'competition-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>
                            		<table>
                                    	<tr>
                                        	<th><?php echo $form->labelEx($model,'Nama Kompetisi'); ?></th>
                                            <td>:</td>
                                            <td>
                                            	<?php echo $form->textField($model,'competition_name',array('size'=>30,'maxlength'=>30)); ?>
                                                <?php echo $form->error($model,'competition_name'); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                        	<th><?php echo $form->labelEx($model,'Lokasi',array('style'=>'text-align:left')); ?></th>
                                            <td>:</td>
                                            <td>
                                            	<?php echo $form->textField($model,'location',array('size'=>30,'maxlength'=>30)); ?>
                                                <?php echo $form->error($model,'location'); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                        	<th><?php echo $form->labelEx($model,'Tanggal',array('style'=>'text-align:left')); ?></th>
                                            <td>:</td>
                                            <td>
                                            	<?php echo $form->textField($model,'date'); ?>
												<?php echo $form->error($model,'date'); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                        	<th><?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn')); ?></th>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </table>	
                                    <?php $this->endWidget(); ?>
							</div>
						</div>
					</div>	
				</div>
			</div>
