<?php
/* @var $this TestyController */
/* @var $model Testy */

$this->breadcrumbs=array(
	'Testies'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Testy', 'url'=>array('index')),
	array('label'=>'Create Testy', 'url'=>array('create')),
	array('label'=>'Update Testy', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Testy', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Добавить вопрос', 'url'=>array('/voprosy/create', 'id'=>$model->id)),
);
?>

<h1>View Testy #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
