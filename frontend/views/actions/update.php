<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Actions */
/* @var $form ActiveForm */
?>
<div class="actions-update">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'title') ?>
        <?= $form->field($model, 'percent') ?>
        <?= $form->field($model, 'level') ?>
        <?= $form->field($model, 'rules') ?>
        <?= $form->field($model, 'active') ?>
        <?= $form->field($model, 'created_at') ?>
        <?= $form->field($model, 'updated_at') ?>
        <?= $form->field($model, 'group') ?>
        <?= $form->field($model, 'time_active') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- actions-update -->
