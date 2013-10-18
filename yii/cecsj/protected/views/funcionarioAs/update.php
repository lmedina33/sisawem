<?php
/* @var $this FuncionarioAsController */
/* @var $model FuncionarioAs */

$this->breadcrumbs=array(
	'Funcionario Ases'=>array('index'),
	$model->cedula_id_AS=>array('view','id'=>$model->cedula_id_AS),
	'Update',
);

$this->menu=array(
	array('label'=>'List FuncionarioAs', 'url'=>array('index')),
	array('label'=>'Create FuncionarioAs', 'url'=>array('create')),
	array('label'=>'View FuncionarioAs', 'url'=>array('view', 'id'=>$model->cedula_id_AS)),
	array('label'=>'Manage FuncionarioAs', 'url'=>array('admin')),
);
?>

<h1>Update FuncionarioAs <?php echo $model->cedula_id_AS; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>