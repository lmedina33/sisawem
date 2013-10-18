<?php
/* @var $this GestionUsuarioPrController */
/* @var $model GestionUsuarioPr */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'gestion-usuario-pr-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cedula_id_PR'); ?>
		<?php echo $form->textField($model,'cedula_id_PR'); ?>
		<?php echo $form->error($model,'cedula_id_PR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario_PR'); ?>
		<?php echo $form->textField($model,'usuario_PR',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'usuario_PR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contrasena_PR'); ?>
		<?php echo $form->textField($model,'contrasena_PR',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'contrasena_PR'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->