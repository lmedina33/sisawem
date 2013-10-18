<?php
/* @var $this UsuarioAdController */
/* @var $model UsuarioAd */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_AD'); ?>
		<?php echo $form->textField($model,'id_AD'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuario_AD'); ?>
		<?php echo $form->textField($model,'usuario_AD',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contrasena_AD'); ?>
		<?php echo $form->textField($model,'contrasena_AD',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->