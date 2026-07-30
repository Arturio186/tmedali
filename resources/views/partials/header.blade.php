<header>
    <a href="{{ route('home') }}">
        <img id="logo" src="{{ asset('images/logo.png') }}" alt="Логотип Тюменские медали">
    </a>

    <ul class="menu">
        <li><a href="{{ route('home') }}">ГЛАВНАЯ</a></li>
        <li><a href="{{ route('catalog') }}">КАТАЛОГ</a></li>
        <li><a href="{{ route('prices') }}">ЦЕНЫ И СРОКИ</a></li>
        <li><a href="{{ route('works') }}">ФОТО И ВИДЕО</a></li>
        <li><a href="{{ route('partners') }}">ПАРТНЕРЫ</a></li>
    </ul>

    <ul class="mob-menu">
        <li>МЕНЮ</li>
    </ul>

    <div class="social">
        <a href="https://max.ru/" target="_blank">
            <img src="{{ asset('images/social/max.svg') }}" alt="MAX">
        </a>

        <a href="https://vk.ru/" target="_blank">
            <img src="{{ asset('images/social/vk.svg') }}" alt="ВКонтакте">
        </a>
    </div>
</header>