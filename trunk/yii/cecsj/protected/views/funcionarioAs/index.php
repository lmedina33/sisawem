<?php
/* @var $this FuncionarioAsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Funcionario Ases',
);

$this->menu=array(
	array('label'=>'Create FuncionarioAs', 'url'=>array('create')),
	array('label'=>'Manage FuncionarioAs', 'url'=>array('admin')),
);
?>

<h1>Funcionario Ases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
