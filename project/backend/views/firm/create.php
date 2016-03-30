<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Firm */

$this->title = Yii::t('app', 'Create Firm');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Firms'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="firm-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
