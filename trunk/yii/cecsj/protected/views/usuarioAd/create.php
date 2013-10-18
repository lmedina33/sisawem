<?php
/* @var $this UsuarioAdController */
/* @var $model UsuarioAd */

$this->breadcrumbs=array(
	'Usuario Ads'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UsuarioAd', 'url'=>array('index')),
	array('label'=>'Manage UsuarioAd', 'url'=>array('admin')),
);
?>

<h1>Create UsuarioAd</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>