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
        <?= $form -> field($model, 'depart_id') -> label('Department') -> dropDownList(ArrayHelper::map($departs, 'id', 'Name'), ['prompt' => 'Select the department'])?> 
        <?= $form -> field($model, 'semes') -> label('Semester)') ?>

            <?= Html::submitButton("<h5>Send</h5>", ['class' => 'btn btn-primary']) ?>
        </div> 
        <?php ActiveForm::end(); ?>
    </div>

    <h1>Workload</h1>

    <table class="table table-striped table-bordered table-hover table-dark">
    <div class="table-responsive">

        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Subject name</th>
                <th scope="col">Labs</th>
                <th scope="col">Lect</th>
                <th scope="col">Pract</th>
                <th scope="col">Hours</th>
                <th scope="col">Semester</th>
                <th scope="col">Department</th>
                <th scope="col">Lectuer</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($workloads as $workload): ?>
                <tr>
                    <th scope="row"><?= Html::encode("{$workload -> id}") ?> </th>
                    <th scope="row"><?= Html::encode("{$workload -> subject -> Name}") ?> </th>
                    <th scope="row"><?= Html::encode("{$workload -> Lab}") ?> </th>
                    <th scope="row"><?= Html::encode("{$workload -> Lect}") ?> </th>
                    <th scope="row"><?= Html::encode("{$workload -> Pract}") ?> </th>
                    <th scope="row"><?= Html::encode("{$workload -> Hours}") ?> </th>
                    <th scope="row"><?= Html::encode("{$workload -> Semester}") ?> </th>
                    <th scope="row"><?= Html::encode("{$workload -> lecturer -> department -> Name}") ?> </th>
                    <th scope="row"><?= Html::encode("{$workload -> lecturer -> FirstName}" . " " . "{$workload -> lecturer -> LastName}") ?> </th>

                </tr>
                <?php endforeach; ?>
        </tbody>
    </table>