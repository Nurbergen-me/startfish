<?php

$filename = 'templates.json';

$data = file_get_contents($filename);
$templates = json_decode($data);
 
?>

    <?php include 'header.php';?>
        <div class="container">
            <div class="header_offer">
                <h1 class="header_title animation_slide">
                    <div>
                        <p class="slide-up">
                            Cтудия экспресс
                        </p>
                    </div>
                    <div>
                        <p class="slide-up">
                            упаковки бизнеса
                        </p>
                    </div>
                </h1>
                <div class="header_info animation_slide">
                    <div class="header_desc">
                        <p class="slide-up">
                            Мы создаем дизайн для людей, <br>
                            которые хотят получить качественный продукт <br>
                            и не хотят тратить много времени и сил.
                        </p>
                    </div>
                    <div class="header_bubbles animation_slide">
                        <div class="header_bubble scale-up">
                            Печати
                        </div>
                        <div class="header_bubble firm-style scale-up">
                            Фирменный стиль
                        </div>
                        <div class="header_bubble web-sites scale-up">
                            Web <br> сайты
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="cons" id="cons">
        <div class="container">
            <div class="cons_wrap animation_slide">
                <div>
                    <div class="cons_item slide-up">
                        <div class="cons_img">
                            <img src="img/pros-1-icon.svg" alt="cons icon" class="cons_icon">
                        </div>
                        <div class="cons_info">
                            <h4 class="cons_name">
                                Быстрый <br> старт
                            </h4>
                            <p class="cons_desc">
                                Наш сервис позволяет вам быстро создать брендинг для вашего бизнеса, благодаря готовым шаблонам.
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="cons_item slide-up">
                        <div class="cons_img">
                            <img src="img/pros-2-icon.svg" alt="cons icon" class="cons_icon">
                        </div>
                        <div class="cons_info">
                            <h4 class="cons_name">
                                Простая <br>
                                реализация проекта
                            </h4>
                            <p class="cons_desc">
                                Для получения готового сайта или фирменного стиля нужно выбрать понравившийся шаблон и отправить нам данные для внесения их в шаблон.
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="cons_item slide-up">
                        <div class="cons_img">
                            <img src="img/pros-3-icon.svg" alt="cons icon" class="cons_icon">
                        </div>
                        <div class="cons_info">
                            <h4 class="cons_name">
                                Неограниченная <br> гибкость
                            </h4>
                            <p class="cons_desc">
                                Мы предоставляем широкий выбор шаблонов, которые можно использовать под любые потребности и стиль вашего бизнеса.
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="cons_item slide-up">
                        <div class="cons_img">
                            <img src="img/pros-4-icon.svg" alt="cons icon" class="cons_icon">
                        </div>
                        <div class="cons_info">
                            <h4 class="cons_name">
                                Выразительная <br> уникальность
                            </h4>
                            <p class="cons_desc">
                                Каталог уникальных фирменных стилей и веб-шаблонов, созданный нашими дизайнерами, позволит вам выделить ваш бизнес среди конкурентов и привлечь новых клиентов.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="steps" id="steps">
        <div class="container">
            <h2 class="steps_title">
                Простая и понятная <br> схема работы
            </h2>
            <p class="title-desc steps_desc">
                Шаг за шагом к вашему идеальному проекту без хлопот
            </p>
            <div class="steps_wrap">
                <div class="steps_circle active">
                    <div class="steps_circle_top">
                        <div class="steps_circle_name">
                            Оформление 
                            заказа
                        </div>
                        <div class="steps_circle_number">
                            1
                        </div>
                    </div>
                    <div class="steps_circle_text">
                        Выберите подходящий шаблон 
                        и оформите заказ на сайте, чтобы начать работу над вашим проектом.
                    </div>
                </div>
                <div class="steps_circle">
                    <div class="steps_circle_top">
                        <div class="steps_circle_name">
                            Уточнение
                            данных
                        </div>
                        <div class="steps_circle_number">
                            2
                        </div>
                    </div>
                    <div class="steps_circle_text">
                        Связываемся с вами для получения информации о вашем проекте, указнаем все важные детали и предпочтения.
                    </div>
                </div>
                <div class="steps_circle">
                    <div class="steps_circle_top">
                        <div class="steps_circle_name">
                            Оплата 
                            через почту
                        </div>
                        <div class="steps_circle_number">
                            3
                        </div>
                    </div>
                    <div class="steps_circle_text">
                        Получите ссылку на оплату 
                        и осуществите транзакцию через вашу электронную почту, мы гарантируем безопасность 
                        и удобство процесса.
                    </div>
                </div>
                <div class="steps_circle">
                    <div class="steps_circle_top">
                        <div class="steps_circle_name">
                            Разработка 
                            проекта
                        </div>
                        <div class="steps_circle_number">
                            4
                        </div>
                    </div>
                    <div class="steps_circle_text">
                        Мы создаем ваш проект в течение пяти дней с момента оплаты, обеспечивая качество 
                        и соблюдение сроков.
                    </div>
                </div>
                <div class="steps_circle">
                    <div class="steps_circle_top">
                        <div class="steps_circle_name">
                            Готовый 
                            проект
                        </div>
                        <div class="steps_circle_number">
                            5
                        </div>
                    </div>
                    <div class="steps_circle_text">
                        Получите готовый проект, готовый к запуску 
                        и привлечению новых клиентов
                        в ваш бизнес.
                    </div>
                </div>
            </div>
        </div>
    </section>
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
    
    <?php include 'footer.php';?>