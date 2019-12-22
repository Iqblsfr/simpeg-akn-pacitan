<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PegawaiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pegawai';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pegawai-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pegawai', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nip',
            'nama',
            'no_telepon',
            'email:email',
            'alamat',
            //'tgl_lahir',
            //'tempat_lahir',
            //'gol_darah',
            //'status_karyawan',
            //'status_nikah',
            //'agama',
            //'npwp',
            //'tgl_masuk_krj',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
