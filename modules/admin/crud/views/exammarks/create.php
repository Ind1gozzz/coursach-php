<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\crud\models\Exammarks */

$this->title = 'Create Exammarks';
$this->params['breadcrumbs'][] = ['label' => 'Exammarks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exammarks-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
