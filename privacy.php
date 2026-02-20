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
            <span class="section-tag" data-aos="fade-down">Privacy Policy</span>
            <h1 class="section-title" data-aos="fade-up">Политика конфиденциальности</h1>

            <div class="legal-content">
                <div class="policy-hero-card glass-card" data-aos="fade-up" data-aos-delay="100">
                    <p>
                        Политика конфиденциальности распространяется на персональные данные,
                        предоставляемые клиентами <strong><?= $domainTitle ?></strong>, как для оказания услуг по карьерному консультированию, так и для других взаимодействий в электронном
                        формате. Мы гарантируем защиту ваших данных на базе передовой цифровой инфраструктуры.
                    </p>
                </div>

                <div class="policy-notice alert-box" data-aos="fade-up" data-aos-delay="150">
                    <div class="alert-box__icon"><i data-lucide="info"></i></div>
                    <p>
                        <strong><?= $domainTitle ?></strong> оставляет за собой право вносить изменения в положения Политики. Предоставляя свои данные, вы даете полное согласие на их обработку способами, предусмотренными настоящей Политикой.
                    </p>
                </div>

                <div class="legal-section" data-aos="fade-up">
                    <h2>Порядок сбора, хранения и уничтожения</h2>
                    <div class="storage-info-grid">
                        <div class="storage-item">
                            <div class="storage-item__icon"><i data-lucide="history"></i></div>
                            <div class="storage-item__text">
                                <span>Срок хранения</span>
                                <strong>До 75 лет</strong>
                            </div>
                        </div>
                        <div class="storage-item">
                            <div class="storage-item__icon"><i data-lucide="user-check"></i></div>
                            <div class="storage-item__text">
                                <span>Основание</span>
                                <strong>Только ваше согласие</strong>
                            </div>
                        </div>
                    </div>
                    <p>
                        Для предотвращения утечки данных мы используем полный комплекс мер информационной безопасности. Уничтожение или блокирование данных осуществляется по запросу клиента или при достижении целей сбора.
                    </p>
                </div>

                <div class="data-collection-grid" data-aos="fade-up">
                    <div class="data-box">
                        <div class="data-box__header">
                            <i data-lucide="cpu"></i>
                            <h3>Техническая информация</h3>
                        </div>
                        <ul class="simple-list">
                            <li>IP-адрес и точное время доступа</li>
                            <li>Источники перехода на <strong><?= $fullDomain ?></strong></li>
                            <li>Данные браузера и история просмотров блоков</li>
                        </ul>
                    </div>
                    <div class="data-box">
                        <div class="data-box__header">
                            <i data-lucide="contact"></i>
                            <h3>Персонализация</h3>
                        </div>
                        <ul class="simple-list">
                            <li>Имя пользователя</li>
                            <li>E-mail и контактный номер телефона</li>
                            <li>Сведения о выбранных контрактах и услугах</li>
                        </ul>
                    </div>
                </div>

                <div class="legal-section" data-aos="fade-up">
                    <h2>Цели обработки персональных данных</h2>
                    <ul class="legal-list">
                        <li>
                            <i data-lucide="layout-dashboard"></i>
                            <div>Предоставление доступа к инновационной платформе обучения.</div>
                        </li>
                        <li>
                            <i data-lucide="lightbulb"></i>
                            <div>Учет пожеланий при разработке новых технологических решений.</div>
                        </li>
                        <li>
                            <i data-lucide="megaphone"></i>
                            <div>Информирование об акциях и полезных материалах блога.</div>
                        </li>
                        <li>
                            <i data-lucide="message-square"></i>
                            <div>Обеспечение оперативной и качественной обратной связи.</div>
                        </li>
                    </ul>
                </div>

                <div class="legal-section" data-aos="fade-up">
                    <h2>Использование Cookies</h2>
                    <p>
                        Файлы cookie позволяют нам анализировать трафик и сохранять ваши предпочтения (например, настройки региона Германия), чтобы сделать использование <strong><?= $fullDomain ?></strong> максимально эффективным. Вы можете отключить их в настройках вашего браузера.
                    </p>
                </div>

                <div class="rights-block" data-aos="zoom-in">
                    <div class="rights-block__content">
                        <h2>Ваши права</h2>
                        <p>
                            Если вы хотите отредактировать свои данные или полностью прекратить их обработку, свяжитесь с командой поддержки <strong><?= $domainTitle ?></strong>:
                        </p>
                        <a href="mailto:hello@<?= $fullDomain ?>" class="btn btn--primary">
                            <span>Написать нам</span>
                            <i data-lucide="mail"></i>
                        </a>
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