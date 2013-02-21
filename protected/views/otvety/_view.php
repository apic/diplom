<?php
/* @var $this OtvetyController */
/* @var $data Otvety */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('voprosy_id')); ?>:</b>
	<?php echo CHtml::encode($data->voprosy_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('otvety')); ?>:</b>
	<?php echo CHtml::encode($data->otvety); ?>
	<br />


</div>