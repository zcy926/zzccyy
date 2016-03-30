<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\FirmLaws */

$this->title = Yii::t('app', 'Create Firm Laws');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Firm Laws'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="firm-laws-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
