<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FirmState */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Firm State',
]) . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Firm States'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="firm-state-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
