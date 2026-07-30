@extends('admin.layouts.app')

@section('title', 'Главная')

@section('content')

<div class="cards">

    <a href="{{ route('admin.products.index') }}" class="card">
        <h2>Каталог</h2>
        <p>Управление товарами</p>
    </a>

    <a href="{{ route('admin.partners.index') }}" class="card">
        <h2>Партнеры</h2>
        <p>Логотипы</p>
    </a>

    <a href="{{ route('admin.requests.index') }}" class="card">
        <h2>Заявки</h2>
        <p>Просмотр заявок</p>
    </a>

</div>

@endsection