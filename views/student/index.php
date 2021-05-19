<?php

    use yii\helpers\Html;
    use yii\widgets\LinkPager;
    use yii\bootstrap\ActiveForm;
    use yii\helpers\ArrayHelper;

    $this -> title = 'Lab. 1';

?>

    <h1>Students</h1>

    <div class="row">
        <div class="col-lg-6">
            <?php $form = ActiveForm::begin(); ?>
        <?= $form -> field($model, 'group') -> label("Group") -> dropDownList(ArrayHelper::map($groups, 'id', 'Name'), ['prompt' => 'Select the group'])?>
                <?= Html::submitButton("<h5>Send</h5>", ['class' => 'btn btn-primary']) ?>
            </div> 
        <?php ActiveForm::end(); ?>
        </div>
    </div>