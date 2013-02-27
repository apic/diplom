<?php
/* @var $this TestyController */
/* @var $model Testy */

$this->breadcrumbs=array(
	'Testies'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Testy', 'url'=>array('index')),
	array('label'=>'Create Testy', 'url'=>array('create')),
	array('label'=>'View Testy', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Testy', 'url'=>array('admin')),
);
?>

<h1>Update Testy <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>