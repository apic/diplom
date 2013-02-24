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

	<?php echo CHtml::beginForm(); ?>

        <div class="row">
          <?php 
          $a=Yii::app()->session['otv'];
          for ($x=0, $i=0; $x++<$a,$i++<$a;){
                 echo 'Вопрос № '.$i;
                 echo '<br>';
		 echo CHtml::activeTextArea($model, 'voprosy'); 
                 echo '<br>';}
                 ?>
        </div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->