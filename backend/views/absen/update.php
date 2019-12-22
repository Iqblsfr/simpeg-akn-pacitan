<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Absen */

$this->title = 'Update Absen: ' . $model->id_absen;
$this->params['breadcrumbs'][] = ['label' => 'Absen', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_absen, 'url' => ['view', 'id' => $model->id_absen]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="absen-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
