<?php

$filename = 'templates.json';

$data = file_get_contents($filename);
$templates = json_decode($data);
 
?>
    <?php include 'header.php';?>

    </header>
    <section class="templates" id="templates">
        <div class="container">
            <h2 class="steps_title">
                Вдохновляющие шаблоны для любой ниши
            </h2>
            <p class="title-desc steps_desc">
                Ознакомьтесь с нашей коллекцией стильных и функциональных шаблонов, многие из них могут быть адаптированы под различные сферы бизнеса. 
            </p>
            <div class="templates_filters">
                <button class="sort-btn" data-name="branches">
                    Отрасли
                    <img src="img/arrow-up.svg" alt="arrow up">
                </button>
                <!-- <button class="sort-btn active" data-name="services">
                    Услуги
                    <img src="img/arrow-up.svg" alt="arrow up">
                </button> -->
                <button class="sort-btn clear-btn hidden" data-name="clear">
                    <img src="img/close-icon.svg" alt="close">
                    Сбросить все
                </button>
            </div>
            <div class="templates_categories"></div>
            <div class="templates_wrap">
                <?php 
                $counter = 0;
                foreach ($templates as $template) {
                    if ($counter == 4) { break; } ?>
                <a href="template?id=<?= $template->id ?>" class="templates_item">
                    <div>
                        <img src="img/templates/<?= $template->preview ?>" alt="">
                    </div>
                </a>
                <?php $counter++; } ?>
            </div>
            <a href="templates.php" class="templates_btn button-l">
                <div class="button-s"></div>
                Все проекты
            </a>
        </div>
    </section>
    <section class="fixed-plans" id="fixed-plans">
        <div class="container">
            <h2 class="fixed-plans_title">
                Фиксированный тариф на шаблонные решения 
            </h2>
            <p class="title-desc">
                Выберите идеальный шаблон, соответствующий вашим потребностям
            </p>
            <div class="fixed-plans_wrap">
                <div class="fixed-plans_item">
                    <h4 class="fixed-plans_name list_name">
                        Фирменный стиль
                    </h4>
                    <div class="fixed-plans_list">
                        <ul class="fixed-plans_col">
                            <div class="fixed-plans_col_list list">
                                <li>
                                    Логотип (на выбор из 2 вариантов) 
                                </li>
                                <li>
                                    Акцидентный шрифт 
                                </li>
                                <li>
                                    Цветовое решение
                                </li>
                                <li>
                                    Фирменные графические элементы
                                </li>
                                <li>
                                    Полиграфическая продукция 
                                </li>
                            </div>
                            <div class="fixed-plans_price">
                                10 000 ₽ 
                            </div>
                            <button class="btn fixed-plans_btn">
                                Оставить заявку
                            </button>
                        </ul>
                        <ul class="fixed-plans_col mobile-hide">
                            <div class="fixed-plans_col_list list">
                                <li>
                                    Логотип (на выбор из 2 вариантов) 
                                </li>
                                <li>
                                    Акцидентный шрифт 
                                </li>
                                <li>
                                    Цветовое решение
                                </li>
                                <li>
                                    Фирменные графические элементы
                                </li>
                                <li>
                                    Полиграфическая продукция 
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="fixed-plans_item">
                    <h4 class="fixed-plans_name list_name">
                        Дополнительные услуги
                    </h4>
                    <div class="fixed-plans_list">
                        <ul class="fixed-plans_col">
                            <div class="fixed-plans_col_list list">
                                <li>
                                    Создание новых носителей в стиле выбранного шаблона 
                                </li>
                                <li>
                                    Изменение элементов, входящих в выбранный шаблон
                                </li>
                                <li>
                                    Подбор фотоконтента, не входящего в шаблонное решение
                                </li>
                            </div>
                            <div class="fixed-plans_price">
                                от 5 000 ₽ 
                            </div>
                            <button class="btn fixed-plans_btn">
                                Оставить заявку
                            </button>
                        </ul>
                        <ul class="fixed-plans_col">
                            <div class="fixed-plans_col_list list">
                                <div class="fixed-plans_col_name">
                                    Создание индивидуального проекта:
                                </div>
                                <li>
                                    Разработка ТЗ 
                                </li>
                                <li>
                                    Предложение концепций 
                                </li>
                                <li>
                                    Разработка проекта
                                </li>
                                <li>
                                    Внесение правок и доработка проекта
                                </li>
                            </div>
                            <div class="fixed-plans_price">
                                от 70 000 ₽ 
                            </div>
                            <button class="btn fixed-plans_btn">
                                Оставить заявку
                            </button>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="fixed-plans_bottom">
                * Доработка шаблонов, создание новых носителей обсуждаются индивидуально
            </div>
        </div>
    </section>

    <?php include 'footer.php';?>