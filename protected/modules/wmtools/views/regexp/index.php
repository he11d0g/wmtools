<?php
/* @var $this DefaultController */

$form=$this->beginWidget('CActiveForm', array(
    'id'=>'regexp-form',
    'enableClientValidation'=>false,
    'clientOptions'=>array(
        'validateOnSubmit'=>false,
    ),
)); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'template'); ?>
        <?php echo $form->textField($model,'template'); ?>
        <?php //echo $form->error($model,'template'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model,'text'); ?>
        <?php echo $form->textArea($model,'text',array('style' => 'width:400px;height:200px')); ?>
        <?php //echo $form->error($model,'text'); ?>
    </div>
    <div class="row">

    </div>
    <div class="row">
        <?php echo CHtml::submitButton('Отправить') ?>
        <?php //echo $form->error($model,'text'); ?>
    </div>

<?php $this->endWidget(); ?>