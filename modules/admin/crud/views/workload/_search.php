<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\crud\models\WorkloadSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="workload-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Subject_id') ?>

    <?= $form->field($model, 'Lab') ?>

    <?= $form->field($model, 'Lect') ?>

    <?= $form->field($model, 'Pract') ?>

    <?php // echo $form->field($model, 'Hours') ?>

    <?php // echo $form->field($model, 'Semester') ?>

    <?php // echo $form->field($model, 'Lecturer_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
