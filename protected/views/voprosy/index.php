<?php
/* @var $this VoprosyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Voprosies',
);

$this->menu=array(
	array('label'=>'Create Voprosy', 'url'=>array('create')),
	array('label'=>'Manage Voprosy', 'url'=>array('admin')),
);
?>

<h1>Voprosies</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
