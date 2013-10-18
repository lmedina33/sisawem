<?php
/* @var $this FuncionarioPrController */
/* @var $model FuncionarioPr */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cedula_id_PR'); ?>
		<?php echo $form->textField($model,'cedula_id_PR'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_PR'); ?>
		<?php echo $form->textField($model,'nombre_PR',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apellido1_PR'); ?>
		<?php echo $form->textField($model,'apellido1_PR',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apellido2_PR'); ?>
		<?php echo $form->textField($model,'apellido2_PR',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fech_nacimiento_PR'); ?>
		<?php echo $form->textField($model,'fech_nacimiento_PR'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sexo_PR'); ?>
		<?php echo $form->textField($model,'sexo_PR',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_iniciales_PR'); ?>
		<?php echo $form->textField($model,'cod_iniciales_PR',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono1_PR'); ?>
		<?php echo $form->textField($model,'telefono1_PR',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono2_PR'); ?>
		<?php echo $form->textField($model,'telefono2_PR',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email_PR'); ?>
		<?php echo $form->textField($model,'email_PR',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion_PR'); ?>
		<?php echo $form->textField($model,'direccion_PR',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fech_ingreso_PR'); ?>
		<?php echo $form->textField($model,'fech_ingreso_PR'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'profesion'); ?>
		<?php echo $form->textField($model,'profesion',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nivel_asignado'); ?>
		<?php echo $form->textField($model,'nivel_asignado',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado_PR'); ?>
		<?php echo $form->textField($model,'estado_PR',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nacionalidad_PR'); ?>
		<?php echo $form->textField($model,'nacionalidad_PR',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->