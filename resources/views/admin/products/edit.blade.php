@extends('admin.layouts.app')

@section('title', 'Редактировать товар')

@section('content')

<div class="admin-page">

    <div class="admin-card">

        <div class="admin-card__header">
            <h1>
                Редактировать товар
            </h1>
        </div>


        <form
            method="POST"
            action="{{ route('admin.products.update', $product) }}"
            enctype="multipart/form-data"
            class="admin-form"
        >

            @csrf
            @method('PUT')


            <div class="admin-form__group">
                <label>
                    Название
                </label>

                <input
                    class="admin-form__input"
                    name="title"
                    value="{{ old('title', $product->title) }}"
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
                    value="{{ old('price', $product->price) }}"
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
                    value="{{ old('sort', $product->sort) }}"
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


            @if($product->image)
                <div class="admin-form__preview">

                    <span>
                        Текущее изображение
                    </span>

                    <img
                        src="{{ asset('uploads/products/' . $product->image) }}"
                        alt="{{ $product->title }}"
                    >

                </div>
            @endif


            <div class="admin-form__actions">
                <button
                    type="submit"
                    class="admin-form__button"
                >
                    Сохранить изменения
                </button>
            </div>


        </form>

    </div>

</div>

@endsection