<div class="modal" id="requestModal">
    <div class="modal__overlay"></div>

    <div class="modal__content">

        <div class="top">
            <h2>ОСТАВЬТЕ ЗАЯВКУ</h2>

            <button class="modal__close" id="closeModal" type="button">
                <img src="{{ asset('images/close.svg') }}" alt="Закрыть">
            </button>
        </div>

        <form>

            <div class="field full">
                <label>ИМЯ / НАЗВАНИЕ КОМПАНИИ</label>

                <input
                    type="text"
                    placeholder='ООО "..."'
                >
            </div>

            <div class="row">

                <div class="field">
                    <label>НОМЕР ТЕЛЕФОНА</label>

                    <input
                        type="tel"
                        placeholder="+7 9..."
                    >
                </div>

                <div class="field">
                    <label>EMAIL</label>

                    <input
                        type="email"
                        placeholder="необязательно"
                    >
                </div>

            </div>

            <div class="field full">
                <label>КОММЕНТАРИЙ</label>

                <textarea
                    placeholder="Напишите тип мероприятия и предполагаемое количество медалей"
                ></textarea>
            </div>

            <div class="attach">
                <label for="file">
                    📎 Прикрепить файл
                </label>
                <input
                    type="file"
                    id="file"
                    hidden
                >
                <span id="fileName"></span>
            </div>

            <div class="bottom">

                <div class="bottom__text">
                    Наш специалист свяжется<br>
                    с вами, чтобы уточнить<br>
                    подробности
                </div>

                <button class="button" type="submit">
                    ОТПРАВИТЬ
                </button>

            </div>

        </form>

    </div>
</div>