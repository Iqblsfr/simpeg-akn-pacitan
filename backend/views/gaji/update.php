<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Gaji */

$this->title = 'Update Gaji: ' . $model->id_gaji;
$this->params['breadcrumbs'][] = ['label' => 'Rekap Gaji', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_gaji, 'url' => ['view', 'id' => $model->id_gaji]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="gaji-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
