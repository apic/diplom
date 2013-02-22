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

	<?php echo $form->errorSummary($model); ?>

        <div class="row">
          <?php 
          $a=Yii::app()->session['vop'];
          for ($x=0; $x++<$a;){
		 echo CHtml::label($model,'vopros');
                 echo '<br>';
		 echo CHtml::textField($model,'vopros'); 
                 echo '<br>';}


//              <?php  
//                 for ($x=0; $x++<(Yii::app()->session['vop']);){
//                     echo CHtml::labelEx('vopros', $model); 
//                     echo CHtml::textField('vopros', $model); 
//                     echo CHtml::error('vopros',$model);
//                     
//                 }
//                 return;
          ?>
        </div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

                <?php $this->endWidget(); ?>
</div>