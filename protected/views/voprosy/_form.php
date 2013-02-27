<?php
/* @var $this VoprosyController */
/* @var $model Voprosy */
/* @var $form CActiveForm */
?>

<div class="form">

<?php  $form=$this->beginWidget('CActiveForm', array(
	'id'=>'voprosy-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo CHtml::beginForm(); ?>

        <div class="row">
          <?php 
          $a=Yii::app()->session['vop'];
          
          for ($x=0, $i=0; $x++<$a,$i++<$a;){
                 echo 'Вопрос № '.$i;
                 echo '<br>';
                 echo CHtml::activeTextArea($model, "[$i]voprosy"); 
                 echo '<br>';
                 echo CHtml::activeTextField($model, "[$i]sum");
                 echo '<br>';
          }
          ?>
        </div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

                <?php $this->endWidget(); ?>
</div>