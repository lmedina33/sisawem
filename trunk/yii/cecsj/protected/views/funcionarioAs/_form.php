<?php
/* @var $this FuncionarioAsController */
/* @var $model FuncionarioAs */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'funcionario-as-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cedula_id_AS'); ?>
		<?php echo $form->textField($model,'cedula_id_AS'); ?>
		<?php echo $form->error($model,'cedula_id_AS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_AS'); ?>
		<?php echo $form->textField($model,'nombre_AS',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'nombre_AS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido1_AS'); ?>
		<?php echo $form->textField($model,'apellido1_AS',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'apellido1_AS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido2_AS'); ?>
		<?php echo $form->textField($model,'apellido2_AS',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'apellido2_AS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fech_nacimiento_AS'); ?>
		<?php echo $form->textField($model,'fech_nacimiento_AS'); ?>
		<?php echo $form->error($model,'fech_nacimiento_AS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'genero_AS'); ?>
		<?php echo $form->textField($model,'genero_AS',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'genero_AS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_iniciales_AS'); ?>
		<?php echo $form->textField($model,'cod_iniciales_AS',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'cod_iniciales_AS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono1_AS'); ?>
		<?php echo $form->textField($model,'telefono1_AS',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'telefono1_AS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono2_AS'); ?>
		<?php echo $form->textField($model,'telefono2_AS',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'telefono2_AS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_AS'); ?>
		<?php echo $form->textField($model,'email_AS',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email_AS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion_AS'); ?>
		<?php echo $form->textField($model,'direccion_AS',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'direccion_AS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_funcionario_AS'); ?>
		<?php echo $form->textField($model,'tipo_funcionario_AS',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'tipo_funcionario_AS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fech_ingreso_AS'); ?>
		<?php echo $form->textField($model,'fech_ingreso_AS'); ?>
		<?php echo $form->error($model,'fech_ingreso_AS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado_AS'); ?>
		<?php echo $form->textField($model,'estado_AS',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'estado_AS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nacionalidad_AS'); ?>
		<?php echo $form->textField($model,'nacionalidad_AS',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'nacionalidad_AS'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->