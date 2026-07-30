@extends('admin.layouts.app')

@section('title', 'Новый товар')

@section('content')

<div class="admin-page">

    <div class="admin-card">

        <div class="admin-card__header">
            <h1>
                Новый товар
            </h1>
        </div>


        <form
            method="POST"
            action="{{ route('admin.products.store') }}"
            enctype="multipart/form-data"
            class="admin-form"
        >

            @csrf


            <div class="admin-form__group">
                <label>
                    Название
                </label>

                <input
                    class="admin-form__input"
                    name="title"
                    value="{{ old('title') }}"
                    placeholder="Введите название"
                >

                @error('title')
                    <span class="admin-form__error">
                        {{ $message }}
                    </span>
                @enderror
            </div>


            <div class="admin-form__group">
                <label>
                    Цена
                </label>

                <input
                    class="admin-form__input"
                    type="number"
                    step="0.01"
                    name="price"
                    value="{{ old('price') }}"
                    placeholder="Введите цену"
                >

                @error('price')
                    <span class="admin-form__error">
                        {{ $message }}
                    </span>
                @enderror
            </div>


            <div class="admin-form__group">
                <label>
                    Сортировка
                </label>

                <input
                    class="admin-form__input"
                    type="number"
                    name="sort"
                    value="{{ old('sort', 0) }}"
                >

                @error('sort')
                    <span class="admin-form__error">
                        {{ $message }}
                    </span>
                @enderror
            </div>


            <div class="admin-form__group">
                <label>
                    Изображение
                </label>

                <input
                    class="admin-form__file"
                    type="file"
                    name="image"
                >

                @error('image')
                    <span class="admin-form__error">
                        {{ $message }}
                    </span>
                @enderror
            </div>


            <div class="admin-form__actions">
                <button class="admin-form__button">
                    Сохранить
                </button>
            </div>


        </form>

    </div>

</div>

@endsection