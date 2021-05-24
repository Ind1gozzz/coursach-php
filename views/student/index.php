<?php

    use yii\helpers\Html;
    use yii\widgets\LinkPager;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;
    use yii\grid\GridView;

    $this -> title = 'Lab. 5';
    $this->params['breadcrumbs'][] = $this->title;


?>

    <h1>Students</h1>



    <div class="row">
        <div class="col-lg-6">
            <?php $form = ActiveForm::begin(); ?>
        <?= $form -> field($model, 'group') -> label('Group') -> dropDownList(ArrayHelper::map($groups, 'id', 'Name'), ['prompt' => 'Select the group'])?>
        <?= $form -> field($model, 'gender') -> label('Gender') -> dropDownList(['Male' => 'Male', 'Female' => 'Female'], ['prompt' => 'Select gender']) ?>
        <?= $form -> field($model, 'stip') -> label('Gets Stipend ?') -> radioList(['0' => 'Yes', '1' => 'No'])?>
        <?= $form -> field($model, 'stipend') -> label('Stipend') ?>
        <?= $form -> field($model, 'childs') -> label('Childs') ?>
                <?= Html::submitButton("<h5>Send</h5>", ['class' => 'btn btn-primary']) ?>
            </div> 
        <?php ActiveForm::end(); ?>
        </div>
    </div>