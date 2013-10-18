<?php
/* @var $this GestionUsuarioAdController */
/* @var $model GestionUsuarioAd */

$this->breadcrumbs=array(
	'Gestion Usuario Ads'=>array('index'),
	$model->id_AD=>array('view','id'=>$model->id_AD),
	'Update',
);

$this->menu=array(
	array('label'=>'List GestionUsuarioAd', 'url'=>array('index')),
	array('label'=>'Create GestionUsuarioAd', 'url'=>array('create')),
	array('label'=>'View GestionUsuarioAd', 'url'=>array('view', 'id'=>$model->id_AD)),
	array('label'=>'Manage GestionUsuarioAd', 'url'=>array('admin')),
);
?>

<h1>Update GestionUsuarioAd <?php echo $model->id_AD; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>