<?php
/* @var $this EmployeController */
/* @var $model Employe */

$this->breadcrumbs=array(
	'Employes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Employe', 'url'=>array('index')),
	array('label'=>'Create Employe', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#employe-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Employes</h1>

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
	'id'=>'employe-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_employe',
		'nom_employe',
		'prenom_employe',
		'age_employe',
		'employe_travaille',
		'mail_employe',
		/*
		'telephone_employe',
		'id_adresse',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>