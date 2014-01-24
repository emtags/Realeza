<?php
/* @var $this EstateController */
/* @var $model Estate */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'street_address'); ?>
		<?php echo $form->textField($model,'street_address',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'route'); ?>
		<?php echo $form->textField($model,'route',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'intersection'); ?>
		<?php echo $form->textField($model,'intersection',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'political'); ?>
		<?php echo $form->textField($model,'political',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'country'); ?>
		<?php echo $form->textField($model,'country',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'administrative_area_level_1'); ?>
		<?php echo $form->textField($model,'administrative_area_level_1',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'administrative_area_level_2'); ?>
		<?php echo $form->textField($model,'administrative_area_level_2',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'administrative_area_level_3'); ?>
		<?php echo $form->textField($model,'administrative_area_level_3',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'colloquial_area'); ?>
		<?php echo $form->textField($model,'colloquial_area',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'locality'); ?>
		<?php echo $form->textField($model,'locality',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sublocality'); ?>
		<?php echo $form->textField($model,'sublocality',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'neighborhood'); ?>
		<?php echo $form->textField($model,'neighborhood',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'premise'); ?>
		<?php echo $form->textField($model,'premise',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subpremise'); ?>
		<?php echo $form->textField($model,'subpremise',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'postal_code'); ?>
		<?php echo $form->textField($model,'postal_code',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'natural_feature'); ?>
		<?php echo $form->textField($model,'natural_feature',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'airport'); ?>
		<?php echo $form->textField($model,'airport',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'park'); ?>
		<?php echo $form->textField($model,'park',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'point_of_interest'); ?>
		<?php echo $form->textField($model,'point_of_interest',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'post_box'); ?>
		<?php echo $form->textField($model,'post_box',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'street_number'); ?>
		<?php echo $form->textField($model,'street_number',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'floor'); ?>
		<?php echo $form->textField($model,'floor',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'room'); ?>
		<?php echo $form->textField($model,'room',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->