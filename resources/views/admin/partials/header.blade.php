<header class="header">

    <div class="left">
        <h1>@yield('title')</h1>
    </div>

    <div class="right">

        <span>
            {{ auth()->user()->name }}
        </span>

        <form
            method="POST"
            action="{{ route('admin.logout') }}"
        >
            @csrf

            <button type="submit">
                Выйти
            </button>

        </form>

    </div>

</header>