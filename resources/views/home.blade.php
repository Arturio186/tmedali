<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тюменские медали</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('styles/home.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/homemob.css') }}">
</head>
<body>
  <header>
    <img src="{{ asset('images/logo.svg') }}" alt="Логотип Тюменские медали" />

    <ul class="menu">
      <li><a href="#main">ГЛАВНАЯ</a></li>
      <li><a href="#main">КАТАЛОГ</a></li>
      <li><a href="#main">ЦЕНЫ И СРОКИ</a></li>
      <li><a href="#main">ФОТО И ВИДЕО</a></li>
      <li><a href="#main">КОНТАКТЫ</a></li>  
    </ul>

    <ul class="mob-menu">
      <li><a href="#main">МЕНЮ</a></li> 
    </ul>

    <div class="social">
      <a href="https://max.ru/" target="_blank">
        <img src="{{ asset('images/social/max.svg') }}" alt="MAX" />  
      </a>
      <a href="https://vk.ru/" target="_blank">
        <img src="{{ asset('images/social/vk.svg') }}" alt="ВКонтакте" />
      </a>
    </div>
  </header>

  <section class="request">
    <p class="content">
      Медали на заказ<br />
      с доставкой<br />
      по России
    </p>

    <button class="button opener">ОСТАВИТЬ ЗАЯВКУ</button>
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

  <section class="catalog">
    <h2 class="title">Каталог</h2>

    <div class="cards">
      <div class="card">
        <img src="{{ asset('images/about_medals.jpg') }}" alt="Карточка" />

        <p class="title">Литые медали для Кубка Бурчалкина 2026 по футболу</p>

        <p class="price">1000.00 ₽ / 1 шт.</p>

        <button class="dark-button opener">Заказать</button>
      </div>
      <div class="card">
        <img src="{{ asset('images/about_medals.jpg') }}" alt="Карточка" />

        <p class="title">Литые медали для Кубка Бурчалкина 2026 по футболу</p>

        <p class="price">1000.00 ₽ / 1 шт.</p>

        <button class="dark-button opener">Заказать</button>
      </div>
      <div class="card">
        <img src="{{ asset('images/about_medals.jpg') }}" alt="Карточка" />

        <p class="title">Литые медали для Кубка Бурчалкина 2026 по футболу</p>

        <p class="price">1000.00 ₽ / 1 шт.</p>

        <button class="dark-button opener">Заказать</button>
      </div>
      <div class="card">
        <img src="{{ asset('images/about_medals.jpg') }}" alt="Карточка" />

        <p class="title">Литые медали для Кубка Бурчалкина 2026 по футболу</p>

        <p class="price">1000.00 ₽ / 1 шт.</p>

        <button class="dark-button opener">Заказать</button>
      </div>
    </div>
  </section>

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

    <!-- Круглая -->
    <tr>
        <td colspan="2" rowspan="9"><b>Круглая</b></td>
        <th colspan="2"><b>Диаметр</b></th>
        <th>Металл 2мм</th>
        <th>Металл 3 мм</th>
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

    <!-- Прямоугольная -->
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

    <!-- Квадратная -->
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
        Разработка макета медали <b>3 500 рублей</b><br />
        Разработка макета медали 2D <b>5 000 рублей</b><br />
        Разработка макета медали 3D от <b>6 500 рублей</b><br />
        При оформлении заказа <b>более 300 медалей</b>, макет медали в векторном изображении в подарок<br />
        При заказе <b>от 501 до 1000</b> медалей стоимость 1 медали <b>уменьшается на 10 рублей</b><br />
        При заказе <b>от 1001 медали</b> стоимость 1 медали <b>уменьшается на 20 рублей</b><br />
        При заказе <b>от 50 до 99 медалей</b> стоимость 1 медали <b>увеличивается на 40 рублей</b><br />
        При заказе <b>от 10 до 49 медалей</b> стоимость 1 медали <b>увеличивается на 100%</b><br />
        При заказе <b>от 1 до 10 медалей</b> стоимость 1 медали <b>увеличивается на 300%</b><br />
        Изготовление медали <b>с чернением + 10 рублей</b> к стоимости изделия<br />
        Изготовление медали <b>с эмалями + 50 рублей</b> к стоимости изделия<br />
        Доставка <b>по г. Тюмени</b> бесплатно<br />
        Доставка <b>за пределами г. Тюмени</b> и другие регионы оплачивается отдельно<br />
      </p>
    </div>

    <div class="hand">
      <div class="left">
        <p>
          Ручное изготовление медалей<br /> 
          проходит в несколько этапов<br /> 
          и занимает от 7 рабочих дней<br />
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

  <section class="works">
    <h2 class="title">Наши работы</h2>

    <div class="gallery">
      <img src="{{ asset('images/works/work1.jpg') }}" class="x">
      <img src="{{ asset('images/works/work2.jpg') }}" class="y">
      <img src="{{ asset('images/works/work3.jpg') }}" class="w">
      <img src="{{ asset('images/works/work4.jpg') }}" class="o">
      <img src="{{ asset('images/works/work5.jpg') }}" class="z">
  </div>

  </section>

  <section class="partners">
    <h2 class="title">Нам доверяют</h2>

    <div class="logos">
      <div class="partner">
        <img src="{{ asset('images/works/work1.jpg') }}">
      </div>
    </div>

  </section>

  <footer>
    <div class="up">
      <h2 class="title" style="color: #fff">Контакты</h2>
      <button class="button opener">ОСТАВИТЬ ЗАЯВКУ</button>
    </div>
    <div class="down">
      <div class="left">
        <p>г. Тюмень, улица Локомотивная, 79</p>
        <div class="phones">
          <span>+7 (912) 925-82-27</span>
          <span>+7 (982) 938-10-32</span>
        </div>
        <p>tmedali@yandex.ru</p>
      </div>
      <div class="right">
        <p>Следите за нами соцсетях:</p>
        <div class="social">
          <a href="https://max.ru/" target="_blank">
            <img src="{{ asset('images/social/max-white.svg') }}" alt="MAX" />  
          </a>
          <a href="https://vk.ru/" target="_blank">
            <img src="{{ asset('images/social/vk-white.svg') }}" alt="ВКонтакте" />
          </a>
        </div>
      </div>
    </div>
  </footer>

  <div class="modal" id="requestModal">
    <div class="modal__overlay"></div>

    <div class="modal__content">
      <div class="top">
        <h2>ОСТАВЬТЕ ЗАЯВКУ</h2>
      
        <button class="modal__close" id="closeModal">
          <img src="{{ asset('images/close.svg') }}" alt="" srcset="">
        </button>
      </div>
      

      <form>
        <div class="field full">
          <label>ИМЯ / НАЗВАНИЕ КОМПАНИИ</label>
          <input type="text" placeholder='ООО "..."' />
        </div>

        <div class="row">
          <div class="field">
            <label>НОМЕР ТЕЛЕФОНА</label>
            <input type="tel" placeholder="+7 9..." />
          </div>

          <div class="field">
            <label>EMAIL</label>
            <input type="email" placeholder="необязательно" />
          </div>
        </div>

        <div class="field full">
          <label>КОММЕНТАРИЙ</label>
          <textarea placeholder="Напишите тип мероприятия и предполагаемое количество медалей"></textarea>
        </div>

        <div class="bottom">
          <div class="bottom__text">
            Наш специалист свяжется<br>
            с вами, чтобы уточнить<br>
            подробности
          </div>

          <button class="button">ОТПРАВИТЬ</button>
        </div>
      </form>
    </div>
</div>
</body>

<script>
  const modal = document.getElementById("requestModal");

  const buttons = document.querySelectorAll('.opener');

  for (const button of buttons) {
    button.addEventListener('click', (e) => {
      e.preventDefault();

      modal.classList.add('active')
    })
  }

  document.getElementById("closeModal").onclick = () => {
    modal.classList.remove("active");
  };

  document.querySelector(".modal__overlay").onclick = () => {
    modal.classList.remove("active");
  };

  document.addEventListener("keydown", e => {
    if (e.key === "Escape") {
        modal.classList.remove("active");
    }
  });
</script>
</html>