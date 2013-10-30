<?php $form = $this->beginWidget('CActiveForm', array(
    'id'=>'themes-form',
    'enableAjaxValidation'=>true,
)); ?>

<?php echo $form->errorSummary($model); ?>

<table class="table">
		<tr>
			<th colspan=3 align="center">
				Название темы
			</th>

		</tr>
		<tr>
			<td colspan=3 align="center">
				<?php echo $form->textField($model,'theme',array('class'=>'span7','maxlength'=>255)); ?>
			</td>
		</tr>
		<tr>
			<th align="center">Кол-во лекц. занятий</th>
			<th align="center">Кол-во практ. занятий</th>
			<th align="center">Кол-во лаб. занятий</th>
		</tr>
		<tr>
			<td valign="middle" align="center"><?php echo $form->textField($model,'lect_h',array('class'=>'span2')); ?></td>
			<td valign="middle" align="center"><?php echo $form->textField($model,'pract_h',array('class'=>'span2')); ?></td>
			<td valign="middle" align="center"><?php echo $form->textField($model,'lab_h',array('class'=>'span2')); ?></td>
		</tr>

</table>
<div class="form-actions">
	<?php echo CHtml::submitButton(
		'Добавить',
		array(
			'class'=>'primary',
			)
	); ?>
</div>
<?php $this->endWidget(); ?>