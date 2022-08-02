<?php

/** @var yii\web\View $this */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title = 'SizeChart';
?>
<div class="site-Size">
    <br>
    <div class="custom-control custom-radio mb-3" style="display:inline-block;">
        <input value="/img/size_feet.jpg" v-model="message" name="custom-radio-1" class="custom-control-input" id="размер обуви" type="radio" checked>
        <label class="custom-control-label" for="размер обуви">
            <h3>Размер обуви</h3>
        </label>
    </div>
    <div class="custom-control custom-radio mb-3" style="display:inline-block;">
        <input value="/img/tabl_r.jpg" v-model="message" name="custom-radio-1" class="custom-control-input" id="размер одежды" type="radio">
        <label class="custom-control-label" for="размер одежды">
            <h3>Размер одежды</h3>
        </label>
    </div>
    <div class="custom-control custom-radio mb-3" style="display:inline-block;">
        <input value="/img/5453_5.jpg" v-model="message" name="custom-radio-1" class="custom-control-input" id="размер штанов" type="radio">
        <label class="custom-control-label" for="размер штанов">
            <h3>Размер брюк</h3>
        </label>
    </div>
    <br><hr>
    <img v-bind:src="message" alt="размеры" width="100%">
    <br>
</div>


<script>
    var app = new Vue({
        el: '.site-Size',
        data: {
            message: '/img/size_feet.jpg'
        }
    })
</script>