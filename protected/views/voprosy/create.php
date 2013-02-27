<?php
/* @var $this VoprosyController */
/* @var $model Voprosy */

$this->breadcrumbs=array(
	'Voprosies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Voprosy', 'url'=>array('index')),
	array('label'=>'Manage Voprosy', 'url'=>array('admin')),
);
?>

<h1>Create Voprosy</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>