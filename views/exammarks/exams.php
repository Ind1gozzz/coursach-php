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
        <?= $form -> field($model, 'mark') -> label('Exam marks ?') -> radioList(['5' => 'Only 5', '1' => 'Without 3', '2' => 'Without 2'])?>
                <?= Html::submitButton("<h5>Send</h5>", ['class' => 'btn btn-primary']) ?>
            </div> 
        <?php ActiveForm::end(); ?>
        </div>

    <br>
    <br>

    <table class="table table-striped table-bordered table-hover table-dark">
    <div class="table-responsive">

        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Student name</th>
                <th scope="col">Faculty</th>
                <th scope="col">Group</th>
                <th scope="col">Mark</th>
                <th scope="col">Semester</th>
                <th scope="col">Subject</th>
                <th scope="col">Exam date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($exammarks as $exammark): ?>
                <tr>
                    <th scope="row"><?= Html::encode("{$exammark -> id}") ?> </th>
                    <th scope="row"><?= Html::encode("{$exammark -> student -> FirstName}" . " " . "{$exammark -> student -> LastName}") ?> </th>
                    <th scope="row"><?= Html::encode("{$exammark -> student -> grouppp -> speciality -> department -> faculty -> Name}") ?> </th>
                    <th scope="row"><?= Html::encode("{$exammark -> student -> grouppp -> Name}") ?> </th>
                    <th scope="row"><?= Html::encode("{$exammark -> Mark}") ?> </th>
                    <th scope="row"><?= Html::encode("{$exammark -> exams -> Semestre}") ?> </th>
                    <th scope="row"><?= Html::encode("{$exammark -> exams -> subject -> Name}") ?> </th>
                    <th scope="row"><?= Html::encode("{$exammark -> exams -> Date}") ?> </th>

                </tr>
                <?php endforeach; ?>
        </tbody>
    </table>