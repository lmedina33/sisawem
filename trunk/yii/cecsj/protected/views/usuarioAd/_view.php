<?php
/* @var $this UsuarioAdController */
/* @var $data UsuarioAd */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_AD')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_AD), array('view', 'id'=>$data->id_AD)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_AD')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_AD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contrasena_AD')); ?>:</b>
	<?php echo CHtml::encode($data->contrasena_AD); ?>
	<br />


</div>