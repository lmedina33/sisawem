<?php
/* @var $this FuncionarioAsController */
/* @var $model FuncionarioAs */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cedula_id_AS'); ?>
		<?php echo $form->textField($model,'cedula_id_AS'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_AS'); ?>
		<?php echo $form->textField($model,'nombre_AS',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apellido1_AS'); ?>
		<?php echo $form->textField($model,'apellido1_AS',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apellido2_AS'); ?>
		<?php echo $form->textField($model,'apellido2_AS',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fech_nacimiento_AS'); ?>
		<?php echo $form->textField($model,'fech_nacimiento_AS'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'genero_AS'); ?>
		<?php echo $form->textField($model,'genero_AS',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_iniciales_AS'); ?>
		<?php echo $form->textField($model,'cod_iniciales_AS',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono1_AS'); ?>
		<?php echo $form->textField($model,'telefono1_AS',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono2_AS'); ?>
		<?php echo $form->textField($model,'telefono2_AS',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email_AS'); ?>
		<?php echo $form->textField($model,'email_AS',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion_AS'); ?>
		<?php echo $form->textField($model,'direccion_AS',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_funcionario_AS'); ?>
		<?php echo $form->textField($model,'tipo_funcionario_AS',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fech_ingreso_AS'); ?>
		<?php echo $form->textField($model,'fech_ingreso_AS'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado_AS'); ?>
		<?php echo $form->textField($model,'estado_AS',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nacionalidad_AS'); ?>
		<?php echo $form->textField($model,'nacionalidad_AS',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->