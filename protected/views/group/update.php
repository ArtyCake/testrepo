<?php
$this->breadcrumbs=array(
	'Группы'=>array('index'),
	$model->Name=>array('view','id'=>$model->ID),
	'Изменение',
);

	$this->menu=array(
	array('label'=>'Список групп','url'=>array('index')),
	array('label'=>'Добавить','url'=>array('create')),
	array('label'=>'Просмотр','url'=>array('view','id'=>$model->ID)),
	);
	?>

	<h1>Изменить группу <?php echo $model->Name; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>