<?php
/* @var $this GestionUsuarioPrController */
/* @var $model GestionUsuarioPr */

$this->breadcrumbs=array(
	'Gestion Usuario Prs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GestionUsuarioPr', 'url'=>array('index')),
	array('label'=>'Manage GestionUsuarioPr', 'url'=>array('admin')),
);
?>

<h1>Create GestionUsuarioPr</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>