<?php

$filename = 'templates.json';

$data = file_get_contents($filename);
$templates = json_decode($data);

$id = null;
$current_template = null;

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    foreach ( $templates as $template ) {
        if ( $id == $template->id ) {
            $current_template = $template;
        }
    }
}

?>

    <?php include 'header.php';?>
    
    </header>
    <?php if ($current_template) { ?>
    <section class="presentation" id="presentation">
        <div class="container">
            <div class="presentation_wrap">
                <img src="img/templates/<?= $current_template->full ?>" alt="001">
            </div>
        </div>
    </section>
    <?php } ?>
    <section class="template" id="template">
        <div class="container">
            <div class="template_wrap">
                <!-- <p class="template_desc">
                    Описание проекта: Наш сервис позволяет вам быстро создать веб-сайт, благодаря готовым шаблонам и интуитивным инструментам. За короткое время вы получите полностью функциональный сайт, готовый к запуску и привлечению клиентов. Наши сайты оснащены удобной панелью администрирования, позволяя вам легко обновлять контент, управлять пользователями и следить за статистикой сайта.
                </p> -->
                <div class="template_list">
                    <div class="template_list_item">
                        <h4 class="template_list_name list_name">
                            Что входит
                        </h4>
                        <div class="template_list_col list">
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
                            <li>
                                Постеры
                            </li>
                            <li>
                                Фотостиль
                            </li>
                            <li>
                                Шаблоны для инстаграм
                            </li>
                            <li>
                                Пиктограммы
                            </li>
                            <li>
                                Сувенирная продукция/упаковка
                            </li>
                        </div>
                    </div>
                    <div class="template_list_item">
                        <h4 class="template_list_name list_name">
                            Что вы получите
                        </h4>
                        <div class="template_list_col list">
                            <li>
                                Стильный брендинг с вашими данными, который можно использовать в исходном виде или развивать под ваши индивидуальные потребности. 
                            </li>
                            <li>
                                Все исходные файлы, включая логотипы, графические элементы, печатную продукцию, фотографии.
                            </li>
                        </div>
                    </div>
                </div>
                <div class="template_footer">
                    <div class="template_footer_left">
                        <div class="template_footer_price">
                            10 000 ₽ 
                        </div>
                        <div class="template_footer_text">
                            * Доработка шаблонов, создание новых носителей обсуждаются отдельно
                        </div>
                    </div>
                    <div class="template_footer_right">
                        <div class="template_footer_price template_footer_price_sm">
                            10 000 ₽ 
                        </div>
                        <div class="template_footer_circle button-l">
                            <div class="button-s"></div>
                            Хочу этот шаблон
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php';?>