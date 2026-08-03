@extends('layouts.app')

@section('title', 'Каталог')

@section('content')

<style>
    .catalog {
  padding: 130px 40px;
  padding-top: 0;
}

.catalog .title {
  margin-bottom: 50px;
}

.catalog .cards {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr;
  gap: 25px;
}

.catalog .cards .card {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 50px;
}

.catalog .cards .card img {
  width: 100%;
  border-radius: 20px;
}

.catalog .cards .card .title {
  font-family: Roboto;
  font-weight: 400;
  font-style: Regular;
  font-size: 24px;
  line-height: 130%;
  letter-spacing: 0%;
  text-align: center;
  margin-bottom: 0;
  text-transform: none;
}

.catalog .cards .card .price {
  font-family: Roboto;
  font-weight: 400;
  font-style: Regular;
  font-size: 24px;
  line-height: 130%;
  letter-spacing: 0%;
  text-align: center;
}

@media (max-width: 768px) {

    .catalog {
        padding: 80px 20px;
    }

    .catalog .title {
        margin-bottom: 32px;
    }

    .catalog .cards {
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 20px 14px;
    }

    .catalog .cards .card {
        gap: 16px;
    }

    .catalog .cards .card img {
        width: 100%;
        aspect-ratio: 1;
        object-fit: cover;
        border-radius: 16px;
    }

    .catalog .cards .card .title {
        font-size: 18px;
        line-height: 140%;
        min-height: 50px;

        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .catalog .cards .card .price {
        font-size: 18px;
        line-height: 140%;
    }

    .catalog .cards .card .button,
    .catalog .cards .card .dark-button {
        width: 100%;
        min-height: 46px;
        font-size: 16px;
    }

}

</style>

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