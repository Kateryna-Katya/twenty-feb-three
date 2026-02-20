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
            <span class="section-tag" data-aos="fade-down">Support Center</span>
            <h1 class="section-title" data-aos="fade-up">Контактная информация</h1>

            <p class="lead-text" data-aos="fade-up" data-aos-delay="100">
                Мы всегда открыты для новых проектов и профессиональных дискуссий. 
                Свяжитесь с командой <strong><?= $domainTitle ?></strong> любым удобным для вас способом. 
                Наши специалисты в Берлине готовы ответить на ваши вопросы по будням с 09:00 до 18:00 (CET).
            </p>

            <div class="contact-cards">
                <div class="contact-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="contact-card__icon">
                        <i data-lucide="mail"></i>
                    </div>
                    <h2>Пишите нам</h2>
                    <p>Для общих вопросов, предложений и запросов на консалтинг:</p>
                    <a href="mailto:support@<?= $fullDomain ?>" class="contact-link">support@<?= $fullDomain ?></a>
                </div>

                <div class="contact-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="contact-card__icon">
                        <i data-lucide="phone"></i>
                    </div>
                    <h2>Звоните</h2>
                    <p>Прямая линия поддержки клиентов и экспертных консультаций:</p>
                    <a href="tel:+4930060060556" class="contact-link">+49 300 60060556</a>
                </div>

                <div class="contact-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="contact-card__icon">
                        <i data-lucide="map-pin"></i>
                    </div>
                    <h2>Наш офис</h2>
                    <p>Главный офис компании <strong><?= $domainTitle ?></strong> расположен по адресу:</p>
                    <address class="contact-address">
                        Friedrichstraße 176,<br>
                        10117 Berlin,<br>
                        Germany
                    </address>
                </div>
            </div>

            <div class="contact-extra" data-aos="fade-in" data-aos-delay="500">
                <p>
                    Предложение активно только в странах ЕС. Вы также можете воспользоваться формой обратной связи на 
                    <a href="./#contact" class="text-highlight">главной странице</a> для быстрой отправки запроса.
                </p>
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