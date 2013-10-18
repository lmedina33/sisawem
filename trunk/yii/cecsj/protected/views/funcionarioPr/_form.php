<?php
/* @var $this FuncionarioPrController */
/* @var $model FuncionarioPr */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'funcionario-pr-form',
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
		<?php echo $form->labelEx($model,'nombre_PR'); ?>
		<?php echo $form->textField($model,'nombre_PR',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'nombre_PR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido1_PR'); ?>
		<?php echo $form->textField($model,'apellido1_PR',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'apellido1_PR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido2_PR'); ?>
		<?php echo $form->textField($model,'apellido2_PR',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'apellido2_PR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fech_nacimiento_PR'); ?>
		<?php echo $form->textField($model,'fech_nacimiento_PR'); ?>
		<?php echo $form->error($model,'fech_nacimiento_PR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sexo_PR'); ?>
		<?php echo $form->textField($model,'sexo_PR',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'sexo_PR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_iniciales_PR'); ?>
		<?php echo $form->textField($model,'cod_iniciales_PR',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'cod_iniciales_PR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono1_PR'); ?>
		<?php echo $form->textField($model,'telefono1_PR',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'telefono1_PR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono2_PR'); ?>
		<?php echo $form->textField($model,'telefono2_PR',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'telefono2_PR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_PR'); ?>
		<?php echo $form->textField($model,'email_PR',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email_PR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion_PR'); ?>
		<?php echo $form->textField($model,'direccion_PR',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'direccion_PR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fech_ingreso_PR'); ?>
		<?php echo $form->textField($model,'fech_ingreso_PR'); ?>
		<?php echo $form->error($model,'fech_ingreso_PR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'profesion'); ?>
		<?php echo $form->textField($model,'profesion',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'profesion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nivel_asignado'); ?>
		<?php echo $form->textField($model,'nivel_asignado',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'nivel_asignado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado_PR'); ?>
		<?php echo $form->textField($model,'estado_PR',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'estado_PR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nacionalidad_PR'); ?>
		<?php echo $form->textField($model,'nacionalidad_PR',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'nacionalidad_PR'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->