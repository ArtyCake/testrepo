<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'themes-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'theme',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'lect_h',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'pract_h',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'lab_h',array('class'=>'span5')); ?>
	<div >
	<?php	$a = Subject::model()->find('id='.$id) ?>
	<?php echo $form->textFieldRow($model,'subject_id',array('class'=>'span5', 'value'=>$a->Name)); ?>
	</div>
<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Сохранить',
		)); ?>
			<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'button',
			'type'=>'primary',
			'label'=>'Далее',
			'url'=>array('lesson/create','id'=>$id),
		)); ?>
</div>

<?php $this->endWidget(); ?>
