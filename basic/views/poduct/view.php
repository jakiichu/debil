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
    <div class="row row-cols-2">
        <div class="col image">
            <img value="<?php print($model->file) ?>" data-toggle="modal" data-target="#exampleModal" v-on:click="image" src="<?php print($model->file) ?>" style=" height:400px;">

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" style="margin: auto;height:1000px;">
                    <div class="modal-content" style="height:1000px;">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <img  src="<?php print($model->file) ?>" style="height:1000px;">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-7">
            <p class='blockquote' style="height:600px;"><?php print($model->text) ?></p>
        </div>

    </div>


    <br>
    <br>

    <p class='display-2' style='   text-align: right;'><?php print($model->price) ?> руб.</p>
    <hr>
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


    <script>
    var getDataProvider = new Vue({
        el: '.getDataProvider',
        data: {
            products: []
        },
        mounted: async function() {
            const t = this
            await fetch('http://localhost:8080/api/index', {
                method: 'GET',
            }).then(async response => {
                t.products = await response.json()
            })
        }
    })
</script>
</div>