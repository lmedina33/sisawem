<?php
/* @var $this EstudianteRController */
/* @var $model EstudianteR */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cedula_id_ER'); ?>
		<?php echo $form->textField($model,'cedula_id_ER'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_ER'); ?>
		<?php echo $form->textField($model,'nombre_ER',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apellido1_ER'); ?>
		<?php echo $form->textField($model,'apellido1_ER',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apellido2_ER'); ?>
		<?php echo $form->textField($model,'apellido2_ER',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fech_nacimiento_ER'); ?>
		<?php echo $form->textField($model,'fech_nacimiento_ER'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'genero_ER'); ?>
		<?php echo $form->textField($model,'genero_ER',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_iniciales_ER'); ?>
		<?php echo $form->textField($model,'cod_iniciales_ER',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono_ER'); ?>
		<?php echo $form->textField($model,'telefono_ER',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email_ER'); ?>
		<?php echo $form->textField($model,'email_ER',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion_ER'); ?>
		<?php echo $form->textField($model,'direccion_ER',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fech_ingreso_ER'); ?>
		<?php echo $form->textField($model,'fech_ingreso_ER'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_encargado_ER'); ?>
		<?php echo $form->textField($model,'nombre_encargado_ER',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono2_ER'); ?>
		<?php echo $form->textField($model,'telefono2_ER',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pago_mensual_ER'); ?>
		<?php echo $form->textField($model,'pago_mensual_ER'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'becado_ER'); ?>
		<?php echo $form->textField($model,'becado_ER',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nacionalidad_ER'); ?>
		<?php echo $form->textField($model,'nacionalidad_ER',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_RE'); ?>
		<?php echo $form->textField($model,'id_RE'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->