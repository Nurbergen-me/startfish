<?php

$request = 'http://'.($_SERVER['SERVER_NAME']==='localhost') 
        ? str_replace("/startfish", "",$_SERVER['REQUEST_URI'])
        : $_SERVER['REQUEST_URI']; 

$request = explode('?', $request)[0];
$request = explode('.', $request)[0];
$request = explode('/', $request)[1];

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startfish</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/dotCursor.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/media.css">
</head>
<body class="<?php echo ($request == 'stamps') ? 'stamps' : ''?>" >
    <div class="project" id="offer-1">
        <div class="container">
            <div class="nav">
                <a href="/" class="nav_logo">
                    <img src="img/logo.svg" alt="logo">
                </a>
                <button class="nav_burger">
                    <img src="img/close-big.svg" alt="close" class="nav_burger_close" id="project-close">
                </button>
            </div>
            <div class="project_wrap">
                <div class="project_top">
                    <div class="project_offer">
                        <h2 class="project_title">
                            Расскажите коротко <br>
                            о вашем проекте
                        </h2>
                        <p class="project_desc">
                            Заполните поля, и мы свяжемся с Вами 
                            в кратчайшие сроки
                        </p>
                    </div>
                    <div class="project_inputs">
                        <div class="project_inputs_name">
                            Ваши данные
                        </div>
                        <div class="project_inputs_wrap">
                            <input type="text" class="project_input" placeholder="Имя">
                            <input type="text" class="project_input" placeholder="Телефон">
                        </div>
                    </div>
                </div>
                <div class="project_body">
                    <div class="project_offer">
                        <div class="project_text project_obligation">
                            Мы принимаем на себя обязательство о том, что коммерческая информация, полученная в рамках подготовки и реализации проекта, является конфиденциальной и не подлежит разглашению или передаче третьим лицам.
                        </div>
                    </div>
                    <div class="project_right">
                        <div class="project_inputs">
                            <div class="project_inputs_name">
                                О проекте
                            </div>
                        </div>
                        <div class="project_services">
                            <div class="project_services_name">
                                Выберите услугу
                            </div>
                            <div class="project_services_wrap">
                                <button class="project_services_item active">
                                    Сайт
                                </button>
                                <button class="project_services_item">
                                    фирменный стиль
                                </button>
                                <button class="project_services_item">
                                    печати
                                </button>
                            </div>
                        </div>
                        <div class="project_inputs">
                            <div class="project_inputs_wrap with-textarea">
                                <textarea class="project_input project_textarea" placeholder="Расскажите о Вашем проекте"></textarea>
                                <div class="input-file">
                                    <div class="input-file_text">
                                        Прикрепить файл
                                    </div>
                                    <input type="file">
                                </div>
                            </div>
                            <div class="project_text project_text_show">
                                Укажите вид деятельности. На какую тему проект?
                                Вас интересует шаблонное решение или индивидуальный проект?
                                Напишите, если удобнее общаться в мессенджере.
                            </div>
                            <div class="project_inputs_bottom">
                                <button class="btn project_btn">
                                    Отправить
                                </button>
                                <div class="project_credits">
                                    Нажимая на кнопку, вы соглашаетесь <br>
                                    с <a href="">Политикой персональных данных</a> 
                                </div>
                            </div>
                            <div class="project_text project_obligation_sm">
                                Мы принимаем на себя обязательство о том, что коммерческая информация, полученная в рамках подготовки и реализации проекта, является конфиденциальной и не подлежит разглашению или передаче третьим лицам.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="container">
                <div class="footer_wrap">
                    <div class="footer_top">
                        <div class="footer_links">
                            <a href="#" class="footer_link">
                                Фирменные стили
                            </a>
                            <a href="#" class="footer_link">
                                Web-сайты
                            </a>
                            <a href="#" class="footer_link">
                                Печати
                            </a>
                            <div class="footer_socials">
                                <a href="#" class="footer_link footer_icons">
                                    <img src="img/telegram-icon.svg" alt="telegram">
                                </a>
                                <a href="#" class="footer_link">
                                    <img src="img/whatsapp-icon.svg" alt="whatsapp">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="footer_bottom">
                        <div class="footer_links">
                            <a href="#" class="footer_link">
                                Управление файлами cookie
                            </a>
                            <a href="#" class="footer_link">
                                Политика конфиденциальности
                            </a>
                            <a href="#" class="footer_link">
                                Договор оферты
                            </a>
                        </div>
                        <div class="footer_credits">
                            2023© StartFish
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="project" id="offer-2">
        <div class="container">
            <div class="nav">
                <a href="/" class="nav_logo">
                    <img src="img/logo.svg" alt="logo">
                </a>
                <button class="nav_burger">
                    <img src="img/close-big.svg" alt="close" class="nav_burger_close" id="project-close2">
                </button>
            </div>
            <div class="project_wrap">
                <div class="project_top">
                    <div class="project_offer">
                        <h2 class="project_title">
                            Оставьте контактную <br>
                            информацию
                        </h2>
                        <p class="project_desc">
                            Заполните поля, и мы свяжемся с Вами 
                            в кратчайшие сроки
                        </p>
                    </div>
                    <div class="project_inputs">
                        <div class="project_inputs_name">
                            Ваши данные
                        </div>
                        <div class="project_inputs_wrap">
                            <input type="text" class="project_input" placeholder="Имя">
                            <input type="text" class="project_input" placeholder="Телефон">
                        </div>
                    </div>
                </div>
                <div class="project_body">
                    <div class="project_offer">
                        <div class="project_text project_obligation">
                            Мы принимаем на себя обязательство о том, что коммерческая информация, полученная в рамках подготовки и реализации проекта, является конфиденциальной и не подлежит разглашению или передаче третьим лицам.
                        </div>
                    </div>
                    <div class="project_right">
                        <div class="project_inputs project_inputs_2">
                            <div class="project_inputs_wrap with-textarea">
                                <textarea class="project_input project_textarea" placeholder="Расскажите о Вашем проекте"></textarea>
                                <div class="input-file">
                                    <div class="input-file_text">
                                        Прикрепить файл
                                    </div>
                                    <input type="file">
                                </div>
                            </div>
                            <div class="project_text project_text_show">
                                Укажите вид деятельности. На какую тему проект?
                                Вас интересует шаблонное решение или индивидуальный проект?
                                Напишите, если удобнее общаться в мессенджере.
                            </div>
                            <div class="project_inputs_bottom">
                                <button class="btn project_btn">
                                    Отправить
                                </button>
                                <div class="project_credits">
                                    Нажимая на кнопку, вы соглашаетесь <br>
                                    с <a href="">Политикой персональных данных</a> 
                                </div>
                            </div>
                            <div class="project_text project_obligation_sm">
                                Мы принимаем на себя обязательство о том, что коммерческая информация, полученная в рамках подготовки и реализации проекта, является конфиденциальной и не подлежит разглашению или передаче третьим лицам.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="container">
                <div class="footer_wrap">
                    <div class="footer_top">
                        <div class="footer_links">
                            <a href="#" class="footer_link">
                                Фирменные стили
                            </a>
                            <a href="#" class="footer_link">
                                Web-сайты
                            </a>
                            <a href="#" class="footer_link">
                                Печати
                            </a>
                            <div class="footer_socials">
                                <a href="#" class="footer_link footer_icons">
                                    <img src="img/telegram-icon.svg" alt="telegram">
                                </a>
                                <a href="#" class="footer_link">
                                    <img src="img/whatsapp-icon.svg" alt="whatsapp">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="footer_bottom">
                        <div class="footer_links">
                            <a href="#" class="footer_link">
                                Управление файлами cookie
                            </a>
                            <a href="#" class="footer_link">
                                Политика конфиденциальности
                            </a>
                            <a href="#" class="footer_link">
                                Договор оферты
                            </a>
                        </div>
                        <div class="footer_credits">
                            2023© StartFish
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden">
        <div class="container">
            <div class="hidden_wrap">
                <div class="hidden_menu">
                    <a href="stamps.html" class="hidden_menu_item">
                        печати
                    </a>
                    <a href="templates.html" class="hidden_menu_item">
                        фирменный стиль
                    </a>
                    <a href="#" class="hidden_menu_item">
                        web сайты
                    </a>
                </div>
                <div class="hidden_socials">
                    <a href="#" class="hidden_socials_item">
                        whatsapp
                    </a>
                    <a href="#" class="hidden_socials_item">
                        telegram
                    </a>
                </div>
                <button class="btn hidden_btn">
                    Обсудить проект
                </button>
            </div>
        </div>
    </div>
    <header class="<?php echo ($request == 'home' || $request == '') ? 'header header-home' : ''?>" id="header">
        <div class="container">
            <div class="nav">
                <a href="home.php" class="nav_logo">
                    <img src="img/logo.svg" alt="logo">
                </a>
                <ul class="nav_menu">
                    <li>
                        <a href="stamps.php" class="nav_menu_item">
                            Печати
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav_menu_item" id="web-pages">
                            Веб сайты
                        </a>
                    </li>
                    <li>
                        <a href="templates.php" class="nav_menu_item">
                            Фирменный стиль
                        </a>
                    </li>
                </ul>
                <div class="nav_btns">
                    <button class="nav_btn">
                        Обсудить проект
                    </button>
                    <a href="#" class="nav_favorites">
                        <img src="img/heart-icon.svg" alt="heart">
                    </a>
                </div>
                <div class="nav_burger">
                    <div class="nav_burger_menu">
                        <div class="nav_burger_item"></div>
                        <div class="nav_burger_item"></div>
                    </div>
                    <svg class="nav_burger_close" id="burger_close" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.707107 13.4356C0.316586 13.0451 0.316586 12.4119 0.707107 12.0214L12.0208 0.707701C12.4113 0.317166 13.0445 0.31718 13.435 0.707701C13.8256 1.09822 13.8256 1.73138 13.435 2.12192L2.12132 13.4356C1.7308 13.8261 1.09763 13.8261 0.707107 13.4356Z" fill="#141736"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.706955 0.707107C1.09748 0.316586 1.73065 0.316586 2.12117 0.707107L13.4349 12.0208C13.8254 12.4113 13.8254 13.0445 13.4349 13.435C13.0444 13.8256 12.4112 13.8256 12.0207 13.435L0.706954 2.12132C0.316433 1.7308 0.316434 1.09763 0.706955 0.707107Z" fill="#141736"/>
                    </svg>
                </div>
            </div>
        </div>