<?php
/* @var $this UsuarioAdController */
/* @var $model UsuarioAd */

$this->breadcrumbs=array(
	'Usuario Ads'=>array('index'),
	$model->id_AD,
);

$this->menu=array(
	array('label'=>'List UsuarioAd', 'url'=>array('index')),
	array('label'=>'Create UsuarioAd', 'url'=>array('create')),
	array('label'=>'Update UsuarioAd', 'url'=>array('update', 'id'=>$model->id_AD)),
	array('label'=>'Delete UsuarioAd', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_AD),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UsuarioAd', 'url'=>array('admin')),
);
?>

<h1>View UsuarioAd #<?php echo $model->id_AD; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_AD',
		'usuario_AD',
		'contrasena_AD',
	),
)); ?>
