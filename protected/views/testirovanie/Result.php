<center>
<h2>Ваш результат</h2>

    <b>Всего правильных ответов:</b>
    <br>
<?php echo $total_correct_answers_count; ?>
<br>
<b>Правильно ответили на:</b>  
    <br>
<?php echo $correct_answers_count; ?>
<br>
<b>Заработано баллов:</b>
    <br>
<?php echo (($correct_answers_count/$total_correct_answers_count) * 100); ?>
<br>
<b><h3>Ваша оценка:</h3></b>
    <b><h3>
            <?php
            $result = (($correct_answers_count/$total_correct_answers_count) * 100);
           echo round(($correct_answers_count/$total_correct_answers_count),1)*10;
            
            ?>
                       
        </h3></b>

<br>

</center>