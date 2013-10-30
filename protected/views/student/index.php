<?php
$this->breadcrumbs=array(
	'Студенты'=>array('index'),
	'Список студенов',
);

$this->menu=array(
array('label'=>'Список студентов','url'=>array('index')),
array('label'=>'Добавить студента','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('student-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Список студентов группы <?php echo $model->group[$_GET['grid']]->Name; ?></h1>

<?php echo CHtml::link('Расширенный поиск','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<?php $grid = $_GET['grid']?>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
'id'=>'student-grid',
'dataProvider'=>$model->search($model->Group_ID = $grid),
'filter'=>$model,
'columns'=>array(
		'Surname',
		'Name',
		'Group_ID'=>array(
			'name'=>'Group_ID',
			'value'=>'$data->group->Name',
			'filter'=>false,
		),

		'BirthYear'=>array(
			'name'=>'BirthYear',
			'headerHtmlOptions'=>array('width'=>60),
		),
array(
'class'=>'bootstrap.widgets.TbButtonColumn',
//'template'=>'{update} {delete}'
),
),
)); ?>
