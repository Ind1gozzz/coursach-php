<?php

    use yii\helpers\Html;
    use yii\bootstrap\LinkPager;

    $this -> title = 'Dissertations';

?>

    <h1>Dissertations</h1>
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
                <th scope="col">Group</th>
                <th scope="col">Faculty</th>
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
                    <th scope="row"><?= Html::encode("{$workload -> lecturer -> department -> specialities -> grouppp -> Name}") ?> </th>
                    <th scope="row"><?= Html::encode("{$workload -> lecturer -> department  -> faculty -> Name}") ?> </th>
                    <th scope="row"><?= Html::encode("{$workload -> lecturer -> FirstName}" . " " . "{$workload -> lecturer -> LastName}") ?> </th>

                </tr>
                <?php endforeach; ?>
        </tbody>
    </table>