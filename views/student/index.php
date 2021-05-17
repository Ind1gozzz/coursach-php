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

            <?= $form -> field($model, 'group') -> label("Group") -> dropDownList([
                <?php for ($i = 1; i < $groups -> length; $i++) 
                { ?>
                <? $i ?> => "{$groups[$i] -> Name}" 
               <? } ?>

            ])?>
                <?= Html::submitButton("<h5>Send</h5>", ['class' => 'btn btn-primary']) ?>
            </div> 

        <?php ActiveForm::end(); ?>
        </div>
    </div>