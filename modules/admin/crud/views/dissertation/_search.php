<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\crud\models\DissertationtSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dissertation-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Theme') ?>

    <?= $form->field($model, 'Degree') ?>

    <?= $form->field($model, 'DateDiss') ?>

    <?= $form->field($model, 'Lecturer_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
