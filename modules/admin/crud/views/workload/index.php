<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\crud\models\WorkloadSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Workloads';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="workload-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Workload', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'Subject_id',
            'Lab',
            'Lect',
            'Pract',
            //'Hours',
            //'Semester',
            //'Lecturer_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
