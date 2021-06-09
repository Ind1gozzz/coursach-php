<?php

    use yii\helpers\Html;
    use yii\bootstrap\LinkPager;

    $this -> title = 'Exam marks';

?>

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