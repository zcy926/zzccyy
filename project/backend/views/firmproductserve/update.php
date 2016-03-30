<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FirmProductserve */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Firm Productserve',
]) . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Firm Productserves'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="firm-productserve-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
