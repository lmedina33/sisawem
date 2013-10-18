<?php
/* @var $this EstudiantePiController */
/* @var $model EstudiantePi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'estudiante-pi-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'identificacion_ep'); ?>
		<?php echo $form->textField($model,'identificacion_ep',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'identificacion_ep'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_solicitud'); ?>
		<?php echo $form->textField($model,'fecha_solicitud'); ?>
		<?php echo $form->error($model,'fecha_solicitud'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_ep'); ?>
		<?php echo $form->textField($model,'nombre_ep',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nombre_ep'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_na_ep'); ?>
		<?php echo $form->textField($model,'fecha_na_ep'); ?>
		<?php echo $form->error($model,'fecha_na_ep'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'genero_ep'); ?>
		<?php echo $form->textField($model,'genero_ep',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'genero_ep'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'celular_ep'); ?>
		<?php echo $form->textField($model,'celular_ep',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'celular_ep'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'correo_ep'); ?>
		<?php echo $form->textField($model,'correo_ep',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'correo_ep'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nivel_ep'); ?>
		<?php echo $form->textField($model,'nivel_ep',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'nivel_ep'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion_ep'); ?>
		<?php echo $form->textField($model,'direccion_ep',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'direccion_ep'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'identificación_ma'); ?>
		<?php echo $form->textField($model,'identificación_ma',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'identificación_ma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_ma'); ?>
		<?php echo $form->textField($model,'nombre_ma',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nombre_ma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono_h_ma'); ?>
		<?php echo $form->textField($model,'telefono_h_ma',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'telefono_h_ma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono_t_ma'); ?>
		<?php echo $form->textField($model,'telefono_t_ma',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'telefono_t_ma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'celular_ma'); ?>
		<?php echo $form->textField($model,'celular_ma',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'celular_ma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'oficio_ma'); ?>
		<?php echo $form->textField($model,'oficio_ma',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'oficio_ma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lugar_trabajo_ma'); ?>
		<?php echo $form->textField($model,'lugar_trabajo_ma',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'lugar_trabajo_ma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'identificación_pa'); ?>
		<?php echo $form->textField($model,'identificación_pa',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'identificación_pa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_pa'); ?>
		<?php echo $form->textField($model,'nombre_pa',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nombre_pa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono_h_pa'); ?>
		<?php echo $form->textField($model,'telefono_h_pa',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'telefono_h_pa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono_t_pa'); ?>
		<?php echo $form->textField($model,'telefono_t_pa',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'telefono_t_pa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'celular_pa'); ?>
		<?php echo $form->textField($model,'celular_pa',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'celular_pa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'oficio_pa'); ?>
		<?php echo $form->textField($model,'oficio_pa',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'oficio_pa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lugar_trabajo_pa'); ?>
		<?php echo $form->textField($model,'lugar_trabajo_pa',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'lugar_trabajo_pa'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->