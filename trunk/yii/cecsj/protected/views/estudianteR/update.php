<?php
/* @var $this EstudianteRController */
/* @var $model EstudianteR */

$this->breadcrumbs=array(
	'Estudiante Rs'=>array('index'),
	$model->cedula_id_ER=>array('view','id'=>$model->cedula_id_ER),
	'Update',
);

$this->menu=array(
	array('label'=>'List EstudianteR', 'url'=>array('index')),
	array('label'=>'Create EstudianteR', 'url'=>array('create')),
	array('label'=>'View EstudianteR', 'url'=>array('view', 'id'=>$model->cedula_id_ER)),
	array('label'=>'Manage EstudianteR', 'url'=>array('admin')),
);
?>

<h1>Update EstudianteR <?php echo $model->cedula_id_ER; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>