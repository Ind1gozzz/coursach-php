<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\crud\models\Workload */

$this->title = 'Create Workload';
$this->params['breadcrumbs'][] = ['label' => 'Workloads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="workload-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
