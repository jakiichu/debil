<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="body-content">
        <br>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/img/1.webp" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/img/2.webp" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/img/3.webp" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>
        <hr>
        <div class="row" style="text-align: center;">
            <div class="col">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                    <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                </svg>
                <br><br>

                <span>Большой ассортимент товаров</span>
            </div>
            <div class="col"><svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-calendar-week" viewBox="0 0 16 16">
                    <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                </svg>
                <br><br><span>Работаем без выходных</span>
            </div>
        </div>
        <br><br><hr>
        <div class="row">
            <div class="col" style="text-align: center;"> <a href="http://localhost:8080/poduct?PoductSearch%5Bid%5D=&PoductSearch%5Bname%5D=&PoductSearch%5Bfile%5D=&PoductSearch%5Bprice%5D=&PoductSearch%5Btext%5D=&PoductSearch%5Bcategory_id%5D=1&PoductSearch%5Bdate%5D=&PoductSearch%5Bseason_id%5D=&PoductSearch%5Bmaterial_id%5D=&PoductSearch%5Bmanufacturer_id%5D=">Форма полиции</a>
                <a href="http://localhost:8080/poduct?PoductSearch%5Bid%5D=&PoductSearch%5Bname%5D=&PoductSearch%5Bfile%5D=&PoductSearch%5Bprice%5D=&PoductSearch%5Btext%5D=&PoductSearch%5Bcategory_id%5D=1&PoductSearch%5Bdate%5D=&PoductSearch%5Bseason_id%5D=&PoductSearch%5Bmaterial_id%5D=&PoductSearch%5Bmanufacturer_id%5D="><img src="/img/large_policiya-VmFczoUKiM1E3pCRQRYwCuBLX7fSEsEe.webp" alt="форма полиции" width="300px" height="auto"></a>
            </div>
            <div class="col" style="text-align: center;"><a href="http://localhost:8080/poduct?PoductSearch%5Bid%5D=&PoductSearch%5Bname%5D=&PoductSearch%5Bfile%5D=&PoductSearch%5Bprice%5D=&PoductSearch%5Btext%5D=&PoductSearch%5Bcategory_id%5D=1&PoductSearch%5Bdate%5D=&PoductSearch%5Bseason_id%5D=&PoductSearch%5Bmaterial_id%5D=&PoductSearch%5Bmanufacturer_id%5D=">Военная форма</a>
                <a href="http://localhost:8080/poduct?PoductSearch%5Bid%5D=&PoductSearch%5Bname%5D=&PoductSearch%5Bfile%5D=&PoductSearch%5Bprice%5D=&PoductSearch%5Btext%5D=&PoductSearch%5Bcategory_id%5D=2&PoductSearch%5Bdate%5D=&PoductSearch%5Bseason_id%5D=&PoductSearch%5Bmaterial_id%5D=&PoductSearch%5Bmanufacturer_id%5D="><img src="/img/large_ratnik_2.webp" alt="Военная форма" width="300px" height="auto"></a>
            </div>
            <div class="col" style="text-align: center;"><a href="http://localhost:8080/poduct?PoductSearch%5Bid%5D=&PoductSearch%5Bname%5D=&PoductSearch%5Bfile%5D=&PoductSearch%5Bprice%5D=&PoductSearch%5Btext%5D=&PoductSearch%5Bcategory_id%5D=1&PoductSearch%5Bdate%5D=&PoductSearch%5Bseason_id%5D=&PoductSearch%5Bmaterial_id%5D=&PoductSearch%5Bmanufacturer_id%5D=">Форма охраны</a>
                <a href="http://localhost:8080/poduct?PoductSearch%5Bid%5D=&PoductSearch%5Bname%5D=&PoductSearch%5Bfile%5D=&PoductSearch%5Bprice%5D=&PoductSearch%5Btext%5D=&PoductSearch%5Bcategory_id%5D=3&PoductSearch%5Bdate%5D=&PoductSearch%5Bseason_id%5D=&PoductSearch%5Bmaterial_id%5D=&PoductSearch%5Bmanufacturer_id%5D="><img src="/img/large_вкбо_на.webp" alt="Форма охраны" width="300px" height="auto"></a>
            </div>
        </div>
        <hr>
        <p class="lead "><b class="h2"> Преодолевать и побеждать удобнее, если Вы хорошо подготовлены!</b>

 <br><br>

<b class="strong"> Создавая наш интернет-магазин</b>, мы постарались объединить в рамках одной торговой площадки несколько специализированных отделов.
<br>
Ассортимент товаров сформирован с учетом пожеланий наших клиентов и порадует как профессиональных военных, так и сотрудников полиции, охранных структур и, конечно же, всех кто увлекается рыбалкой, охотой, туризмом.
<br>
У нас каждый сможет выбрать амуницию и снаряжение, приобрести рабочую одежду, обувь по самым выгодным ценам!
<br>
Уровень сервиса не зависит от объема. Одно из главных правил нашей компании: "Мы не продаем то, что Вам не подходит". Поэтому всегда рады проконсультировать Вас в вопросах выбора размера, цвета,функционала и качества того или иного товара.

 <br><br>

Наши приоритеты- высокое качество продукции и высокий стандарт обслуживания.

</p>
    </div>
</div>