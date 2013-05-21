<h2>Список тестов</h2>
<br>

   <?php
        foreach ($models as $test):?>
   <?php echo CHtml::link($test->name, array('Testirovanie/test', 'id'=>$test->id)); ?>
   <?php endforeach;?>
 