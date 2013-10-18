<?php
/* @var $this EstudiantePiController */
/* @var $model EstudiantePi */

$this->breadcrumbs=array(
	'Estudiante Pis'=>array('index'),
	$model->id_estudiante_ep=>array('view','id'=>$model->id_estudiante_ep),
	'Update',
);

$this->menu=array(
	array('label'=>'List EstudiantePi', 'url'=>array('index')),
	array('label'=>'Create EstudiantePi', 'url'=>array('create')),
	array('label'=>'View EstudiantePi', 'url'=>array('view', 'id'=>$model->id_estudiante_ep)),
	array('label'=>'Manage EstudiantePi', 'url'=>array('admin')),
);
?>

<h1>Update EstudiantePi <?php echo $model->id_estudiante_ep; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>