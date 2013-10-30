
	<?php foreach($lessons as $lesson): ?>

    <?php switch($lesson->Date){
    	case 1: echo "Понедельник"; break;
    	case 2: echo "Вторник"; break;
    	case 3: echo "Среда"; break;
    	case 4: echo "Четверг"; break;
    	case 5: echo "Пятница"; break;
    	case 6: echo "Суббота"; break;

    } ?>

    <b>
    <?php switch($lesson->Double_period){
    	case 1: echo "(1)"; break;
    	case 2: echo "(2)"; break;
    	case 3: echo "(3)"; break;
    	case 4: echo "(4)"; break;
    	case 5: echo "(5)"; break;
    	case 6: echo "(6)"; break;

    } ?>
	</b>
    <?php echo $lesson->group->Name; ?>
    <br />
<?php endforeach; ?>