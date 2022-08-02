<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Poduct */

$this->title = $model->name;
\yii\web\YiiAsset::register($this);
?>
<div class="poduct-view">
    <br>

    <p class='display-2'><?php print($model->name) ?></p>
    <img src="<?php print($model->file) ?>" style="display:block; margin:auto; height:800px;">
    <br>

    <p class='display-2' style='   text-align: right;'><?php print($model->price) ?> руб.</p>
    <hr>
    <p class='blockquote'><?php print($model->text) ?></p>
    <h3>Харектеристики</h3>
    <hr>
    <h4>Категория</h4>
    <?php foreach ($category->getModels() as $category) { ?>
        <?php if ($model->category_id === $category->id) { ?>
            <?php print($category->name)  ?>
        <?php } ?>

    <?php } ?>
    <br><br>
    <h4>Материал</h4>
    <?php foreach ($material->getModels() as $material) { ?>
        <?php if ($model->material_id === $material->id) { ?>
            <?php print($material->name)  ?>
        <?php } ?>

    <?php } ?>
    <br><br>
    <h4>Сезон</h4>
    <?php foreach ($season->getModels() as $season) { ?>
        <?php if ($model->season_id === $season->id) { ?>
            <?php print($season->name)  ?>
        <?php } ?>

    <?php } ?>
    <br><br>
    <h4>Производитель</h4>
    <?php foreach ($manufacturer->getModels() as $manufacturer) { ?>
        <?php if ($model->manufacturer_id === $manufacturer->id) { ?>
            <?php print($manufacturer->name)  ?>
        <?php } ?>

    <?php } ?>
    <hr>
    <div>
        <p class='' style='text-align: right;'> Дата добавления: <?php print($model->date) ?></p>
    </div>



</div>