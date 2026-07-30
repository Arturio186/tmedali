<aside class="sidebar">

    <h2 class="logo">
        Medals
    </h2>

    <nav>

        <a
            href="{{ route('admin.dashboard') }}"
            @class(['active' => request()->routeIs('admin.dashboard')])
        >
            Главная
        </a>

        <a
            href="{{ route('admin.products.index') }}"
            @class(['active' => request()->routeIs('admin.products.*')])
        >
            Каталог
        </a>

        <a
            href="{{ route('admin.partners.index') }}"
            @class(['active' => request()->routeIs('admin.partners.*')])
        >
            Партнеры
        </a>

        <a
            href="{{ route('admin.requests.index') }}"
            @class(['active' => request()->routeIs('admin.requests.*')])
        >
            Заявки
        </a>

    </nav>

</aside>