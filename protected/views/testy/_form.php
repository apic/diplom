<?php
/* @var $this TestyController */
/* @var $model Testy */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'testy-form',
	'enableAjaxValidation'=>false,
)); ?>

<!--	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php //echo $form->errorSummary($model); ?>

	<div class="row">
		<?php // echo $form->labelEx($model,'name'); ?>
		<?php //echo $form->textField($model,'name',array('size'=>60,'maxlength'=>250)); ?>
		<?php //echo $form->error($model,'name'); ?>
	</div>

	<div class="row buttons">
		<?php // echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>-->
    <div class="row">
<?php echo CHtml::beginForm(); ?>

<?php echo CHtml::submitButton('Сохранить'); ?>
<?php echo CHtml::endForm(); ?>
</div>

<?php $this->endWidget(); ?>

</div><!-- form -->