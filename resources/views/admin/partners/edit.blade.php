@extends('admin.layouts.app')

@section('title', 'Редактировать партнера')

@section('content')

<div class="admin-page">

    <div class="admin-card">

        <div class="admin-card__header">
            <h1>
                🤝 Редактировать партнера
            </h1>
        </div>


        <form
            method="POST"
            action="{{ route('admin.partners.update', $partner) }}"
            enctype="multipart/form-data"
            class="admin-form"
        >

            @csrf
            @method('PUT')


            <div class="admin-form__group">
                <label>
                    Ссылка на сайт
                </label>

                <input
                    class="admin-form__input"
                    name="url"
                    value="{{ old('url', $partner->url) }}"
                    placeholder="https://example.com"
                >

                @error('url')
                    <span class="admin-form__error">
                        {{ $message }}
                    </span>
                @enderror
            </div>


            <div class="admin-form__group">
                <label>
                    Логотип
                </label>

                <input
                    class="admin-form__file"
                    type="file"
                    name="logo"
                >

                @error('logo')
                    <span class="admin-form__error">
                        {{ $message }}
                    </span>
                @enderror
            </div>


            @if($partner->logo)

                <div class="admin-form__preview">

                    <span>
                        Текущий логотип
                    </span>


                    <img
                        src="{{ asset('uploads/partners/' . $partner->logo) }}"
                        alt="Логотип партнера"
                    >

                </div>

            @endif


            <div class="admin-form__group">
                <label>
                    Сортировка
                </label>

                <input
                    class="admin-form__input"
                    type="number"
                    name="sort"
                    value="{{ old('sort', $partner->sort) }}"
                >

                @error('sort')
                    <span class="admin-form__error">
                        {{ $message }}
                    </span>
                @enderror
            </div>


            <div class="admin-form__actions">

                <button
                    class="admin-form__button"
                >
                    Сохранить изменения
                </button>

            </div>


        </form>

    </div>

</div>

@endsection