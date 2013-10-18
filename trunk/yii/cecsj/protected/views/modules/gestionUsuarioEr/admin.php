<?php
/* @var $this GestionUsuarioErController */
/* @var $model GestionUsuarioEr */

$this->breadcrumbs=array(
	'Gestion Usuario Ers'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List GestionUsuarioEr', 'url'=>array('index')),
	array('label'=>'Create GestionUsuarioEr', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#gestion-usuario-er-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Gestion Usuario Ers</h1>

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
	'id'=>'gestion-usuario-er-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'cedula_id_ER',
		'usuario_ER',
		'contrasena_ER',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
