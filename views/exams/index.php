<?php

    use yii\helpers\Html;
    use yii\widgets\LinkPager;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;
    use yii\grid\GridView;

    $this -> title = 'Exam marks';
    $this->params['breadcrumbs'][] = $this->title;


?>

    <div class="row">
        <div class="col-lg-6">
            <?php $form = ActiveForm::begin(); ?>
        <?= $form -> field($model, 'grous') -> label('Group') -> dropDownList(ArrayHelper::map($groups, 'id', 'Name'), ['prompt' => 'Select the group'])?>
        <?= $form -> field($model, 'subbj') -> label('Subject') -> dropDownList(ArrayHelper::map($subjs, 'id', 'Name'), ['prompt' => 'Select the subject'])?>
        <?= $form -> field($model, 'semes') -> label('Semester') ?>
                <?= Html::submitButton("<h5>Send</h5>", ['class' => 'btn btn-primary']) ?>
            </div> 
        <?php ActiveForm::end(); ?>
        </div>

    <br>
    <br>

    <h1>Exams</h1>

    <table class="table table-striped table-bordered table-hover table-dark">
    <div class="table-responsive">

        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Lecturer name</th>
                <th scope="col">Group</th>
                <th scope="col">Subject</th>
                <th scope="col">Semester</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($exams as $exam): ?>
                <tr>
                    <th scope="row"><?= Html::encode("{$exam -> id}") ?> </th>
                    <th scope="row"><?= Html::encode("{$exam -> lecturer -> FirstName}" . " " . "{$exam -> lecturer -> LastName}") ?> </th>
                    <th scope="row"><?= Html::encode("{$exam -> grouppp -> Name}") ?> </th>
                    <th scope="row"><?= Html::encode("{$exam -> subject -> Name}") ?> </th>
                    <th scope="row"><?= Html::encode("{$exam -> Semestre}") ?> </th>

                </tr>
                <?php endforeach; ?>
        </tbody>
    </table>