<?php
/* @var $this TestirovanieController */
/* @var $data Testirovanie */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->name), array('category', 'id'=>$data->id)); ?>
	
        </b>
            
	
          </div>