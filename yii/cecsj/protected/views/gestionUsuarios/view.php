<?php
/* @var $this GestionUsuariosController */
/* @var $model GestionUsuarios */

$this->breadcrumbs=array(
	'Gestion Usuarioses'=>array('index'),
	$model->id_GU,
);

$this->menu=array(
	array('label'=>'List GestionUsuarios', 'url'=>array('index')),
	array('label'=>'Create GestionUsuarios', 'url'=>array('create')),
	array('label'=>'Update GestionUsuarios', 'url'=>array('update', 'id'=>$model->id_GU)),
	array('label'=>'Delete GestionUsuarios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_GU),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GestionUsuarios', 'url'=>array('admin')),
);
?>

<h1>View GestionUsuarios #<?php echo $model->id_GU; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_GU',
		'usuario_GU',
		'contrasena_GU',
		'rol_GU',
		'identificacion_GU',
	),
)); ?>
