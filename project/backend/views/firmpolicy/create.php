<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\FirmPolicy */

$this->title = Yii::t('app', 'Create Firm Policy');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Firm Policies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="firm-policy-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
