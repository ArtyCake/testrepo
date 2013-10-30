<?php
$this->breadcrumbs=array(
	'Themes'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Themes','url'=>array('index')),
array('label'=>'Manage Themes','url'=>array('admin')),
);
?>

<h1>Create Themes</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>