@extends('layouts.app')

@section('title', 'Нам доверяют')

@section('content')

<style>
.partners {
    padding: 80px 40px;
}

.partners .title {
    margin-bottom: 48px;
}

.partners .logos {
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 24px;
}

.partners .partner {
    display: flex;
    justify-content: center;
    align-items: center;

    aspect-ratio: 1;
    padding: 24px;

    background: #fff;
    border: 1px solid #E5E7EB;
    border-radius: 20px;

    transition: transform .25s, box-shadow .25s;
}

.partners .partner:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 30px rgba(0,0,0,.08);
}

.partners .partner img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}

@media (max-width:768px) {

    .partners {
        padding: 80px 20px;
    }

    .partners .title {
        margin-bottom: 32px;
    }

    .partners .logos {
        grid-template-columns: repeat(2, 1fr);
        gap: 16px;
    }

    .partners .partner {
        padding: 18px;
        border-radius: 16px;
    }

    .partners .partner img {
        max-width: 100%;
        max-height: 100%;
    }

}
</style>

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