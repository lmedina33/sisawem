<?php
/* @var $this RegistroEstudianteController */
/* @var $model RegistroEstudiante */

$this->breadcrumbs=array(
	'Registro Estudiantes'=>array('index'),
	$model->id_RE=>array('view','id'=>$model->id_RE),
	'Update',
);

$this->menu=array(
	array('label'=>'List RegistroEstudiante', 'url'=>array('index')),
	array('label'=>'Create RegistroEstudiante', 'url'=>array('create')),
	array('label'=>'View RegistroEstudiante', 'url'=>array('view', 'id'=>$model->id_RE)),
	array('label'=>'Manage RegistroEstudiante', 'url'=>array('admin')),
);
?>

<h1>Update RegistroEstudiante <?php echo $model->id_RE; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>