<?php
/* @var $this OtvetyController */
/* @var $model Otvety */

$this->breadcrumbs=array(
	'Otveties'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Otvety', 'url'=>array('index')),
	array('label'=>'Create Otvety', 'url'=>array('create')),
	array('label'=>'Update Otvety', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Otvety', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Otvety', 'url'=>array('admin')),
    
);
?>

<h1>View Otvety #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'voprosy_id',
		'otvety',
	),
)); ?>
