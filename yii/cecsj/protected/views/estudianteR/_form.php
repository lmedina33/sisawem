<?php
/* @var $this EstudianteRController */
/* @var $model EstudianteR */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'estudiante-r-form',
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
		<?php echo $form->labelEx($model,'nombre_ER'); ?>
		<?php echo $form->textField($model,'nombre_ER',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'nombre_ER'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido1_ER'); ?>
		<?php echo $form->textField($model,'apellido1_ER',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'apellido1_ER'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido2_ER'); ?>
		<?php echo $form->textField($model,'apellido2_ER',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'apellido2_ER'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fech_nacimiento_ER'); ?>
		<?php echo $form->textField($model,'fech_nacimiento_ER'); ?>
		<?php echo $form->error($model,'fech_nacimiento_ER'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'genero_ER'); ?>
		<?php echo $form->textField($model,'genero_ER',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'genero_ER'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_iniciales_ER'); ?>
		<?php echo $form->textField($model,'cod_iniciales_ER',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'cod_iniciales_ER'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono_ER'); ?>
		<?php echo $form->textField($model,'telefono_ER',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'telefono_ER'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_ER'); ?>
		<?php echo $form->textField($model,'email_ER',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email_ER'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion_ER'); ?>
		<?php echo $form->textField($model,'direccion_ER',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'direccion_ER'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fech_ingreso_ER'); ?>
		<?php echo $form->textField($model,'fech_ingreso_ER'); ?>
		<?php echo $form->error($model,'fech_ingreso_ER'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_encargado_ER'); ?>
		<?php echo $form->textField($model,'nombre_encargado_ER',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nombre_encargado_ER'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono2_ER'); ?>
		<?php echo $form->textField($model,'telefono2_ER',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'telefono2_ER'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pago_mensual_ER'); ?>
		<?php echo $form->textField($model,'pago_mensual_ER'); ?>
		<?php echo $form->error($model,'pago_mensual_ER'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'becado_ER'); ?>
		<?php echo $form->textField($model,'becado_ER',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'becado_ER'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nacionalidad_ER'); ?>
		<?php echo $form->textField($model,'nacionalidad_ER',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'nacionalidad_ER'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_RE'); ?>
		<?php echo $form->textField($model,'id_RE'); ?>
		<?php echo $form->error($model,'id_RE'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->