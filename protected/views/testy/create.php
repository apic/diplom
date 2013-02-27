<?php
/* @var $this TestyController */
/* @var $model Testy */

$this->breadcrumbs=array(
	'Testies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Testy', 'url'=>array('index')),
	array('label'=>'Manage Testy', 'url'=>array('admin')),
);
?>

<h1>Create Testy</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>