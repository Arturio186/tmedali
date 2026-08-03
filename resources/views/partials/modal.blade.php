<div class="modal"
     id="requestModal">
    <div class="modal__overlay"></div>

    <div class="modal__content">

        <div class="top">
            <h2>ОСТАВЬТЕ ЗАЯВКУ</h2>

            <button class="modal__close"
                    id="closeModal"
                    type="button">
                <img src="{{ asset('images/close.svg') }}"
                     alt="Закрыть">
            </button>
        </div>

        <form method="POST"
              action="{{ route('requests.store') }}"
              enctype="multipart/form-data">
            @csrf

            <div class="field full">
                <label>ИМЯ / НАЗВАНИЕ КОМПАНИИ</label>

                <input type="text"
                       name="name"
                       placeholder='ООО "..."'
                       value="{{ old('name') }}">
            </div>

            <div class="row">

                <div class="field">
                    <label>НОМЕР ТЕЛЕФОНА</label>

                    <input type="tel"
                           name="phone"
                           placeholder="+7 9..."
                           value="{{ old('phone') }}">
                </div>

                <div class="field">
                    <label>EMAIL</label>

                    <input type="email"
                           name="email"
                           placeholder="необязательно"
                           value="{{ old('email') }}">
                </div>

            </div>

            <div class="field full">
                <label>КОММЕНТАРИЙ</label>

                <textarea name="comment"
                          placeholder="Напишите тип мероприятия и предполагаемое количество медалей">{{ old('comment') }}</textarea>
            </div>

            <div class="attach">
                <label for="file">
                    📎 Прикрепить файл
                </label>

                <input type="file"
                       name="attachment"
                       id="file"
                       hidden>

                <span id="fileName"></span>
            </div>

            <div class="bottom">

                <div class="bottom__text">
                    Наш специалист свяжется<br>
                    с вами, чтобы уточнить<br>
                    подробности
                </div>

                <button class="button"
                        type="submit">
                    ОТПРАВИТЬ
                </button>

            </div>

        </form>

    </div>
</div>