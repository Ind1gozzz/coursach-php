<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\crud\models\Thesiswork */

$this->title = 'Create Thesiswork';
$this->params['breadcrumbs'][] = ['label' => 'Thesisworks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thesiswork-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
