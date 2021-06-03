<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\modules\admin\models\Grouppp;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\StudentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<?php
    $groups = Grouppp::find()
        -> all();
?>

<div class="student-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <!-- <?= $form->field($model, 'id') ?>  -->

    <?= $form->field($model, 'FirstName') ?>

    <?= $form->field($model, 'LastName') ?>

    <?= $form->field($model, 'Gender') ?>

    <?= $form->field($model, 'BirthDate') ?>

    <?= $form -> field($model, 'Group_id') -> label('Group') -> dropDownList(ArrayHelper::map($groups, 'id', 'Name'), ['prompt' => 'Select the group'])?>
    

    <?php // echo $form->field($model, 'Group_id') ?>

    <?php  echo $form->field($model, 'Childs') ?>

    <?php  echo $form->field($model, 'Stipend') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
