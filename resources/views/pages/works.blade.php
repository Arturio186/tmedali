@extends('layouts.app')

@section('title', 'Наши работы')

@section('content')

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