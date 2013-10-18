<?php
/* @var $this GestionUsuariosController */
/* @var $model GestionUsuarios */

$this->breadcrumbs=array(
	'Gestion Usuarioses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GestionUsuarios', 'url'=>array('index')),
	array('label'=>'Manage GestionUsuarios', 'url'=>array('admin')),
);
?>

<h1>Create GestionUsuarios</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>