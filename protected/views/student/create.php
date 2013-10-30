<?php
$this->breadcrumbs=array(
	'Студенты'=>array('index'),
	'Добавление',
);

$this->menu=array(
array('label'=>'Список студентов','url'=>array('index')),
);
?>

<h1>Добавить студента</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>