<?php
/* @var $this CriteresNotationEmployeController */
/* @var $model CriteresNotationEmploye */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'criteres-notation-employe-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nom_critere_employe'); ?>
		<?php echo $form->textField($model,'nom_critere_employe',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nom_critere_employe'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'critere_note_employe'); ?>
		<?php echo $form->textField($model,'critere_note_employe'); ?>
		<?php echo $form->error($model,'critere_note_employe'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->