<?php $this->registerCssFile("@web/css/uslugi.css");?>

<div class="bl_1">
            <div class="panel">
                <div class="spisok">
                    <div class="bl element-animation">
                        <?php foreach ($model1 as $m): ?>
                            <div class="letter">
                                <a class="first"><?=$m->name?></a>
                                <?php $service = \app\models\Service::find()->where(['category_id' => $m->id])->all(); ?>
                                <?php foreach ($service as $a): ?>
                                    <a><?= $a->name ?></a>
                                <?php endforeach; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <a>Услуги</a>
                    <div class="bl element-animation">
                        <div class="letter">
                            <a class="first">В</a>
                            <a>Вакцинация</a>
                        </div>
                        <div class="letter">
                            <a class="first">К</a>
                            <a>Консультация</a>
                            <a>Кастрация</a>
                        </div>
                        <div class="letter">
                            <a class="first">П</a>
                            <a>Прием терапевта</a>
                            <a>ПХО</a>
                        </div>
                        <div class="letter">
                            <a class="first">С</a>
                            <a>Санация ротовой полости</a>
                        </div>
                        <div class="letter">
                            <a class="first">У</a>
                            <a>Удаление зуба</a>
                        </div>

                    </div>
                </div>
                <div class="right_column">
                    <div class="search_vet">
                        <a>Найти услугу</a>
                        <input type="search" class="search" placeholder="Поиск" ></input>
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="cardss">
                <button href="#" class="cardd cardd_1">
                    <a class="zag">Вакцинация</a>
                    <a class="price">От 2000 ₽</a>
                </button>
                <button href="#" class="cardd cardd_2">
                    <a class="zag">Консультация</a>
                    <a class="price">От 2000 ₽</a>
                </button>
                <button href="#" class="cardd cardd_3">
                    <a class="zag">Кастрация и стерилизация</a>
                    <a class="price">От 3000 ₽</a>
                </button>
                <button href="#" class="cardd cardd_4">
                    <a class="zag">Санация ротовой
                        полости</a>
                    <a class="price">От 1000 ₽</a>
                </button>
                <button href="#" class="cardd cardd_5">
                    <a class="zag">Прием терапевта</a>
                    <a class="price">От 1500 ₽</a>
                </button>
                <button href="#" class="cardd cardd_6">
                    <a class="zag">ПХО</a>
                    <a class="price">От 2600 ₽</a>
                </button>
                <button href="#" class="cardd cardd_7">
                    <a class="zag">Удаление зуба</a>
                    <a class="price">От 3800 ₽</a>
                </button>

            </div>
        </div>