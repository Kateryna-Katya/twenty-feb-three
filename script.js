document.addEventListener('DOMContentLoaded', () => {
    // 1. Инициализация иконок
    lucide.createIcons();

    // 2. Полноэкранное Мобильное Меню
    const burger = document.querySelector('.burger');
    const menu = document.getElementById('menu-fullscreen');
    const menuLinks = document.querySelectorAll('.menu-link');

    const toggleMenu = () => {
        burger.classList.toggle('active');
        menu.classList.toggle('active');
        document.body.style.overflow = menu.classList.contains('active') ? 'hidden' : '';
    };

    burger.addEventListener('click', toggleMenu);
    menuLinks.forEach(link => link.addEventListener('click', toggleMenu));

    // 3. Хедер при скролле
    window.addEventListener('scroll', () => {
        const header = document.querySelector('.header');
        header.style.padding = window.scrollY > 50 ? '12px 0' : '20px 0';
        header.style.background = window.scrollY > 50 ? 'rgba(10, 15, 30, 0.95)' : 'rgba(10, 15, 30, 0.8)';
    });

    // 4. Логика FAQ (Аккордеон)
    document.querySelectorAll('.faq__question').forEach(btn => {
        btn.addEventListener('click', () => {
            const item = btn.parentElement;
            const isActive = item.classList.contains('active');
            document.querySelectorAll('.faq__item').forEach(el => el.classList.remove('active'));
            if (!isActive) item.classList.add('active');
        });
    });

    // 5. 3D Tilt эффект для карточек курсов
    const cards = document.querySelectorAll('.js-tilt');
    cards.forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = (e.clientX - rect.left) / rect.width - 0.5;
            const y = (e.clientY - rect.top) / rect.height - 0.5;
            card.style.transform = `perspective(1000px) rotateX(${y * 15}deg) rotateY(${-x * 15}deg) translateY(-10px)`;
        });
        card.addEventListener('mouseleave', () => {
            card.style.transform = `perspective(1000px) rotateX(0) rotateY(0) translateY(0)`;
        });
    });

    // 6. Валидация Формы и AJAX (имитация)
    const contactForm = document.getElementById('contact-form');
    const phoneInput = document.getElementById('phone-input');
    const captchaInput = document.getElementById('captcha-input');
    const successMsg = document.getElementById('form-success');

    // Только цифры в телефоне
    phoneInput.addEventListener('input', (e) => {
        e.target.value = e.target.value.replace(/\D/g, '');
    });

    contactForm.addEventListener('submit', (e) => {
        e.preventDefault();
        
        // Простая проверка капчи (5 + 3 = 8)
        if (captchaInput.value !== '8') {
            alert('Неверный ответ на капчу!');
            return;
        }

        const btn = contactForm.querySelector('button');
        const btnText = btn.innerHTML;
        
        // Имитация отправки
        btn.disabled = true;
        btn.innerHTML = 'Отправка...';

        setTimeout(() => {
            contactForm.reset();
            btn.innerHTML = btnText;
            btn.disabled = false;
            successMsg.style.display = 'flex';
            setTimeout(() => { successMsg.style.display = 'none'; }, 5000);
        }, 1500);
    });

    // 7. Cookie Popup Logic
    const cookiePopup = document.getElementById('cookie-popup');
    const acceptBtn = document.getElementById('accept-cookies');

    if (!localStorage.getItem('cookiesAccepted')) {
        setTimeout(() => {
            cookiePopup.classList.add('active');
        }, 2000);
    }

    acceptBtn.addEventListener('click', () => {
        localStorage.setItem('cookiesAccepted', 'true');
        cookiePopup.classList.remove('active');
    });

    // --- CANVAS HERO WAVES ---
    const canvas = document.getElementById('hero-canvas');
    if (canvas) {
        const ctx = canvas.getContext('2d');
        let w, h, offset = 0;
        const resize = () => { w = canvas.width = window.innerWidth; h = canvas.height = window.innerHeight; };
        window.addEventListener('resize', resize);
        resize();

        const draw = () => {
            ctx.clearRect(0, 0, w, h);
            ctx.fillStyle = 'rgba(0, 242, 255, 0.08)';
            ctx.beginPath();
            ctx.moveTo(0, h);
            for (let x = 0; x <= w; x += 10) {
                const y = h/1.5 + Math.sin(x * 0.002 + offset) * 50;
                ctx.lineTo(x, y);
            }
            ctx.lineTo(w, h);
            ctx.fill();
            offset += 0.02;
            requestAnimationFrame(draw);
        };
        draw();
    }
});