<?php
/* @var $this EstudiantePiController */
/* @var $model EstudiantePi */

$this->breadcrumbs=array(
	'Estudiante Pis'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List EstudiantePi', 'url'=>array('index')),
	array('label'=>'Create EstudiantePi', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#estudiante-pi-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Estudiante Pis</h1>

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
	'id'=>'estudiante-pi-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_estudiante_ep',
		'identificacion_ep',
		'fecha_solicitud',
		'nombre_ep',
		'fecha_na_ep',
		'genero_ep',
		/*
		'celular_ep',
		'correo_ep',
		'nivel_ep',
		'direccion_ep',
		'identificación_ma',
		'nombre_ma',
		'telefono_h_ma',
		'telefono_t_ma',
		'celular_ma',
		'oficio_ma',
		'lugar_trabajo_ma',
		'identificación_pa',
		'nombre_pa',
		'telefono_h_pa',
		'telefono_t_pa',
		'celular_pa',
		'oficio_pa',
		'lugar_trabajo_pa',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
