<?php
$this->breadcrumbs=array(
	'Lessons'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Lesson','url'=>array('index')),
	array('label'=>'Create Lesson','url'=>array('create')),
	array('label'=>'View Lesson','url'=>array('view','id'=>$model->ID)),
	array('label'=>'Manage Lesson','url'=>array('admin')),
	);
	?>

	<h1>Update Lesson <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>