<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\modules\admin\models\Department;
use app\modules\admin\models\Faculty;
use app\modules\admin\models\Post;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\LecturerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lecturer-search">

    <?php
        $departs = Department::find('id, Name')
            -> all();

        $faculties = Faculty::find('id, Name')
            -> all();

        $posts = Post::find('id, Post')
            -> all();
    ?>

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <!-- <?= $form->field($model, 'id') ?> -->

    <?= $form->field($model, 'FirstName') ?>

    <?= $form->field($model, 'LastName') ?>

    <?= $form->field($model, 'Gender') ?>

    <?= $form->field($model, 'BirthDate') ?>    
    
    <?= $form->field($model, 'LectAge') -> input('number', ['value' => 0])?>

    <?= $form -> field($model, 'Department_id') -> label('Department') -> dropDownList(ArrayHelper::map($departs, 'id', 'Name'), ['prompt' => 'Select the department'])?>

    <?= $form -> field($model, 'Faculty_id') -> label('Faculty') -> dropDownList(ArrayHelper::map($faculties, 'id', 'Name'), ['prompt' => 'Select the faculty'])?>

    <?= $form -> field($model, 'Post_idid') -> label('Post') -> dropDownList(ArrayHelper::map($posts, 'Post', 'Post'), ['prompt' => 'Select the post'])?>

    <?= $form -> field($model, 'genderrr') -> label('Gender') -> dropDownList(['Male' => 'Male', 'Female' => 'Female'], ['prompt' => 'Select gender']) ?>

    <?= $form -> field($model, 'HasChilds') -> label('Has Childs ?') -> radioList(['0' => 'Yes', '1' => 'No'])?>

    <?php echo $form->field($model, 'Salary') ?>

    <?php echo $form->field($model, 'Childs') ?>

    <!-- <?php echo $form->field($model, 'Department_id') ?> -->

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Reset', ['lecturer/index'], ['class' => 'btn btn-info']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
