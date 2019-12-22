<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Info */

$this->title = 'Update Info: ' . $model->id_berita;
$this->params['breadcrumbs'][] = ['label' => 'Info', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_berita, 'url' => ['view', 'id' => $model->id_berita]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
