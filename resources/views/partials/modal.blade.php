<style>
.modal {
  position: fixed;
  inset: 0;
  display: none;
  justify-content: center;
  align-items: center;
  z-index: 999;
}

.modal.active {
  display: flex;
}

.modal__overlay {
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, .45);
}

.modal__content {
  position: relative;
  width: 900px;
  max-width: 95%;
  background: #0A2344;
  color: #fff;
  padding: 100px 70px;
  z-index: 2;
}

.modal .top {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  margin-bottom: 57px;
}

.modal .top button {
  background-color: transparent;
  border: none;
}

.modal h2 {
  font-family: Roboto;
  font-weight: 400;
  font-style: Regular;
  font-size: 48px;
  line-height: 130%;
  letter-spacing: 0%;
  text-transform: uppercase;
}

.row {
  display: flex;
  gap: 70px;
}

.field {
  flex: 1;
  margin-bottom: 35px;
}

.full {
  width: 100%;
}

.field label {
  display: block;
  font-weight: 500;
  font-style: Medium;
  font-size: 24px;
  line-height: 130%;
  letter-spacing: 0%;
  text-transform: uppercase;
  margin-bottom: 15px;
}

.field input,
.field textarea {
  width: 100%;
  border: none;
  border-bottom: 1px solid rgba(255, 255, 255, .6);
  background: none;
  color: #fff;
  padding-bottom: 10px;
  outline: none;
  font-size: 24px;
}

.field input::placeholder,
.field textarea::placeholder {
  font-family: Roboto;
  font-weight: 300;
  font-style: Light;
  font-size: 24px;
  line-height: 130%;
  letter-spacing: 0%;
  color: rgba(255, 255, 255, .55);
}

.field textarea {
  resize: none;
  height: 40px;
  overflow: hidden;
}

.attach {
  margin-top: 20px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 10px;
}

.attach label {
  color: rgba(255, 255, 255, .7);
  border-bottom: 1px dashed rgba(255, 255, 255, .5);
  cursor: pointer;
  display: inline-block;
  padding-bottom: 2px;
  font-size: 18px;
}

#fileName {
  color: #fff;
  font-size: 16px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.bottom {
  margin-top: 60px;
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  gap: 40px;
}

.bottom__text {
  font-family: Roboto;
  font-weight: 400;
  font-style: Regular;
  font-size: 32px;
  line-height: 130%;
  letter-spacing: 0%;
}

.submit {
  min-width: 260px;
  height: 54px;
  border: none;
  border-radius: 40px;
  background: #F4F3F1;
  color: #112B4D;
  cursor: pointer;
  font-size: 20px;
  transition: .2s;
}

.submit:hover {
  transform: translateY(-2px);
}

@media (max-width: 768px) {

    .modal {
        align-items: flex-end;
    }

    .modal__content {
        width: 100%;
        max-width: none;
        max-height: 100svh;
        overflow-y: auto;

        padding: 32px 20px 40px;

        border-radius: 24px 24px 0 0;
    }

    .modal .top {
        margin-bottom: 32px;
        align-items: flex-start;
        gap: 20px;
    }

    .modal h2 {
        font-size: 32px;
        line-height: 120%;
    }

    .modal__close {
        flex-shrink: 0;
    }

    .modal__close img {
        width: 28px;
        height: 28px;
    }

    .row {
        flex-direction: column;
        gap: 0;
    }

    .field {
        margin-bottom: 28px;
    }

    .field label {
        margin-bottom: 10px;
        font-size: 16px;
    }

    .field input,
    .field textarea {
        padding-bottom: 8px;
        font-size: 14px;
    }

    .field input::placeholder,
    .field textarea::placeholder {
        font-size: 14px;
    }

    .attach {
        margin-top: 8px;
    }

    .attach label {
        font-size: 16px;
    }

    #fileName {
        max-width: 100%;
        font-size: 14px;
        word-break: break-word;
        white-space: normal;
    }

    .bottom {
        margin-top: 40px;
        flex-direction: column;
        gap: 24px;
    }

    .bottom__text {
        margin: 0 auto;
        order: 2;
        font-size: 18px;
        line-height: 150%;
        text-align: center;
    }

    .bottom .button {
        order: 1;
        width: 100%;
    }

}

</style>

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