<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Lecturer */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Lecturers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="lecturer-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= // Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= // Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'FirstName',
            'LastName',
            'Gender',
            'BirthDate',
            'Salary',
            'Childs',
            'Depart',
            'Faculty',
            'Postt',
            'Disstheme',            
            'Degree',
            'DateDiss',
        ],
    ]) ?>

</div>
