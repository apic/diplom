<?php
/* @var $this OtvetyController */
/* @var $model Otvety */

$this->breadcrumbs=array(
	'Otveties'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Otvety', 'url'=>array('index')),
	array('label'=>'Create Otvety', 'url'=>array('create')),
	array('label'=>'View Otvety', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Otvety', 'url'=>array('admin')),
);
?>

<h1>Update Otvety <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>