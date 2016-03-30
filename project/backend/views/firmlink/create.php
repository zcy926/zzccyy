<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\FirmLink */

$this->title = Yii::t('app', 'Create Firm Link');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Firm Links'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="firm-link-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
