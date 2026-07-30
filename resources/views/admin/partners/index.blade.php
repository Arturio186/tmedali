@extends('admin.layouts.app')

@section('title', 'Партнеры')

@section('content')

<div class="admin-page">

    <div class="admin-card">

        <div class="admin-card__header admin-card__header--between">

            <h1>
                🤝 Партнеры
            </h1>

            <a
                href="{{ route('admin.partners.create') }}"
                class="admin-button"
            >
                + Добавить партнера
            </a>

        </div>


        <div class="admin-table-wrapper">

            <table class="admin-table">

                <thead>
                    <tr>
                        <th>
                            Логотип
                        </th>

                        <th>
                            Ссылка
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

                    @forelse($partners as $partner)

                        <tr>

                            <td>

                                @if($partner->logo)

                                    <img
                                        src="{{ asset('uploads/partners/' . $partner->logo) }}"
                                        alt="Логотип партнера"
                                        class="admin-table__image"
                                        loading="lazy"
                                    >

                                @else

                                    <div class="admin-table__image-empty">
                                        —
                                    </div>

                                @endif

                            </td>


                            <td>

                                <a
                                    href="{{ $partner->url }}"
                                    target="_blank"
                                    class="admin-link"
                                >
                                    {{ $partner->url }}
                                </a>

                            </td>


                            <td>

                                <span class="admin-badge">
                                    {{ $partner->sort ?? '—' }}
                                </span>

                            </td>


                            <td>

                                <div class="admin-actions">

                                    <a
                                        href="{{ route('admin.partners.edit', $partner) }}"
                                        class="admin-action admin-action--edit"
                                    >
                                        ✏️ Изменить
                                    </a>


                                    <form
                                        action="{{ route('admin.partners.destroy', $partner) }}"
                                        method="POST"
                                        onsubmit="return confirm('Удалить партнера?')"
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
                                colspan="4"
                                class="admin-empty"
                            >

                                <div class="admin-empty__icon">
                                    📭
                                </div>

                                <div>
                                    Партнеров пока нет
                                </div>

                                <small>
                                    Нажмите «Добавить партнера», чтобы начать
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