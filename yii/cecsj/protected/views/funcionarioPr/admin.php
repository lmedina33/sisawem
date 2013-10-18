<?php
/* @var $this FuncionarioPrController */
/* @var $model FuncionarioPr */

$this->breadcrumbs=array(
	'Funcionario Prs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List FuncionarioPr', 'url'=>array('index')),
	array('label'=>'Create FuncionarioPr', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#funcionario-pr-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Funcionario Prs</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'funcionario-pr-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'cedula_id_PR',
		'nombre_PR',
		'apellido1_PR',
		'apellido2_PR',
		'fech_nacimiento_PR',
		'sexo_PR',
		/*
		'cod_iniciales_PR',
		'telefono1_PR',
		'telefono2_PR',
		'email_PR',
		'direccion_PR',
		'fech_ingreso_PR',
		'profesion',
		'nivel_asignado',
		'estado_PR',
		'nacionalidad_PR',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
