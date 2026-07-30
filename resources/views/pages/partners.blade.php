@extends('layouts.app')

@section('title', 'Нам доверяют')

@section('content')

<section class="partners">

    <h2 class="title">
        Нам доверяют
    </h2>


    <div class="logos">

        @forelse($partners as $partner)

            <a
                href="{{ $partner->url }}"
                target="_blank"
                rel="noopener noreferrer"
                class="partner"
            >

                <img
                    src="{{ asset('uploads/partners/' . $partner->logo) }}"
                    alt="Партнер"
                    loading="lazy"
                >

            </a>

        @empty

            <p>
                Партнеров пока нет
            </p>

        @endforelse

    </div>

</section>

@endsection


@push('modals')
    @include('partials.modal')
@endpush