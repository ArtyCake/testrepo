<?php
$this->breadcrumbs=array(
	'Subjects'=>array('index'),
	$model->Name=>array('view','id'=>$model->ID),
	'Update',
);

	$this->menu=array(
	array('label'=>'Добавить предмет','url'=>array('create')),
	array('label'=>'Просмотр','url'=>array('view','id'=>$model->ID)),
	array('label'=>'Список предметов','url'=>array('index')),
	);
	?>

	<h1>Update Subject <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
