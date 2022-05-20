<?php
get_header();
?>
    <section class="help">
        <div class="container">
            <div class="section-help_title">
                <h1 class="section-help_title__h1"><?php echo carbon_get_post_meta( 26, 'index-first-title' ); ?>

                </h1>
                <p class="section-help_title__search"><?php echo carbon_get_post_meta( 26, 'index-first-description' ); ?>

                </p>
                <div class="section-help_title__btn-consultant">
                    <button type="button"
                            class="section-help_title_btn offer_btn__order-call btn-main">Проконсультироваться с
                        экспертом
                    </button>
                    <div class="section-help_title__consultant">
                        <img class="section-help_title__consultant-img"
                             src="<?php echo get_template_directory_uri() ?>/assets/img/online-consultant.png"
                             alt="Консультант">
                        <div class="section-help_title__consultant___title">
                            <span class="section-help_title__consultant-name">
                                Яна
                            </span>
                            <span class="section-help_title__consultant-online offer_call__online">На связи</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-help_search">
                <div class="section-help_search__flex">
                    <h3 class="section-help_search__title">
                        Поиск
                    </h3>
	                <?php get_search_form(); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="category" id="category">
        <div class="container">
            <p class="category-title">
                Выберите интересующую категорию или
                <a href="#" class="category-title_search">воспользуйтесь поиском</a>
            </p>
            <div class="category-img__flex">
                <a href="#" class="category-img">
                    <div class="category-img_factory category-all">
                        <img class="category-img_factory-img"
                             src="<?php echo get_template_directory_uri() ?>/assets/img/factory.png" alt="factory">
                        <p class="category-img_factory-text  categoty-text">Промышленно-строительные <span
                                    class="categoty-span">комплексы, заводы и базы</span></p>
                    </div>
                </a>
                <a href="#" class="category-img">
                    <div class="category-img_places category-all">
                        <img class="category-img_places-img"
                             src="<?php echo get_template_directory_uri() ?>/assets/img/places.png" alt="places">
                        <p class="category-img_places-text categoty-text">Промышленные площадки</p>
                    </div>
                </a>
                <a href="#" class="category-img">
                    <div class="category-img_warehouse category-all">
                        <img class="category-img_warehouse-img"
                             src="<?php echo get_template_directory_uri() ?>/assets/img/warehouse.png" alt="warehouse">
                        <p class="category-img_warehouse-text categoty-text">Производственно-складские <span
                                    class="categoty-span">помещения</span></p>
                    </div>
                </a>
                <a href="#" class="category-img">
                    <div class="category-img_factory category-all">
                        <img class="category-img_factory-img"
                             src="<?php echo get_template_directory_uri() ?>/assets/img/quarry.png" alt="factory">
                        <p class="category-img_factory-text  categoty-text category-margin">Карьеры и месторождения</p>
                    </div>
                </a>
                <a href="#" class="category-img">
                    <div class="category-img_places category-all">
                        <img class="category-img_places-img"
                             src="<?php echo get_template_directory_uri() ?>/assets/img/ferm.png" alt="places">
                        <p class="category-img_places-text categoty-text ">Сельхоз-предприятия и фермы</p>
                    </div>
                </a>
                <a href="#" class="category-img">
                    <div class="category-img_warehouse category-all">
                        <img class="category-img_warehouse-img"
                             src="<?php echo get_template_directory_uri() ?>/assets/img/office.png" alt="warehouse">
                        <p class="category-img_warehouse-text categoty-text category-margin">Торгово-офисные помещения
                        </p>
                    </div>
                </a>
                <a href="#" class="category-img">
                    <div class="category-img_factory category-all">
                        <img class="category-img_factory-img"
                             src="<?php echo get_template_directory_uri() ?>/assets/img/working.png" alt="factory">
                        <p class="category-img_factory-text  categoty-text category-margin">Действующие предприятия</p>
                    </div>
                </a>
                <a href="#" class="category-img">
                    <div class="category-img_places category-all">
                        <img class="category-img_places-img"
                             src="<?php echo get_template_directory_uri() ?>/assets/img/earthPlaces.png" alt="places">
                        <p class="category-img_places-text categoty-text">Земельные участки</p>
                    </div>
                </a>
                <a href="#" class="category-img">
                    <div class="category-img_warehouse category-all">
                        <img class="category-img_warehouse-img"
                             src="<?php echo get_template_directory_uri() ?>/assets/img/rest.png" alt="warehouse">
                        <p class="category-img_warehouse-text categoty-text category-margin">Базы отдыха и лечения</p>
                    </div>
                </a>
            </div>

        </div>
    </section>

    <section class="proposal" id="proposal">
        <div class="container">
            <h2 class="proposal_title">Специальные предложения</h2>
            <div class="proposal-wrapper">
                <div class="poposal-wrapper_slider">
                    <button type="button" id="btn-prev" class="poposal-wrapper_slider__prev slider-arrow">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/prev.png" alt="prev">
                    </button>
                    <img class="poposal-wrapper_slider__slide"
                         src="<?php echo get_template_directory_uri() ?>/assets/img/slider-1.png" alt="slider">
                    <div class="poposal-wrapper_slider__slides">
						<?php $counter = 1;
						$slides        = carbon_get_post_meta( 26, 'slider-slides' );
						foreach ( $slides as $slide ) { ?>
                            <span class="poposal-wrapper_slider__area <?php if ( $counter === 1 ) {
								echo 'active';
							} ?>">
                            <span class="poposal-wrapper_slider__area-title"><?php echo $slide['object-name']; ?></span>
                            <span class="poposal-wrapper_slider__area-txt"><?php echo $slide['object-main-title']; ?></span>
                            <p class="poposal-wrapper_slider__area-about"><?php echo $slide['object-main-subtitle']; ?></p>
                            <button type="button" class="poposal-wrapper_slider__area-btn">Посмотреть</button>
                        </span>
							<?php $counter ++;
						} ?>


                    </div>


                    <button type="button" id="btn-next" class="poposal-wrapper_slider__next slider-arrow">
                        <svg width="12" height="25" viewBox="0 0 12 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 24L10 12.5L1 0.999998" stroke="white" stroke-width="2"/>
                        </svg>
                    </button>


                </div>
                <div class="dots-for-slider">
					<?php $counter = 1;
					foreach ( $slides as $slide ) { ?>
                        <button type="button" class="dots-for-slider_dot <?php if ( $counter === 1 ) {
							echo 'active';
						} ?>"></button>
						<?php $counter ++;
					} ?>
                </div>
            </div>
        </div>
    </section>

    <section class="quality-section" id="quality-section">
        <div class="container">
            <div class="quality">
                <h2 class="quality_title">Почему стоит работать с нами?</h2>
                <div class="quality-items">
                    <div class="quality-items_wrapper quality-items_wrapper__fast">
                        <div class="quality-items_wrapper__title">Работаем <span class="span-for-color">быстро</span>
                        </div>
                        <div class="quality-items_wrapper__text">Скорость — основа нашей работы. Мы всегда стараемся
                            продать объект как можно быстрее. Например, был случай, когда мы продали предприятие за 3
                            дня.
                        </div>
                        <img class="quality-items_wrapper__img"
                             src="<?php echo get_template_directory_uri() ?>/assets/img/fast.png" alt="man-run">
                    </div>
                    <div class="quality-items_wrapper quality-items_wrapper__difficulties">
                        <div class="quality-items_wrapper__title">Решаем <span class="span-for-color"> сложности</span>
                        </div>
                        <div class="quality-items_wrapper__text">Бывает, что возникают сложные ситуации. Например,
                            владелец отказывается снижать стоимость предприятия из-за. Иногда это доходит до бурных
                            словесных перепалок.
                            Мы всегда находимся на стороне нашего клиента, поэтому поможем урегулировать спор.
                        </div>
                        <img class="quality-items_wrapper__img"
                             src="<?php echo get_template_directory_uri() ?>/assets/img/difficulties.png" alt="man-run">
                    </div>
                    <div class="quality-items_wrapper quality-items_wrapper__margin quality-items_wrapper__paper">
                        <div class="quality-items_wrapper__title">Берём <span class="span-for-color">бумаги </span>на
                            себя
                        </div>
                        <div class="quality-items_wrapper__text">Никому не нравится возиться с тонной бумаг, поэтому
                            сбор и подачу документов берём на себя
                        </div>
                        <img class="quality-items_wrapper__img"
                             src="<?php echo get_template_directory_uri() ?>/assets/img/paper.png" alt="man-run">
                    </div>
                    <div class="quality-items_wrapper quality-items_wrapper__car">
                        <div class="quality-items_wrapper__title"
                        <span class="span-for-color">Отвезём</span>> на
                        объекты
                    </div>
                    <div class="quality-items_wrapper__text">Выбрали какие объекты хотите посмотреть? Мы вас отвезём
                        и расскажем об объектах только правду.
                        С нами владельцы не соврут и вы сделаете выводы непредвзято.
                    </div>
                    <img class="quality-items_wrapper__img"
                         src="<?php echo get_template_directory_uri() ?>/assets/img/car.png" alt="man-run">
                </div>
                <div class="quality-items_wrapper quality-items_wrapper__pay">
                    <div class="quality-items_wrapper__title">Оплата <span class="span-for-color">по факту</span>
                    </div>
                    <div class="quality-items_wrapper__text">Мы берём оплату только когда проделали свою работу.
                        Важно, чтобы вы остались довольны объектом.
                    </div>
                </div>
                <div class="quality-items_wrapper quality-items_wrapper__margin quality-items_wrapper__people">
                    <div class="quality-items_wrapper__title">Ваше <span class="span-for-color">участие
                                ненужно</span></div>
                    <div class="quality-items_wrapper__text">Когда вы продаёте объект, все показы, рекламу и встречи
                        мы делаем сами.
                        Занимайтесь своими важными делами, пока мы занимаемся своей работой.
                    </div>
                    <img class="quality-items_wrapper__img"
                         src="<?php echo get_template_directory_uri() ?>/assets/img/people.png" alt="man-run">
                </div>
            </div>
            <div class="quality-expert">
                <img class="quality-expert_img" src="<?php echo get_template_directory_uri() ?>/assets/img/expert.png"
                     alt="expert">
                <div class="quality-expert_text">
                    <div class="quality-expert_text__title">Задайте вопрос эксперту</div>
                    <p class="quality-expert_text__txt">Эксперт ответит на ваши вопросы и поможет с продажей и
                        поиском коммерческой недвижимости.</p>
                    <button type="button" class="quality-expert_text__btn">Заказать звонок</button>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="feedback" id="feedback">
        <div class="container">
            <h2 class="feedback_title">Отзывы скажут больше</h2>
            <div class="swiper mySwiper feedback-mySwiper feedback-swiper">
                <div class="swiper-wrapper feedback-wrapper-swiper">
                    <div class="swiper-slide swiper-slide-feedback">
                        <div class="feedback-person_offer ">
                            <img class="feedback-person_offer__img"
                                 src="<?php echo get_template_directory_uri() ?>/assets/img/anton.png" alt="Anton">
                            <p class="feedback-person_offer__txt">Надежное агентство, мне очень понравилось. Помогли
                                <span class="feedback-person_offer__txt-span">приобрести</span> отличную загородную
                                недвижимостьи взять выгодную ипотеку. Работают профессионально, все в быстром темпе и
                                результативно. Мне сразу предложили к осмотру несколько вариантов, выгодно, в хорошей
                                местности. Через месяц уже прoвели сделку. Спасибо, отличная рабoта</p>
                            <span class="feedback-person_offer__name">Антон Беляев</span>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-feedback">
                        <div class="feedback-person_offer">
                            <img class="feedback-person_offer__img"
                                 src="<?php echo get_template_directory_uri() ?>/assets/img/maxim.png" alt="Anton">
                            <p class="feedback-person_offer__txt feedback-person_offer__txt-m">Обращался при прoдаже
                                квартиры, все супер. Ребята достаточно быстро нашли покупателя, кoторый даже торговаться
                                особо не стал, так, уступил чисто символически. Сделка прошла хорошо, я доволен.
                                Порадовало, что все прозрачно. Агентство надежное, можно доверять.</p>
                            <span class="feedback-person_offer__name">Максим Кондрашов</span>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-feedback">
                        <div class="feedback-person_offer">
                            <img class="feedback-person_offer__img"
                                 src="<?php echo get_template_directory_uri() ?>/assets/img/elizaveta.png" alt="Anton">
                            <p class="feedback-person_offer__txt feedback-person_offer__txt-e">Большoе спасибо за помощь
                                в приобретении квартиры в нужном районе города. Все варианты, которые предложили в
                                агентстве, мне понравились. Выбрала квартиру с самым лучшим ремoнтом. В агентстве
                                работают настoящие профессионалы</p>
                            <span class="feedback-person_offer__name">Елизавета Кравец</span>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-feedback">
                        <div class="feedback-person_offer">
                            <img class="feedback-person_offer__img"
                                 src="<?php echo get_template_directory_uri() ?>/assets/img/anton.png" alt="Anton">
                            <p class="feedback-person_offer__txt">Надежное агентство, мне очень понравилось. Помогли
                                <span class="feedback-person_offer__txt-span">приобрести</span> отличную загородную
                                недвижимостьи взять выгодную ипотеку. Работают профессионально, все в быстром темпе и
                                результативно. Мне сразу предложили к осмотру несколько вариантов, выгодно, в хорошей
                                местности. Через месяц уже прoвели сделку. Спасибо, отличная рабoта</p>
                            <span class="feedback-person_offer__name">Антон Беляев</span>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-feedback">
                        <div class="feedback-person_offer">
                            <img class="feedback-person_offer__img"
                                 src="<?php echo get_template_directory_uri() ?>/assets/img/maxim.png" alt="Anton">
                            <p class="feedback-person_offer__txt feedback-person_offer__txt-m">Обращался при прoдаже
                                квартиры, все супер. Ребята достаточно быстро нашли покупателя, кoторый даже торговаться
                                особо не стал, так, уступил чисто символически. Сделка прошла хорошо, я доволен.
                                Порадовало, что все прозрачно. Агентство надежное, можно доверять.</p>
                            <span class="feedback-person_offer__name">Максим Кондрашов</span>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-feedback">
                        <div class="feedback-person_offer">
                            <img class="feedback-person_offer__img"
                                 src="<?php echo get_template_directory_uri() ?>/assets/img/elizaveta.png" alt="Anton">
                            <p class="feedback-person_offer__txt feedback-person_offer__txt-e">Большoе спасибо за помощь
                                в приобретении квартиры в нужном районе города. Все варианты, которые предложили в
                                агентстве, мне понравились. Выбрала квартиру с самым лучшим ремoнтом. В агентстве
                                работают настoящие профессионалы</p>
                            <span class="feedback-person_offer__name">Елизавета Кравец</span>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-feedback">
                        <div class="feedback-person_offer active">
                            <img class="feedback-person_offer__img"
                                 src="<?php echo get_template_directory_uri() ?>/assets/img/anton.png" alt="Anton">
                            <p class="feedback-person_offer__txt">Надежное агентство, мне очень понравилось. Помогли
                                <span class="feedback-person_offer__txt-span">приобрести</span> отличную загородную
                                недвижимостьи взять выгодную ипотеку. Работают профессионально, все в быстром темпе и
                                результативно. Мне сразу предложили к осмотру несколько вариантов, выгодно, в хорошей
                                местности. Через месяц уже прoвели сделку. Спасибо, отличная рабoта</p>
                            <span class="feedback-person_offer__name">Антон Беляев</span>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-feedback">
                        <div class="feedback-person_offer">
                            <img class="feedback-person_offer__img"
                                 src="<?php echo get_template_directory_uri() ?>/assets/img/maxim.png" alt="Anton">
                            <p class="feedback-person_offer__txt feedback-person_offer__txt-m">Обращался при прoдаже
                                квартиры, все супер. Ребята достаточно быстро нашли покупателя, кoторый даже торговаться
                                особо не стал, так, уступил чисто символически. Сделка прошла хорошо, я доволен.
                                Порадовало, что все прозрачно. Агентство надежное, можно доверять.</p>
                            <span class="feedback-person_offer__name">Максим Кондрашов</span>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-feedback">
                        <div class="feedback-person_offer">
                            <img class="feedback-person_offer__img"
                                 src="<?php echo get_template_directory_uri() ?>/assets/img/elizaveta.png" alt="Anton">
                            <p class="feedback-person_offer__txt feedback-person_offer__txt-e">Большoе спасибо за помощь
                                в приобретении квартиры в нужном районе города. Все варианты, которые предложили в
                                агентстве, мне понравились. Выбрала квартиру с самым лучшим ремoнтом. В агентстве
                                работают настoящие профессионалы</p>
                            <span class="feedback-person_offer__name">Елизавета Кравец</span>
                        </div>
                    </div>

                </div>
                <div class="swiper-button-next">
                    <button type="button" class="poposal-wrapper_slider__next  slider-arrow">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/next.png" alt="next">
                    </button>
                </div>
                <div class="swiper-button-prev">
                    <button type="button" id="btn-prev"
                            class="prev-brn poposal-wrapper_slider__prev arrow-feedback-mr slider-arrow">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/prev.png" alt="prev">
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="client-section" id="client-section">
        <div class="container">
            <div class="offer-client">
                <div class="offer-client_about">
                    <h2 class="offer-client_about__title">В основе всего —<span class="offer-client_about__title-span">
                            польза клиенту</span></h2>
                    <p class="offer-client_about__txt">«Мы подробно разбираемся в потребностях, дотошно находим
                        подходящие варианты и решаем сложные вопросы. Всегда находимся на вашей стороне до конца и не
                        боимся трудностей»</p>
                    <span class="offer-client_about__founder">Евгений, основатель агентства</span>
                </div>
                <img class="offer-client_img" src="<?php echo get_template_directory_uri() ?>/assets/img/founder.png"
                     alt="founder">
            </div>
        </div>
    </section>

    <section class="journal" id="journal">
        <div class="container">
            <div class="call">
                <img class="call_img" src="<?php echo get_template_directory_uri() ?>/assets/img/call(2).png"
                     alt="expert">
                <div class="call_text">
                    <h4 class="cal_text__titile">Закажите звонок
                        от нашего эксперта</h4>
                    <p class="cal_text__txt">Эксперт ответит на ваши вопросы и поможет с продажей и поиском коммерческой
                        недвижимости.</p>
                    <button type="button" class="quality-expert_text__btn">Заказать звонок</button>
                </div>
            </div>

            <div class="journal-offer">
                <h3 class="journal-offer_title">Журнал «Титула»</h3>
                <p class="journal-offer_txt">Читайте фирменный журнал с нашими кейсами, новостями о коммерческой
                    недвижимости и советами.</p>
            </div>
            <div class="journal-offer_btn" id="tabs">
                <button class="journal-offer_btn__item active tab" data-btn="1">Кейсы</button>
                <button class="journal-offer_btn__item tab" data-btn="2">Совет</button>
                <button class="journal-offer_btn__item tab" data-btn="3">Новости</button>
                <button class="journal-offer_btn__item tab" data-btn="4">Лонгрид</button>
                <a href="#" class="journal-offer_btn__href">Читать весь журнал</a>
            </div>

            <div class="journal-news">

                <div class="journal-content active" id="contents-tab" data-content="1">
                    <div class="journal-news_item active ">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/house.png" alt="house">
                        <div class="journal-news_item__text">
                            <h5 class="journal-news_item__title">Помогли клиенту подобрать офисное помещение
                                с окупаемостью <span class="journal-news_item__title-span db-span">200% в год</span>
                            </h5>
                            <p class="journal-nwes_item__txt">Объездили 15 разных объектов, один раз слетали в другой
                                город и потратили 100 литров бензина.</p>
                        </div>
                    </div>
                    <div class="journal-news_item active ">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/president.png" alt="house">
                        <div class="journal-news_item__text">
                            <h5 class="journal-news_item__title">Сколько будет
                                <span class="journal-news_item__title-blue">стоить</span> коммерческая недвижимость
                                в 2022 году?
                            </h5>
                            <p class="journal-nwes_item__txt">Новые законы, повышение цен и о том как снизить налоги в
                                этой статье.</p>
                        </div>
                    </div>
                    <div class="journal-news_item active ">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/money.png" alt="house">
                        <div class="journal-news_item__text ">
                            <h5 class="journal-news_item__title money-color">Как <span
                                        class="journal-news_item__title-span">снизить </span>налоги для работающих
                                предприятий через ... </h5>
                            <p class="journal-nwes_item__txt money-color ">В статье — действия, которые помогают
                                легально снизить налог от 5 до 40%.</p>
                        </div>
                    </div>
                </div>

                <div class="journal-content" id="contents-tab" data-content="2">
                    <div class="journal-news_item  ">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/money.png" alt="house">
                        <div class="journal-news_item__text ">
                            <h5 class="journal-news_item__title money-color">Как <span
                                        class="journal-news_item__title-span">снизить </span>налоги для работающих
                                предприятий через ... </h5>
                            <p class="journal-nwes_item__txt money-color ">В статье — действия, которые помогают
                                легально снизить налог от 5 до 40%.</p>
                        </div>
                    </div>
                    <div class="journal-news_item  ">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/president.png" alt="house">
                        <div class="journal-news_item__text">
                            <h5 class="journal-news_item__title">Сколько будет
                                <span class="journal-news_item__title-blue">стоить</span> коммерческая недвижимость
                                в 2022 году?
                            </h5>
                            <p class="journal-nwes_item__txt">Новые законы, повышение цен и о том как снизить налоги в
                                этой статье.</p>
                        </div>
                    </div>
                    <div class="journal-news_item ">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/house.png" alt="house">
                        <div class="journal-news_item__text">
                            <h5 class="journal-news_item__title">Помогли клиенту подобрать офисное помещение
                                с окупаемостью <span class="journal-news_item__title-span db-span">200% в год</span>
                            </h5>
                            <p class="journal-nwes_item__txt">Объездили 15 разных объектов, один раз слетали в другой
                                город и потратили 100 литров бензина.</p>
                        </div>
                    </div>
                </div>

                <div class="journal-content" id="contents-tab" data-content="3">
                    <div class="journal-news_item ">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/house.png" alt="house">
                        <div class="journal-news_item__text">
                            <h5 class="journal-news_item__title">Помогли клиенту подобрать офисное помещение
                                с окупаемостью <span class="journal-news_item__title-span db-span">200% в год</span>
                            </h5>
                            <p class="journal-nwes_item__txt">Объездили 15 разных объектов, один раз слетали в другой
                                город и потратили 100 литров бензина.</p>
                        </div>
                    </div>
                    <div class="journal-news_item ">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/president.png" alt="house">
                        <div class="journal-news_item__text">
                            <h5 class="journal-news_item__title">Сколько будет
                                <span class="journal-news_item__title-blue">стоить</span> коммерческая недвижимость
                                в 2022 году?
                            </h5>
                            <p class="journal-nwes_item__txt">Новые законы, повышение цен и о том как снизить налоги в
                                этой статье.</p>
                        </div>
                    </div>
                    <div class="journal-news_item">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/money.png" alt="house">
                        <div class="journal-news_item__text ">
                            <h5 class="journal-news_item__title money-color">Как <span
                                        class="journal-news_item__title-span">снизить </span>налоги для работающих
                                предприятий через ... </h5>
                            <p class="journal-nwes_item__txt money-color ">В статье — действия, которые помогают
                                легально снизить налог от 5 до 40%.</p>
                        </div>
                    </div>
                </div>

                <div class="journal-content" id="contents-tab" data-content="4">
                    <div class="journal-news_item">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/money.png" alt="house">
                        <div class="journal-news_item__text ">
                            <h5 class="journal-news_item__title money-color">Как <span
                                        class="journal-news_item__title-span">снизить </span>налоги для работающих
                                предприятий через ... </h5>
                            <p class="journal-nwes_item__txt money-color ">В статье — действия, которые помогают
                                легально снизить налог от 5 до 40%.</p>
                        </div>
                    </div>
                    <div class="journal-news_item">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/president.png" alt="house">
                        <div class="journal-news_item__text">
                            <h5 class="journal-news_item__title">Сколько будет
                                <span class="journal-news_item__title-blue">стоить</span> коммерческая недвижимость
                                в 2022 году?
                            </h5>
                            <p class="journal-nwes_item__txt">Новые законы, повышение цен и о том как снизить налоги в
                                этой статье.</p>
                        </div>
                    </div>
                    <div class="journal-news_item">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/house.png" alt="house">
                        <div class="journal-news_item__text">
                            <h5 class="journal-news_item__title">Помогли клиенту подобрать офисное помещение
                                с окупаемостью <span class="journal-news_item__title-span db-span">200% в год</span>
                            </h5>
                            <p class="journal-nwes_item__txt">Объездили 15 разных объектов, один раз слетали в другой
                                город и потратили 100 литров бензина.</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
<?php
get_footer();
