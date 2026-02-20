<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $domainTitle ?> — Образовательная платформа нового поколения</title>
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTMyIDRMNTggNTJMMzIgNDJMNiA1MkwzMiA0WiIgZmlsbD0iIzAwRjJGRiIvPgo8L3N2Zz4=">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <span class="logo__icon"></span>
                <span class="logo__text"><?= $domainTitle ?></span>
            </a>
            
            <nav class="nav">
                <ul class="nav__list">
                    <li class="nav__item"><a href="./#hero" class="nav__link">Главная</a></li>
                    <li class="nav__item"><a href="./#about" class="nav__link">О платформе</a></li>
                    <li class="nav__item"><a href="./#courses" class="nav__link">Курсы</a></li>
                    <li class="nav__item"><a href="./#benefits" class="nav__link">Преимущества</a></li>
                    <li class="nav__item"><a href="./#faq" class="nav__link">FAQ</a></li>
                </ul>
            </nav>

            <a href="./#contact" class="btn btn--header">
                <span>Связаться</span>
                <i data-lucide="arrow-up-right"></i>
            </a>

            <button class="burger" aria-label="Menu">
                <span></span>
            </button>
        </div>
    </header>
    <main class="legal-page">
    <section class="pages">
        <div class="container">
            <span class="section-tag" data-aos="fade-down">Risk Disclosure</span>
            
            <div class="legal-header" data-aos="fade-up">
                <div class="warning-icon-wrapper">
                    <i data-lucide="alert-triangle"></i>
                </div>
                <h1 class="section-title">Отказ от ответственности</h1>
            </div>

            <div class="legal-content">
                <div class="legal-block" data-aos="fade-up" data-aos-delay="100">
                    <p>
                        <strong>Общая информация:</strong> Все материалы, статьи и сведения,
                        опубликованные на платформе <strong><?= $domainTitle ?></strong>, носят исключительно
                        информационно-ознакомительный характер. Они не являются и не должны
                        рассматриваться как персональная инвестиционная рекомендация,
                        профессиональный юридический или финансовый совет, публичная оферта или призыв к совершению
                        каких-либо операций.
                    </p>
                </div>

                <div class="legal-block" data-aos="fade-up" data-aos-delay="150">
                    <p>
                        <strong>Отсутствие гарантий:</strong> Команда <strong><?= $domainTitle ?></strong> не дает никаких гарантий
                        относительно точности, полноты или актуальности представленной информации. Любые упоминания потенциального карьерного роста, пассивного дохода или прошлых
                        результатов наших клиентов не гарантируют аналогичных результатов в будущем.
                        Индивидуальные итоги вашей деятельности зависят от множества факторов, включая личные навыки и рыночную ситуацию в Европе.
                    </p>
                </div>

                <div class="legal-block" data-aos="fade-up" data-aos-delay="200">
                    <p>
                        <strong>Ограничение ответственности:</strong> Администрация сайта <strong><?= $fullDomain ?></strong>,
                        его владельцы и аффилированные лица не несут ответственности за
                        любые прямые или косвенные убытки, решения или действия,
                        предпринятые вами на основе информации с этого ресурса. Вся
                        ответственность за использование наших методологий и AI-инструментов
                        лежит исключительно на пользователе.
                    </p>
                </div>

                <div class="legal-block risk-warning-box" data-aos="zoom-in" data-aos-delay="250">
                    <div class="risk-warning-box__content">
                        <i data-lucide="shield-alert"></i>
                        <p>
                            <strong>Предупреждение о рисках:</strong> Любая деятельность, направленная на
                            изменение финансового статуса или освоение новых технологических рынков, сопряжена с
                            определенным уровнем риска. Мы настоятельно рекомендуем провести
                            собственное исследование и проконсультироваться с квалифицированным
                            независимым специалистом перед принятием важных решений.
                        </p>
                    </div>
                </div>

                <div class="legal-block agreement-box" data-aos="fade-up" data-aos-delay="300">
                    <p>
                        <strong>Подтверждение пользователя:</strong> Продолжая использовать
                        сайт <strong><?= $domainTitle ?></strong>, вы подтверждаете, что вам исполнилось 18 лет, вы
                        действуете по собственной воле, полностью осознаете и принимаете все
                        упомянутые риски и условия данного отказа от ответственности.
                    </p>
                </div>
            </div>
            
            <div class="legal-footer-cta" data-aos="fade-up" data-aos-delay="350">
                <p>Предложение активно только в странах ЕС. Детали на сайте.</p>
                <a href="./#contact" class="text-highlight">Вернуться к контактам</a>
            </div>
        </div>
    </section>
</main>


    <footer class="footer">
        <div class="container">
            <div class="footer__grid">
                <div class="footer__col">
                    <a href="./#hero" class="logo logo--footer">
                        <span class="logo__icon"></span>
                        <span class="logo__text"><?= $domainTitle ?></span>
                    </a>
                    <p class="footer__description">
                        Переосмыслите подход к развитию. Мы переводим язык будущего на понятный каждому.
                    </p>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Навигация</h4>
                    <ul class="footer__list">
                        <li><a href="./#hero" class="footer__link">Главная</a></li>
                        <li><a href="./#about" class="footer__link">О платформе</a></li>
                        <li><a href="./#courses" class="footer__link">Курсы</a></li>
                        <li><a href="./#benefits" class="footer__link">Преимущества</a></li>
                    </ul>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Документы</h4>
                    <ul class="footer__list">
                        <li><a href="./privacy.php" class="footer__link">Privacy Policy</a></li>
                        <li><a href="./cookies.php" class="footer__link">Cookie Policy</a></li>
                        <li><a href="./terms.php" class="footer__link">Terms of Service</a></li>
                        <li><a href="./return.php" class="footer__link">Return Policy</a></li>
                        <li><a href="./disclaimer.php" class="footer__link">Disclaimer</a></li>
                        <li><a href="./contact.php" class="footer__link">Contact Info</a></li>
                        <li><a href="./personal-data-policy.php" class="footer__link">Personal Data</a></li>
                    </ul>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Контакты</h4>
                    <ul class="footer__contact-list">
                        <li>
                            <i data-lucide="phone"></i>
                            <a href="tel:+4930060060556">+49 300 60060556</a>
                        </li>
                        <li>
                            <i data-lucide="mail"></i>
                            <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>
                        </li>
                        <li>
                            <i data-lucide="map-pin"></i>
                            <span>Friedrichstraße 176, 10117 Berlin, Germany</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="footer__bottom">
                <p>&copy; 2026 <?= $domainTitle ?>. Платформа уже доступна в Европе.</p>
            </div>
        </div>
    </footer>
    <div id="cookie-popup" class="cookie-popup">
        <div class="cookie-popup__content">
            <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie политике</a>.</p>
            <button id="accept-cookies" class="btn btn--primary btn--sm">Принять</button>
        </div>
    </div>
    
    <div class="menu-fullscreen" id="menu-fullscreen">
        <nav class="menu-fullscreen__nav">
            <a href="./#hero" class="menu-link">Главная</a>
            <a href="./#about" class="menu-link">О платформе</a>
            <a href="./#courses" class="menu-link">Курсы</a>
            <a href="./#benefits" class="menu-link">Преимущества</a>
            <a href="./#faq" class="menu-link">FAQ</a>
            <a href="./#contact" class="menu-link">Связаться</a>
        </nav>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true, // Анимация проигрывается только один раз
            easing: 'ease-out-quart'
        });
    </script>
    <script src="script.js"></script>
</body>
</html>