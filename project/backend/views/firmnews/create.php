<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\FirmNews */

$this->title = Yii::t('app', 'Create Firm News');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Firm News'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="firm-news-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
