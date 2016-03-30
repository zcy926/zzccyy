<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchFirmLaws */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Firm Laws');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="firm-laws-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Firm Laws'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'content',
            'img',
            'addtime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
