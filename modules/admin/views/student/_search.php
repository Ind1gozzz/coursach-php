<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\modules\admin\models\Grouppp;
use app\modules\admin\models\Faculty;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\StudentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<?php
    $groups = Grouppp::find()
        -> all();

    $faculties = Faculty::find()
        -> all();    
?>

<div class="student-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <!-- <?= $form->field($model, 'id') ?>  -->

    <!-- <?= $form->field($model, 'FirstName') ?>   -->

    <!-- <?= $form->field($model, 'LastName') ?>  -->

    <!-- <?= $form->field($model, 'Gender') ?> -->

    <?= $form->field($model, 'BirthDate') ?>

    <?= $form->field($model, 'StudAge') -> input('number', ['value' => 0])?>

    <?= $form -> field($model, 'Group_id') -> label('Group') -> dropDownList(ArrayHelper::map($groups, 'id', 'Name'), ['prompt' => 'Select the group'])?>

    <?= $form -> field($model, 'Faculty_id') -> label('Faculty') -> dropDownList(ArrayHelper::map($faculties, 'id', 'Name'), ['prompt' => 'Select the faculty'])?>

    <?= $form -> field($model, 'genderrr') -> label('Gender') -> dropDownList(['Male' => 'Male', 'Female' => 'Female'], ['prompt' => 'Select gender']) ?>
    
    <?= $form -> field($model, 'stip') -> label('Gets Stipend ?') -> radioList(['0' => 'Yes', '1' => 'No'])?>

    <?= $form -> field($model, 'HasChilds') -> label('Has Childs ?') -> radioList(['0' => 'Yes', '1' => 'No'])?>
    
    <?php // echo $form->field($model, 'Group_id') ?>

    <?php echo date("Y"); ?>

    <?php  echo $form->field($model, 'Childs') ?>

    <?php  echo $form->field($model, 'Stipend') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Reset', ['student/index'], ['class' => 'btn btn-info']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
