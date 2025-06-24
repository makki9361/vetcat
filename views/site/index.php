<?php

/** @var yii\web\View $this */
$this->registerCssFile("@web/css/index.css");

$this->title = 'My Yii Application';
?>
<main>
    <div class="bl_1">
        <div class="left_column">
            <a id="first">Vet<br>Cat</a>
            <a id="second">Круглосуточная<br>ветеринарная клиника</a>
            <a id="third"><b>+7 424 424 42 42</b><br>Курган, Карельцева 999</a>
        </div>
        <div class="content">
            <div class="slider">
                <div class="slider__items">
                    <div class="slider__item active">
                        <img id="img1" src="../web/images/cat_3.png">
                    </div>
                    <div class="slider__item">
                        <img id="img2" src="../web/images/cat_5.png">
                    </div>
                    <div class="slider__item">
                        <img id="img3" src="../web/images/dog_6.png">
                    </div>
                </div>
                <div class="akcii">
                    <div class="left_column">
                        <div class='slider_2'>
                            <div class="slider__items_2">
                                <div class="slider__item_2 active">
                                    <a><b>КТ теперь круглосуточно</b></a>
                                    <a>Кошки, собаки и экзотические питомцы могут пройти КТ в вечернее и ночное время.</a>
                                </div>
                                <div class="slider__item_2">
                                    <a><b>Когнитивный Check Up</b></a>
                                    <a>Неврологическая диагностика возрастных изменений для кошек и собак от 7 лет.</a>
                                </div>
                                <div class="slider__item_2">
                                    <a><b>Банк крови</b></a>
                                    <a>А вы знали что ваш питомец может стать донором крови и спасти чью-то жизнь?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btns">
                        <a class="btn__slider btn__slider__prev">
                            <div class="icon"></div>
                        </a>
                        <a class="btn__slider btn__slider__next">
                            <div class="icon"></div>
                        </a>
                    </div>
                    <div class="podrobnee">
                        <a class="btn" href="#">
                            <h4>Подробнее</h4>
                            <i class="fa fa-long-arrow-right" aria-hidden="true" style="padding-top: 0.4vw;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bl_2">
        <div class="left_column">
            <div class="t_bl element-animation">
                <a id="first">Наша команда -</a>
                <a id="second">опытные ветеринары и заботливый персонал, готовые обеспечить здоровье и благополучие ваших пушистых друзей. </a>
            </div>
            <div class="img element-animation"></div>
        </div>
        <div class="right_column">
            <div class="t_bl element-animation">
                <a id="first">Наше преимущество - </a><br>
                <a id="second">высококачественные услуги с индивидуальным подходом к каждому питомцу.</a>
            </div>
            <div class="kachs">
                <div class="kachestva element-animation">
                    <img src="../web/images/kach_1.png">
                    <div class="bl_1"><a>Отделение реанимации и стационары</a></div>
                </div>
                <div class="kachestva element-animation">
                    <img src="../web/images/kach_2.png">
                    <div class="bl_1"><a>Хирургический блок с пятью операционными</a></div>
                </div>
                <div class="kachestva element-animation">
                    <img src="../web/images/kach_3.png">
                    <div class="bl_1"><a>Любые виды исследований и анализов</a></div>
                </div>
                <div class="kachestva k1 element-animation">
                    <img src="../web/images/kach_4.png">
                    <div class="bl_1"><a>Круглосуточная помощь без выходных</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="bl_3">
        <div class="reviews">
            <a id="first element-animation">Последние отзывы</a>
            <div class="rev_bl">
                <div class="rev">
                    <div class="acc">
                        <div class="ava"></div>
                        <a>Михаил</a>
                    </div>
                    <a id="third">Я хочу поделиться своим опытом посещения ветеринарной клиники "Vet Cat". С самого момента, как я вошел в клинику, я почувствовал дружелюбную атмосферу. </a>
                    <a id="fourth">14.06.24</a>
                </div>
                <div class="rev">
                    <div class="acc">
                        <div class="ava"></div>
                        <a>Михаил</a>
                    </div>
                    <a id="third">Я хочу поделиться своим опытом посещения ветеринарной клиники "Vet Cat". С самого момента, как я вошел в клинику, я почувствовал дружелюбную атмосферу. </a>
                    <a id="fourth">14.06.24</a>
                </div>
                <div class="rev">
                    <div class="acc">
                        <div class="ava"></div>
                        <a>Михаил</a>
                    </div>
                    <a id="third">Я хочу поделиться своим опытом посещения ветеринарной клиники "Vet Cat". С самого момента, как я вошел в клинику, я почувствовал дружелюбную атмосферу. </a>
                    <a id="fourth">14.06.24</a>
                </div>
                <div class="rev">
                    <div class="acc">
                        <div class="ava"></div>
                        <a>Михаил</a>
                    </div>
                    <a id="third">Я хочу поделиться своим опытом посещения ветеринарной клиники "Vet Cat". С самого момента, как я вошел в клинику, я почувствовал дружелюбную атмосферу. </a>
                    <a id="fourth">14.06.24</a>
                </div>
                <div class="rev">
                    <div class="acc">
                        <div class="ava"></div>
                        <a>Михаил</a>
                    </div>
                    <a id="third">Я хочу поделиться своим опытом посещения ветеринарной клиники "Vet Cat". С самого момента, как я вошел в клинику, я почувствовал дружелюбную атмосферу. </a>
                    <a id="fourth">14.06.24</a>
                </div>
                <div class="rev">
                    <div class="acc">
                        <div class="ava"></div>
                        <a>Михаил</a>
                    </div>
                    <a id="third">Я хочу поделиться своим опытом посещения ветеринарной клиники "Vet Cat". С самого момента, как я вошел в клинику, я почувствовал дружелюбную атмосферу. </a>
                    <a id="fourth">14.06.24</a>
                </div>
                <div class="rev">
                    <div class="acc">
                        <div class="ava"></div>
                        <a>Михаил</a>
                    </div>
                    <a id="third">Я хочу поделиться своим опытом посещения ветеринарной клиники "Vet Cat". С самого момента, как я вошел в клинику, я почувствовал дружелюбную атмосферу. </a>
                    <a id="fourth">14.06.24</a>
                </div>
            </div>
            <a id="btn" href="#">
                Все отзывы
                <i class="fa fa-long-arrow-right" aria-hidden="true" style="padding-top: 0.4vw;"></i>
            </a>
        </div>
        <div class="services">
            <div class="categories">
                <button href="#" class="cat cat_1 element-animation">
                    <a class="zag">Вакцинация</a>
                    <a class="price">От 2000 ₽</a>
                </button>
                <button href="#" class="cat cat_2 element-animation">
                    <a class="zag">Консультация</a>
                    <a class="price"></a>
                </button>
                <button href="#" class="cat cat_3 element-animation">
                    <a class="zag">Кастрация и стерилизация</a>
                    <a class="price">От 4500 ₽</a>
                </button>
                <button href="#" class="cat cat_4 element-animation">
                    <a class="zag">Санация ротовой области</a>
                    <a class="price">От 2700 ₽</a>
                </button>
            </div>
            <div class="all_cat element-animation">
                <a id="btn" href="#">
                    Все услуги
                    <i class="fa fa-long-arrow-right" aria-hidden="true" style="padding-top: 0.4vw;"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="bl_4">
        <div class="cardss">
            <div class="cardd">
                <div class="img"></div>
                <div class="t_bl">
                    <div class="info">
                        <div class="zag">
                            <a id="first">Иванов Иван Иванович</a>
                            <a id="second">Анестезиолог</a>
                        </div>
                        <div class="work">
                            <a>Дни работы: Пн-Пт</a>
                            <a>Часы работы: 10:00-16:00</a>
                        </div>
                    </div>
                    <div class="price_zap">
                        <a>Прием: 3000 ₽ </a>
                        <button>Записаться</button>
                    </div>
                </div>
            </div>
            <div class="cardd" id="card_v2">
                <div class="img"></div>
                <div class="t_bl">
                    <div class="info">
                        <div class="zag">
                            <a id="first">Боброва Руслана
                                Валентиновна</a>
                            <a id="second">Анестезиолог</a>
                        </div>
                        <div class="work">
                            <a>Дни работы: Пн-Пт</a>
                            <a>Часы работы: 10:00-16:00</a>
                        </div>
                    </div>
                    <div class="price_zap">
                        <a>Прием: 3000 ₽ </a>
                        <button>Записаться</button>
                    </div>
                </div>
            </div>
            <div class="cardd">
                <div class="img"></div>
                <div class="t_bl">
                    <div class="info">
                        <div class="zag">
                            <a id="first">Иванов Иван Иванович</a>
                            <a id="second">Анестезиолог</a>
                        </div>
                        <div class="work">
                            <a>Дни работы: Пн-Пт</a>
                            <a>Часы работы: 10:00-16:00</a>
                        </div>
                    </div>
                    <div class="price_zap">
                        <a>Прием: 3000 ₽ </a>
                        <button>Записаться</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="right_column">
            <div class="all_vet">
                <a id="btnn" href="#">
                    Все врачи
                    <i class="fa fa-long-arrow-right" aria-hidden="true" style="padding-top: 0.4vw;"></i>
                </a>
                <div class="cats">
                    <a id="btnn" href="#">Ветеринарный врач-терапевт</a>
                    <a id="btnn" href="#">Ветеринарный врач-анестезиолог</a>
                    <a id="btnn" href="#">Зоопсихолог</a>
                </div>
            </div>
            <div class="pitu">
                <a>Наши ветеринары — настоящие профессионалы, которые с любовью и заботой помогают вашим питомцам быть здоровыми!</a>
                <div class="img"></div>
                <a id="first">Кошка «Питу» на обследовании</a>
            </div>
            <input type="search" class="search" placeholder="Поиск" >

            </input>
            <i class="fa fa-search" aria-hidden="true"></i>
        </div>
    </div>
    <div class="bl_5">
        <div class="left_column">
            <div class="t_bl element-animation">Доверяйте здоровье ваших питомцев профессионалам — выбирайте нашу клинику "Vet Cat" для заботы и лечения, и мы гарантируем, что ваши любимцы получат лучшее внимание и уход, который они заслуживают!</div>
            <div class="img_bl element-animation"><button id="playButton"><i class="fa-solid fa-play"></i></button></div>
        </div>
        <div class="review_form element-animation">
            <a>Оставьте отзыв!</a>
            <div class="form">
                <textarea class="t_bl" placeholder="Расскажите об опыте лечения своего питомца в Vet Cat!"></textarea>
                <div class="name_phone">
                    <input placeholder="Имя" ></input>
                    <input placeholder="Номер"></input>
                </div>
                <div class="input__wrapper">
                    <input type="file" name="file" id="input__file" class="input input__file">
                    <label for="input__file">Выберите файл</label>
                </div>
            </div>
            <div class="buttonn">
                <a id="btnn" href="#">
                    Отправить
                </a>
            </div>
        </div>
    </div>
    <div id="overlay"></div>
    <div id="videoContainer">
        <video id="video" controls>
            <source src="../web/images/dog_vid.mp4" type="video/mp4">
            Ваш браузер не поддерживает видео.
        </video>
    </div>
</main>
<div class="smooth-scrollbar"></div>
<script src="/styles/js/styles_index.js"></script>
