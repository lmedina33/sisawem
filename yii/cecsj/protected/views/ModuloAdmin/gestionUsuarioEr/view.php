<?php
/* @var $this GestionUsuarioErController */
/* @var $model GestionUsuarioEr */

$this->breadcrumbs=array(
	'Gestion Usuario Ers'=>array('index'),
	$model->cedula_id_ER,
);

$this->menu=array(
	array('label'=>'List GestionUsuarioEr', 'url'=>array('index')),
	array('label'=>'Create GestionUsuarioEr', 'url'=>array('create')),
	array('label'=>'Update GestionUsuarioEr', 'url'=>array('update', 'id'=>$model->cedula_id_ER)),
	array('label'=>'Delete GestionUsuarioEr', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cedula_id_ER),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GestionUsuarioEr', 'url'=>array('admin')),
);
?>

<h1>View GestionUsuarioEr #<?php echo $model->cedula_id_ER; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cedula_id_ER',
		'usuario_ER',
		'contrasena_ER',
	),
)); ?>
