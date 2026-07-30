@extends('layouts.app')

@section('title', 'Каталог')

@section('content')

<section class="catalog">

    <h2 class="title">
        Каталог
    </h2>


    <div class="cards">

        @forelse($products as $product)

            <div class="card">

                <img
                    src="{{ asset('uploads/products/' . $product->image) }}"
                    alt="{{ $product->title }}"
                    loading="lazy"
                >


                <p class="title">
                    {{ $product->title }}
                </p>


                <p class="price">
                    {{ number_format($product->price, 0, ',', ' ') }} ₽ / 1 шт.
                </p>


                <button class="dark-button opener">
                    Заказать
                </button>

            </div>


        @empty

            <p>
                Товаров пока нет
            </p>

        @endforelse

    </div>

</section>

@endsection


@push('modals')
    @include('partials.modal')
@endpush