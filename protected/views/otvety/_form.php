<?php
/* @var $this OtvetyController */
/* @var $model Otvety */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'otvety-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'voprosy_id'); ?>
		<?php echo $form->textField($model,'voprosy_id'); ?>
		<?php echo $form->error($model,'voprosy_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'otvety'); ?>
		<?php echo $form->textArea($model,'otvety',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'otvety'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->