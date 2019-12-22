<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Absen */

$this->title = 'Create Absen';
$this->params['breadcrumbs'][] = ['label' => 'Absen', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="absen-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
