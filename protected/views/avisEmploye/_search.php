<?php
/* @var $this AvisEmployeController */
/* @var $model AvisEmploye */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_avis_employe'); ?>
		<?php echo $form->textField($model,'id_avis_employe'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'note_generale'); ?>
		<?php echo $form->textField($model,'note_generale'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'commentaire_avis_employe'); ?>
		<?php echo $form->textField($model,'commentaire_avis_employe',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_employe'); ?>
		<?php echo $form->textField($model,'id_employe'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->