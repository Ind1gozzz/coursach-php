<?php

    use yii\helpers\Html;
    use yii\bootstrap\LinkPager;

    $this -> title = 'Exam marks';

?>

    <h1>Exam marks</h1>

    <table class="table table-striped table-bordered table-hover table-dark">
    <div class="table-responsive">

        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Student name</th>
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
                    <th scope="row"><?= Html::encode("{$exammark -> student -> grouppp -> Name}") ?> </th>
                    <th scope="row"><?= Html::encode("{$exammark -> Mark}") ?> </th>
                    <th scope="row"><?= Html::encode("{$exammark -> exams -> Semestre}") ?> </th>
                    <th scope="row"><?= Html::encode("{$exammark -> exams -> subject -> Name}") ?> </th>
                    <th scope="row"><?= Html::encode("{$exammark -> exams -> Date}") ?> </th>

                </tr>
                <?php endforeach; ?>
        </tbody>
    </table>