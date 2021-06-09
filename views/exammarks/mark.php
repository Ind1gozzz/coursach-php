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
        <?= $form -> field($model, 'lect_id') -> label('Lecturer') -> dropDownList(ArrayHelper::map($lects, 'id', 'fullName'), ['prompt' => 'Select the lecturer'])?>
        <?= $form -> field($model, 'semes') -> label('Semester')  ?>
        <?= $form -> field($model, 'dateStart') -> label('Date start')  ?>
        <?= $form -> field($model, 'dateEnd') -> label('Date end')  ?>
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
                <th scope="col">Student name</th>
                <th scope="col">Group</th>
                <th scope="col">Subject</th>
                <th scope="col">Lecturer name</th>
                <th scope="col">Semester</th>
                <th scope="col">Date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($marks as $mark): ?>
                <tr>
                    <th scope="row"><?= Html::encode("{$mark -> id}") ?> </th>
                    <th scope="row"><?= Html::encode("{$mark -> student -> FirstName}" . " " . "{$mark -> student -> LastName}") ?> </th>
                    <th scope="row"><?= Html::encode("{$mark -> exams -> grouppp -> Name}") ?> </th>
                    <th scope="row"><?= Html::encode("{$mark -> exams -> subject -> Name}") ?> </th>
                    <th scope="row"><?= Html::encode("{$mark -> exams -> lecturer -> FirstName}" . " " . "{$mark -> exams -> lecturer -> LastName}") ?> </th>
                    <th scope="row"><?= Html::encode("{$mark -> exams -> Semestre}") ?> </th>
                    <th scope="row"><?= Html::encode("{$mark -> exams -> Date}") ?> </th>

                </tr>
                <?php endforeach; ?>
        </tbody>
    </table>