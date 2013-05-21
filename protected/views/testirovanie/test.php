<h2>
    <?php echo $model->name; ?>
</h2>
<br>

<?php
echo CHtml::beginForm(array('/testirovanie/check','id'=> $model->id));
$criteria = new CDbCriteria();
$criteria->addColumnCondition(array('test_id' => $model->id));
$voprosy = Voprosy::model()->findAll($criteria);

foreach ($voprosy as $vopros):
    ?>
    <h5>
        <?= $vopros->vopros ?>
    </h5>

    <?php
    $criter = new CDbCriteria();
    $criter->addColumnCondition(array('voprosy_id' => $vopros->id));
    $otvety = Otvety::model()->findAll($criter);
    foreach ($otvety as $otvet):
        ?>
        <h6>
        <?php echo CHtml::checkBox("check[$vopros->id][$otvet->id]"); ?>
        <?= $otvet->otvety ?>
        </h6>

    <?php endforeach; ?>


<?php endforeach; ?>

<br>
<br>
<?php echo CHtml::submitButton("Завершить тест!",  array('confirm'=>'Вы точно хотите отправить результ?')); ?>
   
<?php echo CHtml::endForm(); ?>