<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\crud\models\LecturerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lecturers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lecturer-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Lecturer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'FirstName',
            'LastName',
            'Gender',
            'BirthDate',
            //'Salary',
            //'Childs',
            //'Department_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
