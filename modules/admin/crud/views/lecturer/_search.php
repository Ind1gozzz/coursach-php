<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\crud\models\LecturerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lecturer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'FirstName') ?>

    <?= $form->field($model, 'LastName') ?>

    <?= $form->field($model, 'Gender') ?>

    <?= $form->field($model, 'BirthDate') ?>

    <?php // echo $form->field($model, 'Salary') ?>

    <?php // echo $form->field($model, 'Childs') ?>

    <?php // echo $form->field($model, 'Department_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
