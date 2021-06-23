<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\crud\models\Dissertation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dissertation-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Theme')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Degree')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DateDiss')->textInput() ?>

    <?= $form->field($model, 'Lecturer_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
