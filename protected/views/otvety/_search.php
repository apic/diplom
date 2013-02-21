<?php
/* @var $this OtvetyController */
/* @var $model Otvety */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'voprosy_id'); ?>
		<?php echo $form->textField($model,'voprosy_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'otvety'); ?>
		<?php echo $form->textArea($model,'otvety',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->