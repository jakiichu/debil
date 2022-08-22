<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Poduct;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PoductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Poducts';
?>

<style>
    .filters {
        display: block;
        margin-left: 60px;
        position: absolute;
        left: 10px;
    }
</style>
<br>
<div class="search" style="text-align:right;" id="app-6">
    <input class="form-label" v-model="message">
    <a class="btn btn-success btn-sm" v-bind:href="'poduct?PoductSearch%5Bid%5D=&PoductSearch%5Bname%5D=' + message + '&PoductSearch%5Bfile%5D=&PoductSearch%5Bprice%5D=&PoductSearch%5Btext%5D=&PoductSearch%5Bcategory_id%5D=&PoductSearch%5Bdate%5D=&PoductSearch%5Bseason_id%5D=&PoductSearch%5Bmaterial_id%5D=&PoductSearch%5Bmanufacturer_id%5D='">Поиск</a>
</div>
<div class="poduct-index">

    <div class="filters">
        <br>
        <div style="width:350px;" class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Категория
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="category">
                            <?php foreach ($category->getModels() as $category) { ?>
                                <a>
                                    <p>
                                    

                                        <div class="custom-control custom-radio mb-3">
                                            <input value="<?php print($category->id)  ?>" v-model="category" name="custom-radio-1" class="custom-control-input" id="<?php print($category->name)  ?>" type="radio">
                                            <label class="custom-control-label" for="<?php print($category->name)  ?>"><?php print($category->name)  ?></label>
                                        </div>

                                    </p>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Материал
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <?php foreach ($material->getModels() as $material) { ?>
                            <a>
                                <p>
                                    <div class="custom-control custom-radio mb-3">
                                        <input value="<?php print($material->id)  ?>" v-model="material" name="custom-radio-1" class="custom-control-input" id="<?php print($material->name)  ?>" type="radio">
                                        <label class="custom-control-label" for="<?php print($material->name)  ?>"><?php print($material->name)  ?></label>
                                    </div>


                                </p>
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Сезон
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <?php foreach ($season->getModels() as $season) { ?>
                            <a>
                                <p>
                                    <div class="custom-control custom-radio mb-3">
                                        <input value="<?php print($season->id)  ?>" v-model="season" name="custom-radio-1" class="custom-control-input" id="<?php print($season->name)  ?>" type="radio">
                                        <label class="custom-control-label" for="<?php print($season->name)  ?>"><?php print($season->name)  ?></label>
                                    </div>

                                </p>
                            </a>

                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingfore">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefore" aria-expanded="false" aria-controls="collapseThree">
                            Производитель
                        </button>
                    </h2>
                </div>
                <div id="collapsefore" class="collapse" aria-labelledby="headingfore" data-parent="#accordionExample">
                    <div class="card-body">
                        <?php foreach ($manufacturer->getModels() as $manufacturer) { ?>
                            <a>
                                <p>
                                    <div class="custom-control custom-radio mb-3">
                                        <input value="<?php print($manufacturer->id)  ?>" v-model="manufacturer" name="custom-radio-1" class="custom-control-input" id="<?php print($manufacturer->name)  ?>" type="radio">
                                        <label class="custom-control-label" for="<?php print($manufacturer->name)  ?>"><?php print($manufacturer->name)  ?></label>
                                    </div>

                                </p>
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <a class="btn btn-success" v-bind:href="'poduct?PoductSearch%5Bid%5D=&PoductSearch%5Bname%5D=&PoductSearch%5Bfile%5D=&PoductSearch%5Bprice%5D=&PoductSearch%5Btext%5D=&PoductSearch%5Bcategory_id%5D=' + category + '&PoductSearch%5Bdate%5D=&PoductSearch%5Bseason_id%5D=' + season + '&PoductSearch%5Bmaterial_id%5D=' + material + '&PoductSearch%5Bmanufacturer_id%5D=' + manufacturer">Применить</a>
        <a class="btn btn-secondary" href="/poduct">Сбросить</a>

    </div>
    <br><br><br>
    <div class="row row-cols-3 getDataProvider">

        <?php foreach ($dataProvider->getModels() as $model) { ?>

            <div class="col">

                <div class="card" style="width: 20rem;">
                    <img src="<?= $model->file ?>" class="card-img-top" alt="<?= $model->file ?>">
                    <div class="card-body">
                        <a class="card-title alert-link h5" href="/poduct/view?id=<?= $model->id ?>"><?= $model->name ?></a>
                        <p class="card-text"><?= $model->price ?> руб.
                        </p>
                    </div>
                </div>
            </div>

        <?php } ?>
    </div>

</div>
<script>
    var app6 = new Vue({
        el: '#app-6',
        data: {
            message: ''
        }
    })

    var filters = new Vue({
        el: '.filters',
        data: {
            category: '',
            material: '',
            season: '',
            manufacturer: '',
        }
    })
</script>
</div>