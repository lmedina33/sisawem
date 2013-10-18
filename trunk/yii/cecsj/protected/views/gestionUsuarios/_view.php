<?php
/* @var $this GestionUsuariosController */
/* @var $data GestionUsuarios */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_GU')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_GU), array('view', 'id'=>$data->id_GU)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_GU')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_GU); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contrasena_GU')); ?>:</b>
	<?php echo CHtml::encode($data->contrasena_GU); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rol_GU')); ?>:</b>
	<?php echo CHtml::encode($data->rol_GU); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('identificacion_GU')); ?>:</b>
	<?php echo CHtml::encode($data->identificacion_GU); ?>
	<br />


</div>