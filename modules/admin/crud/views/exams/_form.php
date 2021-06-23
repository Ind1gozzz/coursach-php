<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\crud\models\Exams */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="exams-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Subject_id')->textInput() ?>

    <?= $form->field($model, 'Group_id')->textInput() ?>

    <?= $form->field($model, 'Date')->textInput() ?>

    <?= $form->field($model, 'Lexturer_id')->textInput() ?>

    <?= $form->field($model, 'Semestre')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
