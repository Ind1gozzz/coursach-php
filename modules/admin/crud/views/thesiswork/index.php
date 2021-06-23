<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\crud\models\ThesisworkSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Thesisworks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thesiswork-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Thesiswork', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'Student_id',
            'Theme',
            'Lecturer_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
