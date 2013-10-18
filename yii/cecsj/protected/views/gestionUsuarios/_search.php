<?php
/* @var $this GestionUsuariosController */
/* @var $model GestionUsuarios */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_GU'); ?>
		<?php echo $form->textField($model,'id_GU'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuario_GU'); ?>
		<?php echo $form->textField($model,'usuario_GU',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contrasena_GU'); ?>
		<?php echo $form->textField($model,'contrasena_GU',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rol_GU'); ?>
		<?php echo $form->textField($model,'rol_GU',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'identificacion_GU'); ?>
		<?php echo $form->textField($model,'identificacion_GU',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->