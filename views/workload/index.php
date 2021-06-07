<?php

    use yii\helpers\Html;
    use yii\widgets\LinkPager;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;
    use yii\grid\GridView;


?>

    <h1>Students</h1>



    <div class="row">
        <div class="col-lg-6">
            <?php $form = ActiveForm::begin(); ?>
        <?= $form -> field($model, 'faculty_id') -> label('Faculty') -> dropDownList(ArrayHelper::map($faculties, 'id', 'Name'), ['prompt' => 'Select the Faculty'])?>
        <?= $form -> field($model, 'depart_id') -> label('Department') -> dropDownList(ArrayHelper::map($departments, 'id', 'Name'), ['prompt' => 'Select the department'])?>  
                
        <?= $form -> field($model, 'datestart') -> Label('Date start') ?>
        <?= $form -> field($model, 'dateend') -> Label('Date end') ?>

            <?= Html::submitButton("<h5>Send</h5>", ['class' => 'btn btn-primary']) ?>
        </div> 
        <?php ActiveForm::end(); ?>
        </div>
    </div>