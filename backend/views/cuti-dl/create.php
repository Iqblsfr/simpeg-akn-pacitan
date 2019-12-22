<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\CutiDl */

$this->title = 'Create Cuti Dinas Luar';
$this->params['breadcrumbs'][] = ['label' => 'Cuti Dinas Luar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cuti-dl-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
