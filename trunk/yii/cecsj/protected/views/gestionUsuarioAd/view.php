<?php
/* @var $this GestionUsuarioAdController */
/* @var $model GestionUsuarioAd */

$this->breadcrumbs=array(
	'Gestion Usuario Ads'=>array('index'),
	$model->id_AD,
);

$this->menu=array(
	array('label'=>'List GestionUsuarioAd', 'url'=>array('index')),
	array('label'=>'Create GestionUsuarioAd', 'url'=>array('create')),
	array('label'=>'Update GestionUsuarioAd', 'url'=>array('update', 'id'=>$model->id_AD)),
	array('label'=>'Delete GestionUsuarioAd', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_AD),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GestionUsuarioAd', 'url'=>array('admin')),
);
?>

<h1>View GestionUsuarioAd #<?php echo $model->id_AD; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_AD',
		'usuario_AD',
		'contrasena_AD',
	),
)); ?>
