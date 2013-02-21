<?php
/* @var $this OtvetyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Otveties',
);

$this->menu=array(
	array('label'=>'Create Otvety', 'url'=>array('create')),
	array('label'=>'Manage Otvety', 'url'=>array('admin')),
);
?>

<h1>Otveties</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
