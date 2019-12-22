<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PegawaiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pegawai-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'nip') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'no_telepon') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'tgl_lahir') ?>

    <?php // echo $form->field($model, 'tempat_lahir') ?>

    <?php // echo $form->field($model, 'gol_darah') ?>

    <?php // echo $form->field($model, 'status_karyawan') ?>

    <?php // echo $form->field($model, 'status_nikah') ?>

    <?php // echo $form->field($model, 'agama') ?>

    <?php // echo $form->field($model, 'npwp') ?>

    <?php // echo $form->field($model, 'tgl_masuk_krj') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
