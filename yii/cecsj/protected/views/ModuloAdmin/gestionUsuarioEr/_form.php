<?php
/* @var $this GestionUsuarioErController */
/* @var $model GestionUsuarioEr */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'gestion-usuario-er-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cedula_id_ER'); ?>
		<?php echo $form->textField($model,'cedula_id_ER'); ?>
		<?php echo $form->error($model,'cedula_id_ER'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario_ER'); ?>
		<?php echo $form->textField($model,'usuario_ER',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'usuario_ER'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contrasena_ER'); ?>
		<?php echo $form->textField($model,'contrasena_ER',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'contrasena_ER'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->