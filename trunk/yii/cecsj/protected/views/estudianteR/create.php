<?php
/* @var $this EstudianteRController */
/* @var $model EstudianteR */

$this->breadcrumbs=array(
	'Estudiante Rs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EstudianteR', 'url'=>array('index')),
	array('label'=>'Manage EstudianteR', 'url'=>array('admin')),
);
?>

<h1>Create EstudianteR</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>