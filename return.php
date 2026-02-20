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
            <span class="section-tag" data-aos="fade-down">Payment & Refunds</span>
            <h1 class="section-title" data-aos="fade-up">Политика возврата средств</h1>
            
            <div class="legal-content">
                <div class="policy-hero-card refund-accent-box" data-aos="fade-up" data-aos-delay="100">
                    <p>
                        Мы стремимся к максимальной прозрачности во взаимоотношениях с нашими клиентами. 
                        В <strong><?= $domainTitle ?></strong> предусмотрена четкая процедура возврата средств, 
                        основанная на качестве предоставляемых услуг и защите прав потребителей в рамках законодательства ЕС.
                    </p>
                </div>

                <div class="legal-section" data-aos="fade-up">
                    <h2>Условия для оформления возврата</h2>
                    <div class="refund-grid">
                        <div class="refund-card">
                            <div class="refund-card__icon"><i data-lucide="file-warning"></i></div>
                            <h3>Несоответствие программе</h3>
                            <p>Если содержание материалов существенно отличается от заявленного на платформе <strong><?= $domainTitle ?></strong>.</p>
                        </div>
                        <div class="refund-card">
                            <div class="refund-card__icon"><i data-lucide="terminal"></i></div>
                            <h3>Технические проблемы</h3>
                            <p>Критические ошибки инфраструктуры <strong><?= $fullDomain ?></strong>, которые не были устранены в разумные сроки.</p>
                        </div>
                        <div class="refund-card">
                            <div class="refund-card__icon"><i data-lucide="timer"></i></div>
                            <h3>Период охлаждения</h3>
                            <p>Отказ в течение 14 дней с момента оплаты при условии минимального взаимодействия с материалами.</p>
                        </div>
                    </div>
                </div>

                <div class="procedure-block" data-aos="fade-up">
                    <h2>Процедура запроса на возврат</h2>
                    <p>Чтобы инициировать процедуру на платформе <strong><?= $domainTitle ?></strong>, выполните следующие шаги:</p>
                    <div class="steps-container">
                        <div class="step-item">
                            <div class="step-num">1</div>
                            <div class="step-text">Отправьте письмо на <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a></div>
                        </div>
                        <div class="step-item">
                            <div class="step-num">2</div>
                            <div class="step-text">Укажите тему: <strong>«Запрос на возврат средств»</strong></div>
                        </div>
                        <div class="step-item">
                            <div class="step-num">3</div>
                            <div class="step-text">Предоставьте данные: ФИО, Email и название программы</div>
                        </div>
                        <div class="step-item">
                            <div class="step-num">4</div>
                            <div class="step-text">Добавьте подробное описание причины вашего запроса</div>
                        </div>
                    </div>
                </div>

                <div class="legal-section" data-aos="fade-up">
                    <h2>Сроки и способ возврата</h2>
                    <p>
                        После одобрения вашего запроса, возврат денежных средств будет
                        произведен в течение <strong>7–14 рабочих дней</strong>. Средства возвращаются
                        тем же способом, которым была совершена оплата. Обратите внимание, что фактический срок зачисления
                        зависит от регламента вашего банка в Германии или стране вашего пребывания.
                    </p>
                </div>

                <div class="warning-block-refund" data-aos="zoom-in">
                    <h2>Исключения и ограничения</h2>
                    <ul class="legal-list">
                        <li>
                            <i data-lucide="x-circle"></i>
                            <span>Запрос подан по истечении 14 календарных дней с момента совершения платежа.</span>
                        </li>
                        <li>
                            <i data-lucide="x-circle"></i>
                            <span>Вы уже просмотрели или скачали более 50% материалов образовательной программы.</span>
                        </li>
                        <li>
                            <i data-lucide="x-circle"></i>
                            <span>Технические проблемы вызваны оборудованием или ПО на стороне пользователя.</span>
                        </li>
                        <li>
                            <i data-lucide="x-circle"></i>
                            <span>Выявлено нарушение условий Пользовательского соглашения <strong><?= $domainTitle ?></strong>.</span>
                        </li>
                    </ul>
                </div>

                <div class="contact-info-block" data-aos="fade-up">
                    <h2>Свяжитесь с нами</h2>
                    <p>По всем вопросам, связанным с финансовыми операциями, обращайтесь в нашу службу поддержки:</p>
                    <div class="policy-contact-link">
                        <i data-lucide="mail"></i>
                        <a href="mailto:hello@<?= $fullDomain ?>" class="policy-mail">hello@<?= $fullDomain ?></a>
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