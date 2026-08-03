@extends('layouts.app')

@section('title', 'Наши работы')

@section('content')

<style>
.works {
  padding: 130px 40px;
  padding-top: 0;
}

.works .title {
  margin-bottom: 50px;
}

.gallery {
  display: grid;

  grid-template-columns: 2fr 1fr 1fr;
  grid-template-rows: repeat(5, 150px);

  grid-template-areas:
    "x w o"
    "x w o"
    "x z z"
    "y z z"
    "y z z";

  gap: 20px;
}

.x {
  grid-area: x;
}

.w {
  grid-area: w;
}

.o {
  grid-area: o;
}

.y {
  grid-area: y;
}

.z {
  grid-area: z;
}

.gallery img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  border-radius: 20px;
}

@media (max-width: 768px) {
    .works {
        padding: 80px 20px;
    }

    .works .title {
        margin-bottom: 32px;
    }

    .gallery {
        grid-template-columns: 1fr;
        grid-template-rows: none;
        grid-template-areas:
            "x"
            "w"
            "o"
            "z"
            "y";

        gap: 16px;
    }

    .gallery img {
        width: 100%;
        height: 240px;
        border-radius: 16px;
        object-fit: cover;
    }

}
</style>

<section class="works">
    <h2 class="title">Наши работы</h2>

    <div class="gallery">
        <img src="{{ asset('images/works/work1.jpg') }}" class="x" alt="Работа 1">
        <img src="{{ asset('images/works/work2.jpg') }}" class="y" alt="Работа 2">
        <img src="{{ asset('images/works/work3.jpg') }}" class="w" alt="Работа 3">
        <img src="{{ asset('images/works/work4.jpg') }}" class="o" alt="Работа 4">
        <img src="{{ asset('images/works/work5.jpg') }}" class="z" alt="Работа 5">
    </div>
</section>

@endsection

@push('modals')
    @include('partials.modal')
@endpush