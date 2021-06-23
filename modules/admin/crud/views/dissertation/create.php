<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\crud\models\Dissertation */

$this->title = 'Create Dissertation';
$this->params['breadcrumbs'][] = ['label' => 'Dissertations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dissertation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
