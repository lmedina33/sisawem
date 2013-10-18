<?php
/* @var $this GestionUsuariosController */
/* @var $model GestionUsuarios */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'gestion-usuarios-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario_GU'); ?>
		<?php echo $form->textField($model,'usuario_GU',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'usuario_GU'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contrasena_GU'); ?>
		<?php echo $form->textField($model,'contrasena_GU',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'contrasena_GU'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rol_GU'); ?>
		<?php echo $form->textField($model,'rol_GU',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'rol_GU'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'identificacion_GU'); ?>
		<?php echo $form->textField($model,'identificacion_GU',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'identificacion_GU'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->