@extends('admin.layouts.app')

@section('title', 'Вход')

@section('content')

<div class="login">

    <form method="POST" class="login-form">

        @csrf

        <h1>Админ-панель</h1>

        <input
            type="email"
            name="email"
            placeholder="Email"
            value="{{ old('email') }}"
        >

        @error('email')
            <div class="error">{{ $message }}</div>
        @enderror

        <input
            type="password"
            name="password"
            placeholder="Пароль"
        >

        <button>
            Войти
        </button>

    </form>

</div>

@endsection