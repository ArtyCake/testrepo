<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Регистрация';
$this->breadcrumbs=array(
	'Регистрация',
);
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
    'id'=>'user-form',
    'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Поля с <span class="required">*</span> обязательны к заполнению.</p>

<?php echo $form->errorSummary($model); ?>

    <?php echo $form->textFieldRow($model,'surname',array('class'=>'span5','maxlength'=>20)); ?>

    <?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>15)); ?>

    <?php echo $form->textFieldRow($model,'f_name',array('class'=>'span5','maxlength'=>20)); ?>

    <?php echo $form->textFieldRow($model,'login',array('class'=>'span5','maxlength'=>20)); ?>

    <?php echo $form->passwordFieldRow($model,'password',array('class'=>'span5','maxlength'=>20)); ?>

    <?php if(CCaptcha::checkRequirements()): ?>
    <div class="row">
        <?php echo $form->labelEx($model,'verifyCode'); ?>
        <div>
        <?php $this->widget('CCaptcha'); ?>
        <?php echo $form->textField($model,'verifyCode'); ?>
        </div>
        <div class="hint">Please enter the letters as they are shown in the image above.
        <br/>Letters are not case-sensitive.</div>
        <?php echo $form->error($model,'verifyCode'); ?>
    </div>
    <?php endif; ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType'=>'submit',
            'type'=>'primary',
            'label'=>$model->isNewRecord ? 'Регистрация' : 'Save',
        )); ?>
</div>

<?php $this->endWidget(); ?>

</div><!-- form -->