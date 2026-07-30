@extends('layouts.app')

@section('title', 'Цены и сроки')

@section('content')

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