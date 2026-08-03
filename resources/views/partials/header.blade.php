<style>
header {
    background: #fff;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px 40px;
    position: relative;
    z-index: 901;
}

#logo {
    max-width: 180px;
    height: auto;
}

.menu {
    display: flex;
    align-items: center;
    gap: 40px;
    list-style: none;
}

.menu li a {
    font-size: 24px;
    font-weight: 400;
    color: var(--primary-color);
    text-decoration: none;
    transition: color .2s;
}

.menu li a:hover {
    color: #244b80;
}

.social {
    display: flex;
    align-items: center;
    gap: 18px;
}

.social img {
    transition: transform .2s;
}

.social img:hover {
    transform: scale(1.08);
}

/* ---------- Кнопка ---------- */

.burger {
    display: none;
    width: 34px;
    height: 26px;
    border: none;
    background: transparent;
    cursor: pointer;
    padding: 0;
    flex-direction: column;
    justify-content: space-between;
}

.burger span {
    width: 100%;
    height: 3px;
    border-radius: 10px;
    background: var(--primary-color);
    transition: .3s;
}

.burger.active span:nth-child(1) {
    transform: rotate(45deg) translate(8px,8px);
}

.burger.active span:nth-child(2) {
    opacity: 0;
}

.burger.active span:nth-child(3) {
    transform: rotate(-45deg) translate(8px,-8px);
}

/* ---------- Мобильное меню ---------- */

.mob-menu {
    position: fixed;
    inset: 0;
    background: rgba(255,255,255,.98);

    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 28px;

    list-style: none;

    opacity: 0;
    visibility: hidden;
    transition: .3s;

    z-index: 900;
}

.mob-menu.active {
    opacity: 1;
    visibility: visible;
}

.mob-menu li a {
    font-size: 26px;
    color: var(--primary-color);
    text-decoration: none;
}

.mob-menu .mobile-social {
    display: flex;
    gap: 20px;
    margin-top: 30px;
}

/* ---------- Mobile ---------- */

@media (max-width: 768px) {

    header {
        padding: 18px 20px;
    }

    #logo {
        max-width: 140px;
    }

    .menu {
        display: none;
    }

    header .social {
        display: none;
    }

    .burger {
        display: flex;
    }
}
</style>

<header>

    <a href="{{ route('home') }}">
        <img id="logo"
             src="{{ asset('images/logo.png') }}"
             alt="Логотип">
    </a>

    <ul class="menu">
        <li><a href="{{ route('home') }}">ГЛАВНАЯ</a></li>
        <li><a href="{{ route('catalog') }}">КАТАЛОГ</a></li>
        <li><a href="{{ route('prices') }}">ЦЕНЫ И СРОКИ</a></li>
        <li><a href="{{ route('works') }}">ФОТО И ВИДЕО</a></li>
        <li><a href="{{ route('partners') }}">НАМ ДОВЕРЯЮТ</a></li>
    </ul>

    <div class="social">
        <a href="https://max.ru/join/UNO-nb79X2TVtoxZwn_2FK3LSHPc_8PzlnYXs2IiYAI/" target="_blank">
            <img src="{{ asset('images/social/max.svg') }}" alt="">
        </a>

        <a href="https://vk.ru/tyumen_medals/" target="_blank">
            <img src="{{ asset('images/social/vk.svg') }}" alt="">
        </a>
    </div>

    <button class="burger" id="burger">
        <span></span>
        <span></span>
        <span></span>
    </button>

</header>

<ul class="mob-menu" id="mobileMenu">

    <li><a href="{{ route('home') }}">ГЛАВНАЯ</a></li>
    <li><a href="{{ route('catalog') }}">КАТАЛОГ</a></li>
    <li><a href="{{ route('prices') }}">ЦЕНЫ И СРОКИ</a></li>
    <li><a href="{{ route('works') }}">ФОТО И ВИДЕО</a></li>
    <li><a href="{{ route('partners') }}">НАМ ДОВЕРЯЮТ</a></li>

    <div class="mobile-social">
        <a href="https://max.ru/join/UNO-nb79X2TVtoxZwn_2FK3LSHPc_8PzlnYXs2IiYAI/" target="_blank">
            <img src="{{ asset('images/social/max.svg') }}" alt="">
        </a>

        <a href="https://vk.ru/tyumen_medals/" target="_blank">
            <img src="{{ asset('images/social/vk.svg') }}" alt="">
        </a>
    </div>

</ul>

<script>
    const burger = document.getElementById('burger');
    const menu = document.getElementById('mobileMenu');

    burger.addEventListener('click', () => {
        burger.classList.toggle('active');
        menu.classList.toggle('active');
        document.body.classList.toggle('lock');
    });

    menu.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            burger.classList.remove('active');
            menu.classList.remove('active');
            document.body.classList.remove('lock');
        });
    });
</script>

<style>
    body.lock{
        overflow:hidden;
    }
</style>