<?php
/* @var $this GestionUsuarioPrController */
/* @var $model GestionUsuarioPr */

$this->breadcrumbs=array(
	'Gestion Usuario Prs'=>array('index'),
	$model->cedula_id_PR,
);

$this->menu=array(
	array('label'=>'List GestionUsuarioPr', 'url'=>array('index')),
	array('label'=>'Create GestionUsuarioPr', 'url'=>array('create')),
	array('label'=>'Update GestionUsuarioPr', 'url'=>array('update', 'id'=>$model->cedula_id_PR)),
	array('label'=>'Delete GestionUsuarioPr', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cedula_id_PR),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GestionUsuarioPr', 'url'=>array('admin')),
);
?>

<h1>View GestionUsuarioPr #<?php echo $model->cedula_id_PR; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cedula_id_PR',
		'usuario_PR',
		'contrasena_PR',
	),
)); ?>
