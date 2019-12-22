<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CutiDlSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cuti Dinas Luar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cuti-dl-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Cuti Dinas Luar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_cuti',
            'nip',
            'nama',
            'keterangan',
            'tgl_cuti',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
