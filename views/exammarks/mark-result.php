<?php

    use yii\helpers\Html;
    use yii\bootstrap\LinkPager;

    $this -> title = 'Exam marks';

?>

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