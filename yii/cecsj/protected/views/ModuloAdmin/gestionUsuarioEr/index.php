<?php
/* @var $this GestionUsuarioErController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gestion Usuario Ers',
);

$this->menu=array(
	array('label'=>'Create GestionUsuarioEr', 'url'=>array('create')),
	array('label'=>'Manage GestionUsuarioEr', 'url'=>array('admin')),
);
?>

<h1>Gestion Usuario Ers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
