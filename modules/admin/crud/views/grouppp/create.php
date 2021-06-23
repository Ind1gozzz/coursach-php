<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\crud\models\Grouppp */

$this->title = 'Create Grouppp';
$this->params['breadcrumbs'][] = ['label' => 'Grouppps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="grouppp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
