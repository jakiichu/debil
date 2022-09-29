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

<div class="poduct-index">
    <div class="search" style="text-align:right;" id="app-6">
        <input class="form-label" v-model="message">
    </div>
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
                            <a v-for="category in categorys">
                                <p>
                                    <div class="custom-control custom-radio mb-3">
                                        <input v-model="categorymodel" :value="category.id" v-bind:v-for="category.id" name="custom-radio-1" class="custom-control-input" v-bind:id="category.name" type="radio">
                                        <label class="custom-control-label" v-bind:for="category.name">{{category.name}}</label>
                                    </div>

                                </p>
                            </a>
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
                        <a v-for="material in materials">
                            <p>
                                <div class="custom-control custom-radio mb-3">
                                    <input v-model="materialmodel" :value="material.id" v-bind:v-for="material.id" name="custom-radio-1" class="custom-control-input" v-bind:id="material.name" type="radio">
                                    <label class="custom-control-label" v-bind:for="material.name">{{material.name}}</label>
                                </div>

                            </p>
                        </a>
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
                        <a v-for="season in seasons">
                            <p>
                                <div class="custom-control custom-radio mb-3">
                                    <input v-model="seasonmodel" :value="season.id" v-bind:v-for="season.id" name="custom-radio-1" class="custom-control-input" v-bind:id="season.name" type="radio">
                                    <label class="custom-control-label" v-bind:for="season.name">{{season.name}}</label>
                                </div>

                            </p>
                        </a>
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
                <div id="collapsefore" class="collapse collapsefore" aria-labelledby="headingfore" data-parent="#accordionExample">
                    <div class="card-body">
                        <a v-for="manufacturer in manufacturers" :key="manufacturer.manufacturer">
                            <p>
                                <div class="custom-control custom-radio mb-3">
                                    <input v-model="manufacturermodel" :value="manufacturer.id" v-bind:v-for="manufacturer.id" name="custom-radio-1" class="custom-control-input" v-bind:id="manufacturer.name" type="radio">
                                    <label class="custom-control-label" v-bind:for="manufacturer.name">{{manufacturer.name}}</label>
                                </div>

                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <a class="btn btn-secondary" href="/poduct">Сбросить</a>

    </div>
    <br><br><br>
    <div class="row row-cols-3 getDataProvider">
        <div v-for="product in products" v-if="categorymodel == '' || categorymodel == product.category_id && materialmodel == '' || materialmodel == product.category_id && seasonmodel == '' || seasonmodel == product.category_id && manufacturermodel == '' || manufacturermodel == product.category_id && message == '' || message == product.name" class="col">

            <div class="card" style="width: 20rem;">
                <img v-bind:src="product.file" class="card-img-top" v-bind:alt="product.name">
                <div class="card-body">
                    <a class="card-title alert-link h5" v-bind:href="'/poduct/view?id=' + product.id">{{product.name}}</a>
                    <p class="card-text">{{product.price}} руб.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var filters = new Vue({
        el: '.poduct-index',
        data: {
            message: '',
            categorymodel: '',
            materialmodel: '',
            seasonmodel: '',
            manufacturermodel: '',
            manufacturers: [],
            seasons: [],
            materials: [],
            categorys: [],
            products: []
        },
        methods: {
            filterCategory: function() {

            }
        },
        mounted: async function() {
            const t = this
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
            await fetch('http://localhost:8080/api/index', {
                method: 'GET',
            }).then(async response => {
                t.products = await response.json()
            })
        }
    })
</script>
</div>