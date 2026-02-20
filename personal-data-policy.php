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
            <span class="section-tag" data-aos="fade-down">Privacy & Security</span>
            <h1 class="section-title" data-aos="fade-up">Политика обработки персональных данных</h1>

            <div class="legal-content">
                <div class="legal-block" data-aos="fade-up" data-aos-delay="100">
                    <h2>1. Общие положения</h2>
                    <p>
                        Настоящая политика (далее — «Политика») определяет порядок и условия обработки персональных
                        данных, предпринимаемые платформой <strong><?= $domainTitle ?></strong> (далее — «Оператор»), и
                        устанавливает меры по обеспечению безопасности этих данных в соответствии со стандартами ЕС.
                    </p>
                    <p>
                        1.1. Важнейшей целью Оператора является соблюдение прав и свобод человека при
                        обработке его данных, включая защиту прав на неприкосновенность частной жизни и личную тайну.
                    </p>
                    <p>
                        1.2. Настоящая Политика применяется ко всей информации, которую
                        Оператор может получить о посетителях веб-сайта <strong><?= $fullDomain ?></strong>.
                    </p>
                </div>

                <div class="legal-block" data-aos="fade-up" data-aos-delay="150">
                    <h2>2. Основные понятия</h2>
                    <ul class="terminology-list">
                        <li>
                            <i data-lucide="globe"></i>
                            <div><strong>Веб-сайт</strong> — цифровая инфраструктура <strong><?= $fullDomain ?></strong>.</div>
                        </li>
                        <li>
                            <i data-lucide="users"></i>
                            <div><strong>Пользователь</strong> — любой посетитель нашей платформы.</div>
                        </li>
                        <li>
                            <i data-lucide="fingerprint"></i>
                            <div><strong>Персональные данные</strong> — любая информация, относящаяся к Пользователю.</div>
                        </li>
                    </ul>
                </div>

                <div class="policy-section" data-aos="fade-up" data-aos-delay="200">
                    <h2>3. Данные, которые мы обрабатываем</h2>
                    <div class="data-grid">
                        <div class="data-card">
                            <div class="data-card__icon"><i data-lucide="shield-check"></i></div>
                            <div class="data-card__info">
                                <strong>Личные данные</strong>
                                <span>ФИО, Email, номер телефона (Германия и страны ЕС).</span>
                            </div>
                        </div>
                        <div class="data-card">
                            <div class="data-card__icon"><i data-lucide="binary"></i></div>
                            <div class="data-card__info">
                                <strong>Технические данные</strong>
                                <span>Cookies, IP-адрес, тип браузера и системная аналитика.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="legal-block" data-aos="fade-up" data-aos-delay="250">
                    <h2>4. Цели обработки данных</h2>
                    <ul class="simple-list">
                        <li>Идентификация для доступа к закрытым модулям обучения.</li>
                        <li>Установление обратной связи и экспертная поддержка 24/7.</li>
                        <li>Исполнение условий программы пассивного дохода и договоров на обучение.</li>
                        <li>Оптимизация AI-инструментов платформы под нужды пользователя.</li>
                    </ul>
                </div>

                <div class="legal-block agreement-box" data-aos="fade-up" data-aos-delay="300">
                    <h2>5. Правовые основания</h2>
                    <p>
                        Оператор обрабатывает данные только при наличии вашего явного согласия. Мы используем передовое шифрование для защиты каждой части вашей цифровой идентичности.
                    </p>
                </div>

                <div class="contact-info-block" data-aos="zoom-in-up">
                    <div class="contact-footer-policy">
                        <h2>6. Вопросы и отзывы</h2>
                        <p>По любым вопросам безопасности ваших данных обращайтесь в наш отдел комплаенса:</p>
                        <div class="policy-contact-link">
                            <i data-lucide="mail"></i>
                            <a href="mailto:support@<?= $fullDomain ?>" class="policy-mail">support@<?= $fullDomain ?></a>
                        </div>
                    </div>
                </div>
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