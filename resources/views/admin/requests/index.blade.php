@extends('admin.layouts.app')

@section('title', 'Заявки')

@section('content')

<div class="page-header">

    <h2>Заявки</h2>

</div>

<table class="table">

    <thead>

    <tr>
        <th>Дата</th>
        <th>Имя</th>
        <th>Телефон</th>
        <th>Email</th>
        <th>Комментарий</th>
        <th>Файл</th>
        <th></th>
    </tr>

    </thead>

    <tbody>

    @forelse($requests as $request)

        <tr>

            <td>
                {{ $request->created_at->format('d.m.Y H:i') }}
            </td>

            <td>
                {{ $request->name }}
            </td>

            <td>
                {{ $request->phone }}
            </td>

            <td>
                {{ $request->email ?: '—' }}
            </td>

            <td style="max-width: 350px">
                {{ $request->comment ?: '—' }}
            </td>

            <td>

                @if($request->attachment)

                    <a
                        href="{{ route('admin.requests.download', $request) }}"
                    >
                        {{ $request->attachment_name }}
                    </a>

                @else

                    —

                @endif

            </td>

            <td>

                <form
                    method="POST"
                    action="{{ route('admin.requests.destroy', $request) }}"
                    onsubmit="return confirm('Удалить заявку?')"
                >

                    @csrf
                    @method('DELETE')

                    <button class="danger-button">
                        Удалить
                    </button>

                </form>

            </td>

        </tr>

    @empty

        <tr>

            <td colspan="7">
                Заявок пока нет.
            </td>

        </tr>

    @endforelse

    </tbody>

</table>

{{ $requests->links('vendor.pagination.admin') }}

@endsection