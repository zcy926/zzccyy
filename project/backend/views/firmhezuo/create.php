<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\FirmHezuo */

$this->title = Yii::t('app', 'Create Firm Hezuo');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Firm Hezuos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="firm-hezuo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
