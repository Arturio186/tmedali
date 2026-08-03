<style>
footer {
    display: flex;
    flex-direction: column;
    gap: 92px;
    padding: 86px 40px 50px;
    background: #0A2042;
    color: #fff;
    font-size: 24px;
}

footer .up {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

footer .down {
    display: flex;
    justify-content: space-between;
    gap: 60px;
}

footer .down .left {
    display: flex;
    flex-direction: column;
    gap: 30px;
}

footer .down .phones {
    display: flex;
    gap: 30px;
}

footer .down .right {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding-top: 18px;
}

.views {
    display: flex;
    flex-direction: row;
    align-items: center;
    gap: 10px;
}

 .messagers {
        display: flex;
        flex-direction: row;
        align-items: center;
        gap: 16px;
    }

    .social {
        display: flex;
        justify-content: space-between;
    }

/* ---------- Mobile ---------- */

@media (max-width:768px) {

    footer {
        gap: 50px;
        padding: 60px 20px 40px;
        font-size: 18px;
    }

    footer .up {
        flex-direction: column;
        align-items: flex-start;
        gap: 24px;
    }

    footer .up .button {
        width: 100%;
    }

    footer .down {
        flex-direction: column;
        gap: 40px;
    }

    footer .down .left {
        gap: 20px;
    }

    footer .down .phones {
        flex-direction: column;
        gap: 12px;
    }

    footer .down .right {
        padding-top: 0;
        gap: 20px;
    }

    footer .down .right p {
        font-size: 18px;
        line-height: 150%;
    }

    footer .down .left p,
    footer .down .left span {
        font-size: 18px;
        line-height: 150%;
    }

    .messagers img {
        width: 42px;
    }
}


</style>

<footer>
    <div class="up">
        <h2 class="title" style="color: #fff">Контакты</h2>

        <button class="button opener">
            ОСТАВИТЬ ЗАЯВКУ
        </button>
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
            <p>Следите за нами в соцсетях:</p>

            <div class="social">
                <div class="messagers">
                    <a href="https://max.ru/join/UNO-nb79X2TVtoxZwn_2FK3LSHPc_8PzlnYXs2IiYAI/" target="_blank">
                        <img src="{{ asset('images/social/max-white.svg') }}" alt="MAX">
                    </a>

                    <a href="https://vk.ru/tyumen_medals/" target="_blank">
                        <img src="{{ asset('images/social/vk-white.svg') }}" alt="ВКонтакте">
                    </a>
                </div>

                <div class="views">
                    <img width="30px" src="{{ asset('images/eye.svg') }}" alt="Просмотры">

                    <span>
                        {{ number_format($pageViews, 0, ',', ' ') }}
                    </span>
                </div>
            </div>
        </div>
    </div>
</footer>