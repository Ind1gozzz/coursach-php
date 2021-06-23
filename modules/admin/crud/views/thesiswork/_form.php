<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\crud\models\Thesiswork */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="thesiswork-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Student_id')->textInput() ?>

    <?= $form->field($model, 'Theme')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Lecturer_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
