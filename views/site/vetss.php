<?php use yii\helpers\Url;

$this->registerCssFile("@web/css/vets.css");?>

<div class="bl_1">
            <div class="panel">
                <div class="spisok">
                    <div class="bl element-animation">
                        <div class="letter">
                            <?php foreach ($model1 as $a): ?>
                                <a class="first" href="<?php echo \yii\helpers\Url::to(['site/vets', 'id' => $a->id])?>"><?= $a->name ?></a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="right_column">
                    <div class="search_vet">
                        <a>Найти врача</a>
                        <form method="get" action="<?= Url::to(['site/searchvets']); ?>" class="pull-right">
                            <div class="input-group">
                                <input type="text" name="query" class="form-control" placeholder="Поиск">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <input type="search" class="search" placeholder="Поиск" ></input>
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </div>
                    <div class="trud">
                        <a id="zag ">Трудоустройство</a>
                        <a class="yakor" href="#bl-2">
                            <i class="fa-solid fa-arrow-down"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="cardss">
                <?php foreach ($model as $m): ?>
                    <div class="cardd">
                        <div class="img" style="background: url('./images/<?= $m->image ?>'), rgb(213, 245, 195); background-size: contain; background-repeat: no-repeat; background-position: center; background-position-y: 20px"></div>
                        <div class="t_bl">
                            <div class="bl_top">
                                <div class="name_dolzh">
                                    <a class="zag"><?=$m->last_name . ' ' . $m->first_name. ' ' . $m->second_name?></a>
                                    <a class="dol"><?=\app\models\Post::find()->where(['id' => $m->post_id])->one()->name?></a>
                                </div>
                            </div>
                            <div class="bl_bot">
                                <button>Записаться</button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <button class="more">Показать еще
            </button>
        </div>
        <div class="bl_2" id="bl-2">
            <a id="zag" class="element-animation">Присоединяйтесь к нашей команде!</a>
            <a id="text" class="element-animation">Мы ищем талантливых и увлеченных специалистов, готовых внести свой вклад в заботу о животных. У нас вы найдете не только интересную работу, но и возможность профессионального роста в дружелюбной атмосфере.</a>
            <button class="element-animation">Оставить заявку</button>
        </div>