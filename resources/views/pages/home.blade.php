@extends('layouts.app')

@section('title', 'Тюменские медали')

@section('content')

<style>
  .request {
    width: 100%;
    min-height: 768px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 80px 40px;
    background: url('../images/request.png') center/cover no-repeat;
}

.request .content {
    color: #fff;
    font-size: 78px;
    line-height: 130%;
    text-transform: uppercase;
}

.about {
  padding: 130px 40px;
}

.about .content {
  display: flex;
  flex-direction: row;
  gap: 25px;
}

.about .content .right img {
  width: 321px;
  height: 100%;
  border-radius: 20px;
}

.about .content .left {
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.about .content .left .up {
  display: flex;
  flex-direction: row;
  gap: 25px;
}

.about .content .left .up p {
  margin-top: 70px;

  font-family: Roboto;
  font-weight: 400;
  font-style: Regular;
  font-size: 32px;
  line-height: 130%;
  letter-spacing: 0%;

}

.about .content .left .up img {
  width: 321px;
  height: 282px;
  border-radius: 20px;
}

.about .content .left .down p {
  font-family: Roboto;
  font-weight: 400;
  font-style: Regular;
  font-size: 24px;
  line-height: 130%;
  letter-spacing: 0%;
}

@media (max-width:768px) {

    .request {
        min-height: 100svh;
        aspect-ratio: auto;
        padding: 32px 20px 40px;
        background-position: center;
    }

    .request .content {
        margin-top: 20px;
        font-size: clamp(32px, 9vw, 50px);
        line-height: 120%;
    }

    .request .button {
        width: 100%;
    }

    .about {
        padding: 80px 20px;
    }

    .about .content {
        display: none;
    }

    .about .mob-content {
        display: flex;
        flex-direction: column;
        gap: 32px;
    }

    .about .mob-content .up {
        display: flex;
        flex-direction: column;
        gap: 24px;
    }

    .about .mob-content .up .left {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .about .mob-content .up .left p {
        margin: 0;
        font-size: 20px;
        line-height: 150%;
    }

    .about .mob-content .down {
        display: flex;
        flex-direction: column;
        gap: 24px;
    }

    .about .mob-content .down p {
        font-size: 18px;
        line-height: 160%;
    }

    .about .mob-content img {
        width: 100%;
        height: auto;
        display: block;
        border-radius: 20px;
        object-fit: cover;
    }

    .about .mob-content .up img {
        aspect-ratio: 321 / 282;
    }

    .about .mob-content .down img {
        aspect-ratio: 321 / 420;
    }

}
</style>

<section class="request">
    <p class="content">
        Медали на заказ<br>
        с доставкой<br>
        по России
    </p>

    <button class="button opener">
        ОСТАВИТЬ ЗАЯВКУ
    </button>
</section>

<section class="about">
  <div class="content">
    <div class="left">
      <div class="up">
        <div>
          <h2 class="title">О компании</h2>
          <p>Мы производим индивидуальные награды методом литья. Их вручают не только спортсменам, но и отличившимся на госслужбе или в бизнес-компаниях.</p>
        </div>
        <img src="{{ asset('images/about_medals.jpg') }}" alt="Медали">
      </div>
      <div class="down">
        <p>Изделия имеют высокую детализацию и эксклюзивный дизайн, поэтому каждое из них —  можно считать настоящим шедевром, который олицетворяет личные достижения победителя и выражает ему особое уважение и почет. По всей стране тысячи мастеров своего дела уже имеют в копилке наград тюменскую литую медаль, которая долгие годы будет напоминать им о важном событии, сохраняя безупречный внешний вид.</p>
      </div>
    </div>
    <div class="right">
      <img src="{{ asset('images/about_cup.jpg') }}" alt="Медали">
    </div>
  </div>

  <div class="mob-content">
    <div class="up">
      <div class="left">
        <h2 class="title">О компании</h2>
        <p>Мы производим индивидуальные награды методом литья. Их вручают не только спортсменам, но и отличившимся на госслужбе или в бизнес-компаниях.</p>
      </div>
      <img src="{{ asset('images/about_medals.jpg') }}" alt="Медали">
    </div>
    <div class="down">
      <p>Изделия имеют высокую детализацию и эксклюзивный дизайн, поэтому каждое из них —  можно считать настоящим шедевром, который олицетворяет личные достижения победителя и выражает ему особое уважение и почет. По всей стране тысячи мастеров своего дела уже имеют в копилке наград тюменскую литую медаль, которая долгие годы будет напоминать им о важном событии, сохраняя безупречный внешний вид.</p>
      <img src="{{ asset('images/about_cup.jpg') }}" alt="Медали">
    </div>
  </div>
</section>

@endsection

@push('modals')
    @include('partials.modal')
@endpush