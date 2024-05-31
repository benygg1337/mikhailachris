<?php
/*
Template Name: Home
*/ ?>

<?php get_header(); ?>



<body>
    <div class="in9-wrapper">
        <main class="in9-page">
            <div class="in9-page__decor">
                <div class="in9-page__bg">
                    <div class="in9-border"></div>
                    <div class="in9-page__title">
                        Михаил и Кристина
                        <span>03/08/2024</span>
                    </div>
                </div>

                <div class='in9-page__container _in9-container'>

                    <!-- Опрос -->
                    <div class="in9-survey">
                        <div class="in9-survey__block">
                            <div class="in9-survey__subtitle in9-title">Дорогие наши родные и друзья!</div>
                            <div class="in9-survey__text">
                                Один день в этом году будет для нас особенным, и мы хотим провести его в кругу близких и
                                друзей. Этот день станет красивым началом долгой и счастливой жизни. С большим
                                удовольствием приглашаем Вас на знаменательный праздник - нашу свадьбу!
                            </div>
                        </div>
                        <div class="in9-survey__title">Пожалуйста, подтвердите свое присутствие.</div>
                        <div class="in9-survey__box">
                            <div href="in9-form" onclick="showPopup('agree')"
                                class="in9-survey__btn in9-btn _popup-link">Я приду</div>
                            <div href="in9-form" onclick="showSurveyBox('notagree')"
                                class="in9-survey__btn in9-btn _popup-link">К
                                сожалению, я не приду</div>
                        </div>
                    </div>

                    <!-- История любви -->
                    <div class="in9-wishes">
                        <div class="in9-wishes__title in9-title">Наша история любви</div>
                        <div class="in9-wishes__text">Наше первое свидание было три года назад в Екатерининском саду,
                            где
                            осенью шел сильный дождь. Но этот дождь лишь добавил очарования нашей встрече. Мы провели
                            этот
                            вечер, погруженные в разговоры, смеясь и неотрывно глядя друг на друга. За прошедшие четыре
                            года
                            у нас было много волнующих моментов, и мы готовы и дальше счастливо идти по жизни вместе!
                        </div>
                        <div class="in9-wishes__row">
                            <div class="in9-wishes__column">
                                <div class="in9-wishes__image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img//wishes01.jpg" alt="" />
                                </div>
                            </div>
                            <div class="in9-wishes__column">
                                <div class="in9-wishes__image_2">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img//wishes02.jpg" alt="" />
                                </div>
                            </div>
                            <div class="in9-wishes__column">
                                <div class="in9-wishes__image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img//wishes03.jpg" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Программа -->
                    <div class="in9-program">
                        <div class="in9-program__title in9-title">Программа мероприятия</div>
                        <div class="in9-program__block">
                            <p></p>
                            <div class="in9-program__item">
                                <div class="in9-program__time">15:00</div>
                                <div class="in9-program__box">
                                    <div class="in9-program__subtitle">Сбор гостей на приветственный фуршет</div>
                                    <div class="in9-program__text">
                                        Загородный клуб «АлександрЪ»<br>
                                        Адрес: поселение Марушкинское, ул. Лесная 1,<br>
                                        Банкетный зал «Веранда»
                                    </div>
                                </div>
                            </div>
                            <div class="in9-program__item">
                                <div class="in9-program__time">16:00</div>
                                <div class="in9-program__box">
                                    <div class="in9-program__subtitle">Свадебная церемония</div>
                                </div>
                            </div>
                            <div class="in9-program__item">
                                <div class="in9-program__time">17:00</div>
                                <div class="in9-program__box">
                                    <div class="in9-program__subtitle">Начало праздничного банкета</div>
                                </div>
                            </div>
                            <div class="in9-program__item">
                                <div class="in9-program__time">22:00</div>
                                <div class="in9-program__box">
                                    <div class="in9-program__subtitle">Окончание основной части программы, начало
                                        дискотеки</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Место торжества -->
                    <div class="in9-place">
                        <div class="in9-place__titel in9-title">Место торжества</div>
                        <div class="in9-place__row">
                            <div class="in9-place__column">
                                <div class="in9-place__item">
                                    <div class="in9-place__image"><img
                                            src="<?php bloginfo('template_url'); ?>/assets/img//place01.jpg" alt="" />
                                    </div>
                                    <div class="in9-place__block">
                                        <div class="in9-place__subtitle">Загородный клуб “АЛЕКСАНДРЪ” </div>
                                        <a target="_blank"
                                            href="https://yandex.ru/maps/213/moscow/?ll=37.130830%2C55.578915&mode=poi&poi%5Bpoint%5D=37.130725%2C55.578878&poi%5Buri%5D=ymapsbm1%3A%2F%2Forg%3Foid%3D1228564203&z=17"
                                            class="in9-place__btn in9-btn_w">Посмотреть на карте</a>
                                    </div>
                                </div>
                            </div>
                            <div class="in9-place__column">
                                <div class="in9-place__item">
                                    <div class="in9-place__image"><img
                                            src="<?php bloginfo('template_url'); ?>/assets/img//place02.jpg" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Отвечаем на Ваши вопросы -->
                    <div class="in9-questions">
                        <div class="in9-questions__block">
                            <div class="in9-questions__decor">
                                <div class="in9-questions__title in9-title">Отвечаем на Ваши вопросы</div>
                                <div class="in9-questions__subtitle">Будет ли дресс-код?</div>
                                <div class="in9-questions__text_1">Мы будем признательны, если Вы поддержите цветовую
                                    гамму торжества в одежде.
                                    <span>А также мы хотели бы попросить Вас взять на свадьбу солнцезащитные очки</span>
                                </div>
                                <div class="col-block">
                                    <div class="in9-questions__cover">FOR WOMEN:</div>
                                    <div class="col">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img//color11.svg" alt="" />
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img//color12.svg" alt="" />
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img//color13.svg" alt="" />
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img//color14.svg" alt="" />
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img//color15.svg" alt="" />
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img//color16.svg" alt="" />
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img//color17.svg" alt="" />
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img//color18.svg" alt="" />
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img//color19.svg" alt="" />
                                    </div>
                                </div>
                                <div class="col-block">
                                    <div class="in9-questions__cover">FOR MEN:
                                    </div>
                                    <div class="col">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img//color21.svg" alt="" />
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img//color22.svg" alt="" />
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img//color23.svg" alt="" />
                                    </div>
                                </div>
                                <div class="in9-questions__subtitle">Нужно ли дарить цветы?</div>
                                <div class="in9-questions__text_2">К сожалению, долго наслаждаться красотой подаренных
                                    цветов нам не удастся, поэтому, если вместо них Вы решите подарить нам бутылочку
                                    алкоголя, которая со временем станет только лучше и пополнит нашу семейную винотеку,
                                    мы будем рады.
                                    Если все-таки Вы решите подарить цветы, то можете отдать предпочтение комнатным
                                    растеним в горшках, которые обоготят кислородом наше семейное гнездышко и остануться
                                    именным воспоминанием на долгие годы.</div>
                                <div class="in9-questions__subtitle">Возможно ли приехать на своем автомобиле?</div>
                                <div class="in9-questions__text">На территории клуба есть бесплатная парковка, так что
                                    Вы можете приехать на своем автомобиле</div>
                                <div class="in9-questions__subtitle">Какие подарки предпочтительны?</div>
                                <div class="in9-questions__text_2">Ваши пожелания в конвертах будут лучшими подарками,
                                    которые помогут осуществить нашу мечту</div>
                                <div class="in9-questions__subtitle">Кому можно задать вопросы по организации
                                    мероприятия?
                                </div>
                                <div class="in9-questions__text_1">
                                    Вам с радостью поможет наш организатор <br>
                                    <a href="tel:+79658321965">+7 965-832-19-65</a> Мария
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Контакты -->
                    <div class="in9-contacts">
                        <div class="in9-contacts__block">
                            <div class="in9-contacts__text">
                                Если Вы потерялись, не можете найти парковку и путь
                                к банкетному залу, а также, может быть, готовите сюрприз или хотите получить ответы на
                                интересующие вопросы – Вам с радостью поможет наш организатор
                                <br>
                                +7 965-832-19-65 Мария
                            </div>
                            <a href="tel:+9658321965" class="in9-questions__btn in9-btn_w">Позвонить Марии</a>

                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="in9-footer">
                        <div class="in9-footer__items">
                            <div class="in9-footer__item">
                                <div class="in9-footer__text">
                                    Мы Вас ждем! <br>
                                    Кристина и Михаил
                                </div>
                            </div>
                            <div class="in9-footer__item">
                                <div class="in9-footer__row">
                                    <div class="in9-footer__column">
                                        <div class="in9-footer__image">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/img//wishes04.jpg"
                                                alt="" />
                                        </div>
                                    </div>
                                    <div class="in9-footer__column">
                                        <div class="in9-footer__image">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/img///wishes05.jpg"
                                                alt="" />
                                        </div>
                                    </div>
                                    <div class="in9-footer__column">
                                        <div class="in9-footer__image">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/img//wishes06.jpg"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div class="popup popup_in9-form">
        <div class="popup__content">
            <div class="popup__body">
                <div class="popup__close"></div>
                <div class="in9-form__content">
                    <div class="in9-form__decor">
                        <div class="in9-form__title in9-title">Опрос</div>
                        <div class="in9-form__regret">Мы сожалеем, что вы не сможете присутствовать.</div>
                        <form enctype="multipart/form-data" method="POST"
                            action="/wp-content/themes/mikhailchris/survey_mail.php" class="in9-form__form">
                            <input type="hidden" id="attendanceStatus" name="form-visit" value="">
                            <div class="in9-form__block">
                                <div class="in9-form__box">
                                    <input type="text" name="form-name" placeholder="Ваше имя и фамилия." data-value=""
                                        class="in9-form-input _req">
                                    <input type="text" name="form-phone" placeholder="Ваш номер телефона." data-value=""
                                        class="in9-form-input _phone _req">
                                </div>
                                <div class="in9-form__subtitle">Что бы Вы хотели в качестве основного блюда?</div>
                                <div class="in9-form__item">
                                    <input id="radio-meat" type="radio" name="form-food" data-value="" value="meat"
                                        class="in9-form-input-radio" />
                                    <label for="radio-meat" class="in9-form-radio">Мясо</label>

                                    <input id="radio-fish" type="radio" name="form-food" data-value="" value="fish"
                                        class="in9-form-input-radio">
                                    <label for="radio-fish" class="in9-form-radio">Рыба</label>
                                </div>
                                <div class="in9-form__subtitle">Что Вы предпочитаете из алкогольных напитков?</div>
                                <div class="in9-form__item">
                                    <input id="radio-strong" type="radio" name="form-drinks" data-value=""
                                        value="strong" class="in9-form-input-radio">
                                    <label for="radio-strong" class="in9-form-radio">Крепкий <br> алкоголь</label>

                                    <input id="radio-no-strong" type="radio" name="form-drinks" data-value=""
                                        value="no-strong" class="in9-form-input-radio">
                                    <label for="radio-no-strong" class="in9-form-radio">Некрепкий <br> алкоголь</label>
                                </div>

                            </div>
                            <div class="in9-form__box-no">
                                <input type="text" name="form-name-no" placeholder="Ваше имя и фамилия" data-value="" 
                                    class="in9-form-input-no _req">

                                <button type="submit" class="in9-form__btn in9-btn">Отправить</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<?php
get_footer(); ?>

