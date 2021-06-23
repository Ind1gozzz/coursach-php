<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\crud\models\ExamsksSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="exams-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Subject_id') ?>

    <?= $form->field($model, 'Group_id') ?>

    <?= $form->field($model, 'Date') ?>

    <?= $form->field($model, 'Lexturer_id') ?>

    <?php // echo $form->field($model, 'Semestre') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
