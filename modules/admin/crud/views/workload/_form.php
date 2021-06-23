<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\crud\models\Workload */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="workload-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Subject_id')->textInput() ?>

    <?= $form->field($model, 'Lab')->textInput() ?>

    <?= $form->field($model, 'Lect')->textInput() ?>

    <?= $form->field($model, 'Pract')->textInput() ?>

    <?= $form->field($model, 'Hours')->textInput() ?>

    <?= $form->field($model, 'Semester')->textInput() ?>

    <?= $form->field($model, 'Lecturer_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
