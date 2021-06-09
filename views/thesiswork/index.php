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
        <?= $form -> field($model, 'dept_id') -> label('Department') -> dropDownList(ArrayHelper::map($departs, 'id', 'Name'), ['prompt' => 'Select the department'])?>
        <?= $form -> field($model, 'lect_id') -> label('Lecturer') -> dropDownList(ArrayHelper::map($lects, 'id', 'fullName'), ['prompt' => 'Select the lecturer'])?>
                <?= Html::submitButton("<h5>Send</h5>", ['class' => 'btn btn-primary']) ?>
            </div> 
        <?php ActiveForm::end(); ?>
        </div>

    <br>
    <br>

    <h1>Themeworks</h1>

    <table class="table table-striped table-bordered table-hover table-dark">
    <div class="table-responsive">

        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Student name</th>
                <th scope="col">Group</th>
                <th scope="col">Theme</th>
                <th scope="col">Lecturer name</th>
                <th scope="col">Department</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($thess as $thessis): ?>
                <tr>
                    <th scope="row"><?= Html::encode("{$thessis -> id}") ?> </th>
                    <th scope="row"><?= Html::encode("{$thessis -> student -> FirstName}" . " " . "{$thessis -> student -> LastName}") ?> </th>
                    <th scope="row"><?= Html::encode("{$thessis -> student -> grouppp -> Name}") ?> </th>
                    <th scope="row"><?= Html::encode("{$thessis -> Theme}") ?> </th>
                    <th scope="row"><?= Html::encode("{$thessis -> lecturer -> FirstName}" . " " . "{$thessis -> lecturer -> LastName}") ?> </th>
                    <th scope="row"><?= Html::encode("{$thessis -> lecturer -> department -> Name}") ?> </th>

                </tr>
                <?php endforeach; ?>
        </tbody>
    </table>