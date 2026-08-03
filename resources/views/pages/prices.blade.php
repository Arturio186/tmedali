@extends('layouts.app')

@section('title', 'Цены и сроки')

@section('content')

<style>
.prices {
  padding: 130px 40px;
  padding-top: 0;
}

.prices .title {
  margin-bottom: 50px;
}

.prices table {
  width: 100%;

  text-align: center;
  font-size: 24px;

  border: 1px solid #0E284C;
  border-radius: 20px;
  border-collapse: separate;
  border-spacing: 0;
  overflow: hidden;
}

.prices td,
.prices th {
  border-right: 1px solid #0E284C;
  border-bottom: 1px solid #0E284C;
  padding: 17px 0;
}

.prices tr:last-child td {
  border-bottom: none;
}

.prices td:last-child,
.prices th:last-child {
  border-right: none;
}

.prices .content {
  margin-top: 50px;

  font-weight: 400;
  font-style: Regular;
  font-size: 24px;
  line-height: 170%;
  letter-spacing: 0%;
}

.prices .hand {
  margin-top: 130px;

  display: flex;
  flex-direction: row;
  justify-content: space-between;

  gap: 100px;
}

.prices .hand .left {
  font-weight: 400;
  font-style: Regular;
  font-size: 32px;
  line-height: 130%;
  letter-spacing: 0%;
  text-transform: uppercase;

  min-width: 600px;
}

.prices .hand .right {
  font-family: Roboto;
  font-weight: 400;
  font-style: Regular;
  font-size: 24px;
  line-height: 130%;
  letter-spacing: 0%;
}

.prices .hand .right ol {
  margin: 0;
  padding: 0;
  list-style: none;

  counter-reset: step;
}

.prices .hand .right li {
  counter-increment: step;

  display: flex;
  gap: 20px;
}

.prices .hand .right li::before {
  content: counter(step) ".";
  flex-shrink: 0;
  width: 32px;
  font-weight: 700;
}

.prices .hand .right .divider {
  margin: 40px 0;
  border-bottom: 1px solid #0E284C;
}

.mobile-tables {
    display: none;
}

@media (max-width:768px) {

    .prices {
        padding: 80px 20px;
    }

    .prices .title {
        margin-bottom: 32px;
    }

    .prices > table {
        display: none;
    }

    .mobile-tables {
        display: flex;
        flex-direction: column;
        gap: 48px;
    }

    .mobile-table h3 {
        margin-bottom: 18px;
    }

    .mobile-price-table {
        width: 100%;

        border: 1px solid #0E284C;
        border-radius: 20px;
        border-collapse: separate;
        border-spacing: 0;
        overflow: hidden;
    }

    .mobile-price-table th {
        padding: 14px 12px;

        border-bottom: 1px solid #0E284C;

        font-size: 18px;
        font-weight: 500;
        text-align: center;
        background: #F8F9FB;
    }

    .mobile-price-table td {
        width: 25%;

        padding: 14px 6px;

        text-align: center;
        vertical-align: middle;

        border-right: 1px solid #0E284C;
        border-bottom: 1px solid #0E284C;
    }

    .mobile-price-table td:last-child {
        border-right: none;
    }

    .mobile-price-table tr:last-child td {
        border-bottom: none;
    }

    .mobile-price-table span {
        display: block;

        margin-bottom: 8px;

        font-size: 11px;
        font-weight: 400;
        line-height: 130%;
        color: #6B7280;
    }

    .mobile-price-table strong {
        display: block;

        font-size: 18px;
        font-weight: 700;
        line-height: 1;
        color: #0E284C;
    }

    .prices .content {
        margin-top: 40px;
        font-size: 18px;
        line-height: 170%;
    }

    .prices .hand {
        margin-top: 60px;
        flex-direction: column;
        gap: 32px;
    }

    .prices .hand .left {
        min-width: 0;
        font-size: 24px;
    }

    .prices .hand .right {
        font-size: 18px;
    }

    .prices .hand .right li {
        gap: 14px;
    }

    .prices .hand .right li::before {
        width: 24px;
    }

    .prices .hand .right .divider {
        margin: 20px 0;
    }
}

