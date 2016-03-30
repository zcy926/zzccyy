<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\FirmState */

$this->title = Yii::t('app', 'Create Firm State');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Firm States'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="firm-state-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
