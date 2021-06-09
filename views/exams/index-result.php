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