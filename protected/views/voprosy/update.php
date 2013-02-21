<?php
/* @var $this VoprosyController */
/* @var $model Voprosy */

$this->breadcrumbs=array(
	'Voprosies'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Voprosy', 'url'=>array('index')),
	array('label'=>'Create Voprosy', 'url'=>array('create')),
	array('label'=>'View Voprosy', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Voprosy', 'url'=>array('admin')),
);
?>

<h1>Update Voprosy <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>