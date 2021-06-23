<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\crud\models\Exammarks */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="exammarks-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Student_id')->textInput() ?>

    <?= $form->field($model, 'Mark')->textInput() ?>

    <?= $form->field($model, 'Exam_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
