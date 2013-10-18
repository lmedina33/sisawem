<?php
/* @var $this UsuarioAdController */
/* @var $model UsuarioAd */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-ad-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario_AD'); ?>
		<?php echo $form->textField($model,'usuario_AD',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'usuario_AD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contrasena_AD'); ?>
		<?php echo $form->textField($model,'contrasena_AD',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'contrasena_AD'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->