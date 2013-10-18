<?php
/* @var $this EstudianteRController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Estudiante Rs',
);

$this->menu=array(
	array('label'=>'Create EstudianteR', 'url'=>array('create')),
	array('label'=>'Manage EstudianteR', 'url'=>array('admin')),
);
?>

<h1>Estudiante Rs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
