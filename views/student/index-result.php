<?php

    use yii\helpers\Html;
    use yii\bootstrap\LinkPager;

    $this -> title = 'Lab. 1';

?>

    <h1>Students</h1>
    <table class="table table-striped table-bordered table-hover table-dark">
    <div class="table-responsive">

        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">First name</th>
                <th scope="col">Last name</th>
                <th scope="col">Gender</th>
                <th scope="col">Birth date</th>
                <th scope="col">Group</th>
                <th scope="col">Group id</th>
                <th scope="col">Childs</th>
                <th scope="col">Stipend</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student): ?>
                <tr>
                <th scope="row"><?= Html::encode("{$student -> id}") ?> </th>
                    <th scope="row"><?= Html::encode("{$student -> FirstName}") ?> </th>
                    <th scope="row"><?= Html::encode("{$student -> LastName}") ?> </th>
                    <th scope="row"><?= Html::encode("{$student -> Gender}") ?> </th>
                    <th scope="row"><?= Html::encode("{$student -> BirthDate}") ?> </th>
                    <th scope="row"><?= Html::encode("{$student -> grouppp -> Name}") ?> </th>
                    <th scope="row"><?= Html::encode("{$student -> Group_id}") ?> </th>
                    <th scope="row"><?= Html::encode("{$student -> Childs}") ?> </th>
                    <th scope="row"><?= Html::encode("{$student -> Stipend}") ?> </th>
                    <th scope="row"><?= Html::encode("{$model -> id}") ?> </th>
                    <th scope="row"><?= Html::encode("{$model -> group}") ?> </th>

                </tr>
                <?php endforeach; ?>
        </tbody>
    </table>