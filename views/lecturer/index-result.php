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
                <th scope="col">First name</th>
                <th scope="col">Last name</th>
                <th scope="col">Department</th>
                <th scope="col">Faculty</th>
                <th scope="col">Degree</th>
                <th scope="col">Theme</th>
                <th scope="col">Date dissertation</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lecturers as $lect): ?>
                <tr>
                <th scope="row"><?= Html::encode("{$lect -> id}") ?> </th>
                    <th scope="row"><?= Html::encode("{$lect -> FirstName}") ?> </th>
                    <th scope="row"><?= Html::encode("{$lect -> LastName}") ?> </th>
                    <th scope="row"><?= Html::encode("{$lect -> department -> Name}") ?> </th>
                    <th scope="row"><?= Html::encode("{$lect -> department -> faculty -> Name}") ?> </th>
                    <th scope="row"><?= Html::encode("{$lect -> dissertation -> Degree}") ?> </th>
                    <th scope="row"><?= Html::encode("{$lect -> dissertation -> Theme}") ?> </th>
                    <th scope="row"><?= Html::encode("{$lect -> dissertation -> DateDiss}") ?> </th>

                </tr>
                <?php endforeach; ?>
        </tbody>
    </table>