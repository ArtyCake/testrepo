<?php
$this->breadcrumbs=array(
	'Предметы'=>array('index'),
	'Создать',
);


$this->menu=array(
array('label'=>'Список предметов','url'=>array('index')),
);
?>

<h1>Create Subject</h1>

    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
 