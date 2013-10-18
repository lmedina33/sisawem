<?php
/* @var $this GestionUsuariosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gestion Usuarioses',
);

$this->menu=array(
	array('label'=>'Create GestionUsuarios', 'url'=>array('create')),
	array('label'=>'Manage GestionUsuarios', 'url'=>array('admin')),
);
?>

<h1>Gestion Usuarioses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
