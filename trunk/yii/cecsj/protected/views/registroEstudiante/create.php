<?php
/* @var $this RegistroEstudianteController */
/* @var $model RegistroEstudiante */

$this->breadcrumbs=array(
	'Registro Estudiantes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RegistroEstudiante', 'url'=>array('index')),
	array('label'=>'Manage RegistroEstudiante', 'url'=>array('admin')),
);
?>

<h1>Create RegistroEstudiante</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>