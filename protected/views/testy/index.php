<?php
/* @var $this TestyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Testies',
);

$this->menu=array(
	array('label'=>'Create Testy', 'url'=>array('create')),
	array('label'=>'Manage Testy', 'url'=>array('admin')),
);
?>

<h1>Testies</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
