<?php
/* @var $this FuncionarioAsController */
/* @var $model FuncionarioAs */

$this->breadcrumbs=array(
	'Funcionario Ases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FuncionarioAs', 'url'=>array('index')),
	array('label'=>'Manage FuncionarioAs', 'url'=>array('admin')),
);
?>

<h1>Create FuncionarioAs</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>