</style>

<section class="prices">
    <h2 class="title">Цены и сроки</h2>

    <table cellspacing="0" cellpadding="8">
        <tr>
            <th colspan="2" rowspan="2">Формы медали</th>
            <th colspan="2" rowspan="2">Размеры (мм.)</th>
            <th colspan="4">При заказе от 100 до 500 медалей</th>
        </tr>
        <tr>
            <th colspan="4">С лентой сублимационной 90×25мм</th>
        </tr>

        {{-- Круглая --}}
        <tr>
            <td colspan="2" rowspan="9"><b>Круглая</b></td>
            <th colspan="2"><b>Диаметр</b></th>
            <th>Металл 2мм</th>
            <th>Металл 3мм</th>
            <th>Металл 4мм</th>
            <th>Металл 5мм</th>
        </tr>

        <tr>
            <td colspan="2">60</td>
            <td>484</td>
            <td>534</td>
            <td>584</td>
            <td>634</td>
        </tr>

        <tr>
            <td colspan="2">70</td>
            <td>524</td>
            <td>574</td>
            <td>624</td>
            <td>674</td>
        </tr>

        <tr>
            <td colspan="2">75</td>
            <td>564</td>
            <td>614</td>
            <td>664</td>
            <td>714</td>
        </tr>

        <tr>
            <td colspan="2">80</td>
            <td>604</td>
            <td>654</td>
            <td>704</td>
            <td>754</td>
        </tr>

        <tr>
            <td colspan="2">85</td>
            <td>644</td>
            <td>694</td>
            <td>744</td>
            <td>794</td>
        </tr>

        <tr>
            <td colspan="2">90</td>
            <td>684</td>
            <td>734</td>
            <td>784</td>
            <td>834</td>
        </tr>

        <tr>
            <td colspan="2">95</td>
            <td>724</td>
            <td>774</td>
            <td>824</td>
            <td>874</td>
        </tr>

        <tr>
            <td colspan="2">100</td>
            <td>764</td>
            <td>814</td>
            <td>864</td>
            <td>914</td>
        </tr>

        {{-- Прямоугольная --}}
        <tr>
            <td colspan="2" rowspan="6"><b>Прямоугольная</b></td>
            <th><b>Высота</b></th>
            <th><b>Ширина</b></th>
            <td colspan="4"></td>
        </tr>

        <tr>
            <td>60</td>
            <td>40</td>
            <td>534</td>
            <td>584</td>
            <td>634</td>
            <td>734</td>
        </tr>

        <tr>
            <td>70</td>
            <td>50</td>
            <td>584</td>
            <td>634</td>
            <td>684</td>
            <td>784</td>
        </tr>

        <tr>
            <td>80</td>
            <td>60</td>
            <td>634</td>
            <td>684</td>
            <td>734</td>
            <td>834</td>
        </tr>

        <tr>
            <td>90</td>
            <td>70</td>
            <td>684</td>
            <td>734</td>
            <td>787</td>
            <td>887</td>
        </tr>

        <tr>
            <td>100</td>
            <td>80</td>
            <td>734</td>
            <td>784</td>
            <td>834</td>
            <td>934</td>
        </tr>

        {{-- Квадратная --}}
        <tr>
            <td colspan="2" rowspan="7"><b>Квадратная</b></td>
            <th><b>Высота</b></th>
            <th><b>Ширина</b></th>
            <td colspan="4"></td>
        </tr>

        <tr>
            <td>50</td>
            <td>50</td>
            <td>533</td>
            <td>583</td>
            <td>633</td>
            <td>733</td>
        </tr>

        <tr>
            <td>60</td>
            <td>60</td>
            <td>583</td>
            <td>633</td>
            <td>683</td>
            <td>783</td>
        </tr>

        <tr>
            <td>70</td>
            <td>70</td>
            <td>633</td>
            <td>683</td>
            <td>733</td>
            <td>833</td>
        </tr>

        <tr>
            <td>80</td>
            <td>80</td>
            <td>713</td>
            <td>763</td>
            <td>813</td>
            <td>913</td>
        </tr>

        <tr>
            <td>90</td>
            <td>90</td>
            <td>763</td>
            <td>813</td>
            <td>863</td>
            <td>963</td>
        </tr>

        <tr>
            <td>100</td>
            <td>100</td>
            <td>813</td>
            <td>863</td>
            <td>913</td>
            <td>1013</td>
        </tr>
    </table>

    <div class="mobile-tables">
        <div class="mobile-table">

        <h3>Круглая</h3>

        <table class="mobile-price-table">

            <tr>
                <th colspan="4">Диаметр 60 мм</th>
            </tr>
            <tr>
                <td><span>Металл 2 мм</span><strong>484 ₽</strong></td>
                <td><span>Металл 3 мм</span><strong>534 ₽</strong></td>
                <td><span>Металл 4 мм</span><strong>584 ₽</strong></td>
                <td><span>Металл 5 мм</span><strong>634 ₽</strong></td>
            </tr>

            <tr>
                <th colspan="4">Диаметр 70 мм</th>
            </tr>
            <tr>
                <td><span>Металл 2 мм</span><strong>524 ₽</strong></td>
                <td><span>Металл 3 мм</span><strong>574 ₽</strong></td>
                <td><span>Металл 4 мм</span><strong>624 ₽</strong></td>
                <td><span>Металл 5 мм</span><strong>674 ₽</strong></td>
            </tr>

            <tr>
                <th colspan="4">Диаметр 75 мм</th>
            </tr>
            <tr>
                <td><span>Металл 2 мм</span><strong>564 ₽</strong></td>
                <td><span>Металл 3 мм</span><strong>614 ₽</strong></td>
                <td><span>Металл 4 мм</span><strong>664 ₽</strong></td>
                <td><span>Металл 5 мм</span><strong>714 ₽</strong></td>
            </tr>

            <tr>
                <th colspan="4">Диаметр 80 мм</th>
            </tr>
            <tr>
                <td><span>Металл 2 мм</span><strong>604 ₽</strong></td>
                <td><span>Металл 3 мм</span><strong>654 ₽</strong></td>
                <td><span>Металл 4 мм</span><strong>704 ₽</strong></td>
                <td><span>Металл 5 мм</span><strong>754 ₽</strong></td>
            </tr>

            <tr>
                <th colspan="4">Диаметр 85 мм</th>
            </tr>
            <tr>
                <td><span>Металл 2 мм</span><strong>644 ₽</strong></td>
                <td><span>Металл 3 мм</span><strong>694 ₽</strong></td>
                <td><span>Металл 4 мм</span><strong>744 ₽</strong></td>
                <td><span>Металл 5 мм</span><strong>794 ₽</strong></td>
            </tr>

            <tr>
                <th colspan="4">Диаметр 90 мм</th>
            </tr>
            <tr>
                <td><span>Металл 2 мм</span><strong>684 ₽</strong></td>
                <td><span>Металл 3 мм</span><strong>734 ₽</strong></td>
                <td><span>Металл 4 мм</span><strong>784 ₽</strong></td>
                <td><span>Металл 5 мм</span><strong>834 ₽</strong></td>
            </tr>

            <tr>
                <th colspan="4">Диаметр 95 мм</th>
            </tr>
            <tr>
                <td><span>Металл 2 мм</span><strong>724 ₽</strong></td>
                <td><span>Металл 3 мм</span><strong>774 ₽</strong></td>
                <td><span>Металл 4 мм</span><strong>824 ₽</strong></td>
                <td><span>Металл 5 мм</span><strong>874 ₽</strong></td>
            </tr>

            <tr>
                <th colspan="4">Диаметр 100 мм</th>
            </tr>
            <tr>
                <td><span>Металл 2 мм</span><strong>764 ₽</strong></td>
                <td><span>Металл 3 мм</span><strong>814 ₽</strong></td>
                <td><span>Металл 4 мм</span><strong>864 ₽</strong></td>
                <td><span>Металл 5 мм</span><strong>914 ₽</strong></td>
            </tr>

        </table>

    </div>

    <div class="mobile-table">

        <h3>Прямоугольная</h3>

        <table class="mobile-price-table">

            <tr>
                <th colspan="4">Высота 60 мм, ширина 40 мм</th>
            </tr>
            <tr>
                <td><span>Металл 2 мм</span><strong>534 ₽</strong></td>
                <td><span>Металл 3 мм</span><strong>584 ₽</strong></td>
                <td><span>Металл 4 мм</span><strong>634 ₽</strong></td>
                <td><span>Металл 5 мм</span><strong>734 ₽</strong></td>
            </tr>

            <tr>
                <th colspan="4">Высота 70 мм, ширина 50 мм</th>
            </tr>
            <tr>
                <td><span>Металл 2 мм</span><strong>584 ₽</strong></td>
                <td><span>Металл 3 мм</span><strong>634 ₽</strong></td>
                <td><span>Металл 4 мм</span><strong>684 ₽</strong></td>
                <td><span>Металл 5 мм</span><strong>784 ₽</strong></td>
            </tr>

            <tr>
                <th colspan="4">Высота 80 мм, ширина 60 мм</th>
            </tr>
            <tr>
                <td><span>Металл 2 мм</span><strong>634 ₽</strong></td>
                <td><span>Металл 3 мм</span><strong>684 ₽</strong></td>
                <td><span>Металл 4 мм</span><strong>734 ₽</strong></td>
                <td><span>Металл 5 мм</span><strong>834 ₽</strong></td>
            </tr>

            <tr>
                <th colspan="4">Высота 90 мм, ширина 70 мм</th>
            </tr>
            <tr>
                <td><span>Металл 2 мм</span><strong>684 ₽</strong></td>
                <td><span>Металл 3 мм</span><strong>734 ₽</strong></td>
                <td><span>Металл 4 мм</span><strong>787 ₽</strong></td>
                <td><span>Металл 5 мм</span><strong>887 ₽</strong></td>
            </tr>

            <tr>
                <th colspan="4">Высота 100 мм, ширина 80 мм</th>
            </tr>
            <tr>
                <td><span>Металл 2 мм</span><strong>734 ₽</strong></td>
                <td><span>Металл 3 мм</span><strong>784 ₽</strong></td>
                <td><span>Металл 4 мм</span><strong>834 ₽</strong></td>
                <td><span>Металл 5 мм</span><strong>934 ₽</strong></td>
            </tr>

        </table>

    </div>

    <div class="mobile-table">

        <h3>Квадратная</h3>

        <table class="mobile-price-table">

            <tr>
                <th colspan="4">Размер 50 × 50 мм</th>
            </tr>
            <tr>
                <td><span>Металл 2 мм</span><strong>533 ₽</strong></td>
                <td><span>Металл 3 мм</span><strong>583 ₽</strong></td>
                <td><span>Металл 4 мм</span><strong>633 ₽</strong></td>
                <td><span>Металл 5 мм</span><strong>733 ₽</strong></td>
            </tr>

            <tr>
                <th colspan="4">Размер 60 × 60 мм</th>
            </tr>
            <tr>
                <td><span>Металл 2 мм</span><strong>583 ₽</strong></td>
                <td><span>Металл 3 мм</span><strong>633 ₽</strong></td>
                <td><span>Металл 4 мм</span><strong>683 ₽</strong></td>
                <td><span>Металл 5 мм</span><strong>783 ₽</strong></td>
            </tr>

            <tr>
                <th colspan="4">Размер 70 × 70 мм</th>
            </tr>
            <tr>
                <td><span>Металл 2 мм</span><strong>633 ₽</strong></td>
                <td><span>Металл 3 мм</span><strong>683 ₽</strong></td>
                <td><span>Металл 4 мм</span><strong>733 ₽</strong></td>
                <td><span>Металл 5 мм</span><strong>833 ₽</strong></td>
            </tr>

            <tr>
                <th colspan="4">Размер 80 × 80 мм</th>
            </tr>
            <tr>
                <td><span>Металл 2 мм</span><strong>713 ₽</strong></td>
                <td><span>Металл 3 мм</span><strong>763 ₽</strong></td>
                <td><span>Металл 4 мм</span><strong>813 ₽</strong></td>
                <td><span>Металл 5 мм</span><strong>913 ₽</strong></td>
            </tr>

            <tr>
                <th colspan="4">Размер 90 × 90 мм</th>
            </tr>
            <tr>
                <td><span>Металл 2 мм</span><strong>763 ₽</strong></td>
                <td><span>Металл 3 мм</span><strong>813 ₽</strong></td>
                <td><span>Металл 4 мм</span><strong>863 ₽</strong></td>
                <td><span>Металл 5 мм</span><strong>963 ₽</strong></td>
            </tr>

            <tr>
                <th colspan="4">Размер 100 × 100 мм</th>
            </tr>
            <tr>
                <td><span>Металл 2 мм</span><strong>813 ₽</strong></td>
                <td><span>Металл 3 мм</span><strong>863 ₽</strong></td>
                <td><span>Металл 4 мм</span><strong>913 ₽</strong></td>
                <td><span>Металл 5 мм</span><strong>1013 ₽</strong></td>
            </tr>

        </table>

    </div>
    </div>

    <div class="content">
        <p>
            Разработка макета медали <b>3 500 рублей</b><br>
            Разработка макета медали 2D <b>5 000 рублей</b><br>
            Разработка макета медали 3D от <b>6 500 рублей</b><br>
            При оформлении заказа <b>более 300 медалей</b>, макет медали в векторном изображении в подарок<br>
            При заказе <b>от 501 до 1000</b> медалей стоимость 1 медали <b>уменьшается на 10 рублей</b><br>
            При заказе <b>от 1001 медали</b> стоимость 1 медали <b>уменьшается на 20 рублей</b><br>
            При заказе <b>от 50 до 99 медалей</b> стоимость 1 медали <b>увеличивается на 40 рублей</b><br>
            При заказе <b>от 10 до 49 медалей</b> стоимость 1 медали <b>увеличивается на 100%</b><br>
            При заказе <b>от 1 до 10 медалей</b> стоимость 1 медали <b>увеличивается на 300%</b><br>
            Изготовление медали <b>с чернением + 10 рублей</b> к стоимости изделия<br>
            Изготовление медали <b>с эмалями + 50 рублей</b> к стоимости изделия<br>
            Специальная акция для постоянных клиентов: <b>СКИДКА 10%</b> на <b>четвертый</b> и последующие заказы!<br>
            Доставка <b>по г. Тюмени</b> бесплатно<br>
            Доставка <b>за пределами г. Тюмени</b> и другие регионы оплачивается отдельно
        </p>
    </div>

    <div class="hand">
        <div class="left">
            <p>
                Ручное изготовление медалей<br>
                проходит в несколько этапов<br>
                и занимает от 7 рабочих дней
            </p>
        </div>

        <div class="right">
            <ol>
                <li>Разработка макета медали в векторном изображении</li>
                <div class="divider"></div>

                <li>Разработка и печать макета медали в 3D изображении</li>
                <div class="divider"></div>

                <li>Формовка, отливка макета медали</li>
                <div class="divider"></div>

                <li>Обработка, постобработка макета медали</li>
                <div class="divider"></div>

                <li>Гальваническое, катофарезное, эмальное покрытие макета медали</li>
            </ol>
        </div>
    </div>
</section>

@endsection

@push('modals')
    @include('partials.modal')
@endpush