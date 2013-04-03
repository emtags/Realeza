<?php
/* @var $this EstateController */
/* @var $model Estate */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'estate-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'street_address'); ?>
		<?php echo $form->textField($model,'street_address',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'street_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'route'); ?>
		<?php echo $form->textField($model,'route',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'route'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'intersection'); ?>
		<?php echo $form->textField($model,'intersection',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'intersection'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'political'); ?>
		<?php echo $form->textField($model,'political',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'political'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'country'); ?>
		<?php echo $form->textField($model,'country',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'administrative_area_level_1'); ?>
		<?php echo $form->textField($model,'administrative_area_level_1',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'administrative_area_level_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'administrative_area_level_2'); ?>
		<?php echo $form->textField($model,'administrative_area_level_2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'administrative_area_level_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'administrative_area_level_3'); ?>
		<?php echo $form->textField($model,'administrative_area_level_3',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'administrative_area_level_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'colloquial_area'); ?>
		<?php echo $form->textField($model,'colloquial_area',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'colloquial_area'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'locality'); ?>
		<?php echo $form->textField($model,'locality',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'locality'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sublocality'); ?>
		<?php echo $form->textField($model,'sublocality',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'sublocality'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'neighborhood'); ?>
		<?php echo $form->textField($model,'neighborhood',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'neighborhood'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'premise'); ?>
		<?php echo $form->textField($model,'premise',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'premise'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subpremise'); ?>
		<?php echo $form->textField($model,'subpremise',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'subpremise'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'postal_code'); ?>
		<?php echo $form->textField($model,'postal_code',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'postal_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'natural_feature'); ?>
		<?php echo $form->textField($model,'natural_feature',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'natural_feature'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'airport'); ?>
		<?php echo $form->textField($model,'airport',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'airport'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'park'); ?>
		<?php echo $form->textField($model,'park',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'park'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'point_of_interest'); ?>
		<?php echo $form->textField($model,'point_of_interest',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'point_of_interest'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'post_box'); ?>
		<?php echo $form->textField($model,'post_box',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'post_box'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'street_number'); ?>
		<?php echo $form->textField($model,'street_number',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'street_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'floor'); ?>
		<?php echo $form->textField($model,'floor',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'floor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'room'); ?>
		<?php echo $form->textField($model,'room',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'room'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->