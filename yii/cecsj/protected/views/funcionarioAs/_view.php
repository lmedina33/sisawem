<?php
/* @var $this FuncionarioAsController */
/* @var $data FuncionarioAs */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cedula_id_AS')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cedula_id_AS), array('view', 'id'=>$data->cedula_id_AS)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_AS')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_AS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido1_AS')); ?>:</b>
	<?php echo CHtml::encode($data->apellido1_AS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido2_AS')); ?>:</b>
	<?php echo CHtml::encode($data->apellido2_AS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fech_nacimiento_AS')); ?>:</b>
	<?php echo CHtml::encode($data->fech_nacimiento_AS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('genero_AS')); ?>:</b>
	<?php echo CHtml::encode($data->genero_AS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_iniciales_AS')); ?>:</b>
	<?php echo CHtml::encode($data->cod_iniciales_AS); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono1_AS')); ?>:</b>
	<?php echo CHtml::encode($data->telefono1_AS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono2_AS')); ?>:</b>
	<?php echo CHtml::encode($data->telefono2_AS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email_AS')); ?>:</b>
	<?php echo CHtml::encode($data->email_AS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion_AS')); ?>:</b>
	<?php echo CHtml::encode($data->direccion_AS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_funcionario_AS')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_funcionario_AS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fech_ingreso_AS')); ?>:</b>
	<?php echo CHtml::encode($data->fech_ingreso_AS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado_AS')); ?>:</b>
	<?php echo CHtml::encode($data->estado_AS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nacionalidad_AS')); ?>:</b>
	<?php echo CHtml::encode($data->nacionalidad_AS); ?>
	<br />

	*/ ?>

</div>