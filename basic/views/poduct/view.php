<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Poduct */

$this->title = $model->name;
\yii\web\YiiAsset::register($this);
?>
<div class="poduct-view">

    <p class='display-2'>{{ product.name }}</p>
    <div class="row row-cols-2">
        <div class="col image">
            <img :value="product.file" data-toggle="modal" data-target="#exampleModal" v-bind:src="product.file" style=" height:400px;">

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" style="margin: auto;height:1000px;">
                    <div class="modal-content" style="height:1000px;">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{ product.name }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img v-bind:src="product.file" style="height:1000px;">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-7">
            <p class='blockquote' style="height:600px;">{{product.text}}</p>
        </div>

    </div>


    <br>
    <br>

    <p class='display-2' style='   text-align: right;'>{{product.price}} руб.</p>
    <hr>
    <h3>Харектеристики</h3>
    <hr>
    <h4>Категория</h4>
    <p>{{category.name}}</p>
    <br><br>
    <h4>Материал</h4>
    <p>{{material.name}}</p>
    <br><br>
    <h4>Сезон</h4>
    <p>{{season.name}}</p>
    <br><br>
    <h4>Производитель</h4>
    <p>{{manufacturer.name}}</p>
    <hr>
    <div>
        <p class='' style='text-align: right;'> Дата добавления: {{product.date}}</p>
    </div>



</div>
<script>
    var poductView = new Vue({
        el: '.poduct-view',
        data: {
            products: [],
            asd: '',
            product: [],
            manufacturers: [],
            seasons: [],
            materials: [],
            categorys: [],
            manufacturer: [],
            season: [],
            material: [],
            category: [],
        },
        mounted: async function() {

            const t = this
            t.asd = <?php print($id) ?> - 1
 
            await fetch('http://localhost:8080/api/index', {
                method: 'GET',
            }).then(async response => {
                t.products = await response.json()
            })
            t.product = t.products[t.asd]
            await fetch('http://localhost:8080/api/manufacturer', {
                method: 'GET',
            }).then(async response => {
                t.manufacturers = await response.json()
            })
            await fetch('http://localhost:8080/api/season', {
                method: 'GET',
            }).then(async response => {
                t.seasons = await response.json()
            })
            await fetch('http://localhost:8080/api/material', {
                method: 'GET',
            }).then(async response => {
                t.materials = await response.json()
            })
            await fetch('http://localhost:8080/api/category', {
                method: 'GET',
            }).then(async response => {
                t.categorys = await response.json()
            })
            t.manufacturer = t.manufacturers[t.product.manufacturer_id - 1]
            t.season = t.seasons[t.product.season_id - 1]
            t.material = t.materials[t.product.material_id - 1]
            t.category = t.categorys[t.product.category_id - 1]
        }
    })
</script>