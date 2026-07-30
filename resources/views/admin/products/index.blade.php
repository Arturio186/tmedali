@extends('admin.layouts.app')

@section('title', 'Каталог')

@section('content')

<div class="admin-page">

    <div class="admin-card">

        <div class="admin-card__header admin-card__header--between">

            <h1>
                📦 Каталог
            </h1>

            <a
                href="{{ route('admin.products.create') }}"
                class="admin-button"
            >
                + Добавить товар
            </a>

        </div>


        <div class="admin-table-wrapper">

            <table class="admin-table">

                <thead>
                    <tr>
                        <th>
                            Фото
                        </th>

                        <th>
                            Название
                        </th>

                        <th>
                            Цена
                        </th>

                        <th>
                            Порядок
                        </th>

                        <th>
                            Действия
                        </th>
                    </tr>
                </thead>


                <tbody>

                    @forelse($products as $product)

                        <tr>

                            <td>
                                @if($product->image)

                                    <img
                                        src="{{ asset('uploads/products/' . $product->image) }}"
                                        alt="{{ $product->title }}"
                                        class="admin-table__image"
                                        loading="lazy"
                                    >

                                @else

                                    <div class="admin-table__image-empty">
                                        —
                                    </div>

                                @endif
                            </td>


                            <td class="admin-table__title">
                                {{ $product->title }}
                            </td>


                            <td>
                                {{ number_format($product->price, 0, ',', ' ') }} ₽
                            </td>


                            <td>
                                <span class="admin-badge">
                                    {{ $product->sort ?? '—' }}
                                </span>
                            </td>


                            <td>

                                <div class="admin-actions">

                                    <a
                                        href="{{ route('admin.products.edit', $product) }}"
                                        class="admin-action admin-action--edit"
                                    >
                                        ✏️ Изменить
                                    </a>


                                    <form
                                        action="{{ route('admin.products.destroy', $product) }}"
                                        method="POST"
                                        onsubmit="return confirm('Удалить товар «{{ $product->title }}»?')"
                                    >

                                        @csrf
                                        @method('DELETE')

                                        <button
                                            class="admin-action admin-action--delete"
                                        >
                                            🗑 Удалить
                                        </button>

                                    </form>

                                </div>

                            </td>

                        </tr>


                    @empty

                        <tr>

                            <td
                                colspan="5"
                                class="admin-empty"
                            >

                                <div class="admin-empty__icon">
                                    📭
                                </div>

                                <div>
                                    Товаров пока нет
                                </div>

                                <small>
                                    Нажмите «Добавить товар», чтобы начать
                                </small>

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection