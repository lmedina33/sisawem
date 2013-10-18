<?php
/* @var $this GestionUsuarioPrController */
/* @var $data GestionUsuarioPr */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cedula_id_PR')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cedula_id_PR), array('view', 'id'=>$data->cedula_id_PR)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_PR')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_PR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contrasena_PR')); ?>:</b>
	<?php echo CHtml::encode($data->contrasena_PR); ?>
	<br />


</div>