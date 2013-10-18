<?php
/* @var $this GestionUsuarioAdController */
/* @var $model GestionUsuarioAd */

$this->breadcrumbs=array(
	'Gestion Usuario Ads'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GestionUsuarioAd', 'url'=>array('index')),
	array('label'=>'Manage GestionUsuarioAd', 'url'=>array('admin')),
);
?>

<h1>Create GestionUsuarioAd</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>