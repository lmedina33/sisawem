<?php
/* @var $this EstudiantePiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Estudiante Pis',
);

$this->menu=array(
	array('label'=>'Create EstudiantePi', 'url'=>array('create')),
	array('label'=>'Manage EstudiantePi', 'url'=>array('admin')),
);
?>

<h1>Estudiante Pis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
