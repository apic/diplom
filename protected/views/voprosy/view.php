<?php
/* @var $this VoprosyController */
/* @var $model Voprosy */

$this->breadcrumbs=array(
	'Voprosies'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Voprosy', 'url'=>array('index')),
	array('label'=>'Create Voprosy', 'url'=>array('create')),
	array('label'=>'Update Voprosy', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Voprosy', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Voprosy', 'url'=>array('admin')),
        array('label'=>'Добавить ответы', 'url'=>array('/otvety/create', 'id'=>$model->id)),
);
?>

<h1>View Voprosy #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'test_id',
		'vopros',
	),
)); ?>
