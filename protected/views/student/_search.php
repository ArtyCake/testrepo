<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldRow($model,'Surname',array('class'=>'span5','maxlength'=>20)); ?>

		<?php echo $form->textFieldRow($model,'Name',array('class'=>'span5','maxlength'=>15)); ?>

		<?php echo $form->textFieldRow($model,'BirthYear',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Поиск',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
