<?php
$this->breadcrumbs=array(
	'Группы'=>array('index'),
	'Добавление',
);

$this->menu=array(
array('label'=>'Список групп','url'=>array('index')),
);
?>

<h1>Добавить группу</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>