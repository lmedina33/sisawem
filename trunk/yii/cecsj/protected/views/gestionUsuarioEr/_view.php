<?php
/* @var $this GestionUsuarioErController */
/* @var $data GestionUsuarioEr */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cedula_id_ER')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cedula_id_ER), array('view', 'id'=>$data->cedula_id_ER)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_ER')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_ER); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contrasena_ER')); ?>:</b>
	<?php echo CHtml::encode($data->contrasena_ER); ?>
	<br />


</div>