<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AttributesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="attributes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'attribute_id') ?>

    <?= $form->field($model, 'elliot_user_id') ?>

    <?= $form->field($model, 'attribute_name') ?>

    <?= $form->field($model, 'attribute_label') ?>

    <?= $form->field($model, 'attribute_description') ?>

    <?php // echo $form->field($model, 'attribute_type') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
