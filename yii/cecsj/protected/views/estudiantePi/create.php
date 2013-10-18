<?php
/* @var $this EstudiantePiController */
/* @var $model EstudiantePi */

$this->breadcrumbs=array(
	'Estudiante Pis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EstudiantePi', 'url'=>array('index')),
	array('label'=>'Manage EstudiantePi', 'url'=>array('admin')),
);
?>

<h1>Create EstudiantePi</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>