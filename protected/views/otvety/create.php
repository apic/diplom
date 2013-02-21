<?php
/* @var $this OtvetyController */
/* @var $model Otvety */

$this->breadcrumbs=array(
	'Otveties'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Otvety', 'url'=>array('index')),
	array('label'=>'Manage Otvety', 'url'=>array('admin')),
);
?>

<h1>Create Otvety</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>