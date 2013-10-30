<?php
$this->breadcrumbs=array(
	'Группы'=>array('index'),
	'Список групп',
);

$this->menu=array(
array('label'=>'Добавить группу','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('group-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Список групп</h1>

<?php echo CHtml::link('Расширеный поиск','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
'id'=>'group-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'Name',
		'Year',
array(
'class'=>'bootstrap.widgets.TbButtonColumn',
'template'=>'{view} {update} {delete}',
'buttons'=>array(
		'view' => array(
                    'url'=>'Yii::app()->createUrl("student/index", array("grid"=>$data->ID))',
                ),

	)
),
),
)); ?>
