<?php
/* @var $this GestionUsuarioErController */
/* @var $model GestionUsuarioEr */

$this->breadcrumbs=array(
	'Gestion Usuario Ers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GestionUsuarioEr', 'url'=>array('index')),
	array('label'=>'Manage GestionUsuarioEr', 'url'=>array('admin')),
);
?>

<h1>Create GestionUsuarioEr</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>