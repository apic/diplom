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

	

	<?php echo CHtml::beginForm(); ?>

        <div class="row">
          <?php
           
          $a = $vopros->sum;
           
           echo 'Правильный ответ следует отметить галочкой';
           echo '<br>';
          for ($x=0, $i=0; $x++<$a,$i++<$a;){
                 echo 'Ответ № '.$i;
                 echo '<br>';
		 echo CHtml::activeTextfield($model, "[$i]otvety");
                 echo '&nbsp;';
                 echo CHtml::activeCheckBox($model, "[$i]variant");
                 echo '<br>';
                 
          }
                 ?>
        </div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->