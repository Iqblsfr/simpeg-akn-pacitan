<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\AbsenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Absen';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="absen-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Absen', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_absen',
            'nip',
            'nama',
            'jam_masuk',
            'jam_pulang',
            //'status',
            //'waktu_kerja',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
