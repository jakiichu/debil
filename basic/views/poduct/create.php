<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Poduct */

$this->title = 'Create Poduct';
$this->params['breadcrumbs'][] = ['label' => 'Poducts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="poduct-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
