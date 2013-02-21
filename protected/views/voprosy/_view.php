<?php
/* @var $this VoprosyController */
/* @var $data Voprosy */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('test_id')); ?>:</b>
	<?php echo CHtml::encode($data->test_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vopros')); ?>:</b>
	<?php echo CHtml::encode($data->vopros); ?>
	<br />


</div>