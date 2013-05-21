<?php
/* @var $this TestirovanieController */
/* @var $dataProvider CActiveDataProvider */



//$this->menu=array(
//	array('label'=>'Create Testirovanie', 'url'=>array('create')),
//	array('label'=>'Manage Testirovanie', 'url'=>array('admin')),
//);
?>

<h2>Выберите дисциплину</h2>


    
    <?php 
    
    $cat=  Category::model()->findAll();
        foreach ($cat as $category):?>

<h5> 
     <?php echo CHtml::link($category->category, array('Testirovanie/distsiplina', 'id'=>$category->id)); ?>
</h5>
   
   <?php endforeach;?>

    
    
    
