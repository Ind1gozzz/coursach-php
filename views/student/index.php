<?php

    use yii\helpers\Html;
    use yii\widgets\LinkPager;
    use yii\bootstrap\ActiveForm;

    $this -> title = 'Lab. 1';

?>

    <h1>Students</h1>

    <div class="row">
        <div class="col-lg-6">
            <?php $form = ActiveForm::begin(); ?>
            <?= $form -> field($model, 'grow') -> label("Group") -> checkBoxList([
                1=> "{$groups[0] -> Name}",
                2=> "{$groups[1] -> Name}",
                3=> "{$groups[2] -> Name}",
                4=> "{$groups[3] -> Name}",
                5=> "{$groups[4] -> Name}",
                6=> "{$groups[5] -> Name}",
                7=> "{$groups[6] -> Name}",
                8=> "{$groups[7] -> Name}",
                9=> "{$groups[8] -> Name}",
                11=> "{$groups[9] -> Name}",
                11 => "{$groups[10] -> Name}",
                12 => "{$groups[11] -> Name}",
                13 => "{$groups[12] -> Name}",
                14 => "{$groups[13] -> Name}"                
            ]) ?>
            
                <?= Html::submitButton("<h5>Send</h5>", ['class' => 'btn btn-primary']) ?>
            </div> 

        <?php ActiveForm::end(); ?>
        </div>
    </div>