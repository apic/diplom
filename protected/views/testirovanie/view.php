<?php
/* @var $this TestirovanieController */
/* @var $model Testirovanie */

//$this->breadcrumbs=array(
//	'Testirovanies'=>array('index'),
//	$model->name,
//);

//$this->menu=array(
//	array('label'=>'List Testirovanie', 'url'=>array('index')),
//	array('label'=>'Create Testirovanie', 'url'=>array('create')),
//	array('label'=>'Update Testirovanie', 'url'=>array('update', 'id'=>$model->id)),
//	array('label'=>'Delete Testirovanie', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage Testirovanie', 'url'=>array('admin')),
//);
//?>

<h1>View Testirovanie #<?php echo $model->id;?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
