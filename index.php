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
                            class="section-help_title_btn offer_btn__order-call btn-main" id="section-help_title_btn">
                        Проконсультироваться с
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
                <a href="<?php echo site_url(); ?>/search" class="category-title_search">воспользуйтесь поиском</a>
            </p>
            <div class="category-img__flex">

				<?php

				$categories = get_categories( [
					'taxonomy'     => 'category',
					'type'         => 'post',
					'child_of'     => 8,
					'parent'       => '',
					'orderby'      => 'name',
					'order'        => 'ASC',
					'hide_empty'   => 1,
					'hierarchical' => 1,
					'exclude'      => '',
					'include'      => '',
					'number'       => 0,
					'pad_counts'   => false,
				] );

				if ( $categories ) {
					foreach ( $categories as $cat ) {
//						echo '<pre>';
//						print_r( $cat );
//						echo '</pre>'; ?>

                        <a href="<?php echo get_category_link($cat->term_id); ?> " class="category-img">
                            <div class="category-img_factory category-all">
                                <img class="category-img_factory-img"
                                     src="<?php echo wp_get_attachment_url(carbon_get_term_meta( $cat->term_id, 'term_thumb' )) ; ?>"
                                     alt="factory">
                                <p class="category-img_factory-text  categoty-text"><?php echo $cat->name ?></p>
                            </div>
                        </a>
					<?php }
				}

				?>


            </div>

        </div>
    </section>

    <section class="proposal" id="proposal">
        <div class="container">
            <h2 class="proposal_title">Специальные предложения</h2>
            <div class="proposal-wrapper">
                <div class="poposal-wrapper_slider">
                    <div class="swiper mySwiper poposal-swiper">
                        <div class="swiper-wrapper ">
                            <div class="swiper-slide poposal-slide">
                                <img class="poposal-slide__img"
                                     src="<?php echo get_template_directory_uri() ?>/assets/img/poposal-slide.png"
                                     alt="slide">
                                <span class="poposal-slide__text">
                                    <h4 class="poposal-slide_title">Земельный участок</h4>
                                    <span class="poposal-slide__txt">300 га, 5.5 млн. руб</span>
                                    <p class="poposal-slide__about">Подойдёт для постройки дома, фермы или небольшого предприятия.</p>
                                    <button class="poposal-slide__btn" type="button">Посмотреть</button>
                                </span>
                            </div>
                            <div class="swiper-slide poposal-slide">
                                <img class="poposal-slide__img"
                                     src="<?php echo get_template_directory_uri() ?>/assets/img/poposal-slide.png"
                                     alt="slide">
                                <span class="poposal-slide__text">
                                    <h4 class="poposal-slide_title">Земельный участок</h4>
                                    <span class="poposal-slide__txt">300 га, 5.5 млн. руб</span>
                                    <p class="poposal-slide__about">Подойдёт для постройки дома, фермы или небольшого предприятия.</p>
                                    <button class="poposal-slide__btn" type="button">Посмотреть</button>
                                </span>
                            </div>
                            <div class="swiper-slide poposal-slide">
                                <img class="poposal-slide__img"
                                     src="<?php echo get_template_directory_uri() ?>/assets/img/poposal-slide.png"
                                     alt="slide">
                                <span class="poposal-slide__text">
                                    <h4 class="poposal-slide_title">Земельный участок</h4>
                                    <span class="poposal-slide__txt">300 га, 5.5 млн. руб</span>
                                    <p class="poposal-slide__about">Подойдёт для постройки дома, фермы или небольшого предприятия.</p>
                                    <button class="poposal-slide__btn" type="button">Посмотреть</button>
                                </span>
                            </div>
                            <div class="swiper-slide poposal-slide">
                                <img class="poposal-slide__img"
                                     src="<?php echo get_template_directory_uri() ?>/assets/img/poposal-slide.png"
                                     alt="slide">
                                <span class="poposal-slide__text">
                                    <h4 class="poposal-slide_title">Земельный участок</h4>
                                    <span class="poposal-slide__txt">300 га, 5.5 млн. руб</span>
                                    <p class="poposal-slide__about">Подойдёт для постройки дома, фермы или небольшого предприятия.</p>
                                    <button class="poposal-slide__btn" type="button">Посмотреть</button>
                                </span>
                            </div>
                            <div class="swiper-slide poposal-slide">
                                <img class="poposal-slide__img"
                                     src="<?php echo get_template_directory_uri() ?>/assets/img/poposal-slide.png"
                                     alt="slide">
                                <span class="poposal-slide__text">
                                    <h4 class="poposal-slide_title">Земельный участок</h4>
                                    <span class="poposal-slide__txt">300 га, 5.5 млн. руб</span>
                                    <p class="poposal-slide__about">Подойдёт для постройки дома, фермы или небольшого предприятия.</p>
                                    <button class="poposal-slide__btn" type="button">Посмотреть</button>
                                </span>
                            </div>
                            <div class="swiper-slide poposal-slide">
                                <img class="poposal-slide__img"
                                     src="<?php echo get_template_directory_uri() ?>/assets/img/poposal-slide.png"
                                     alt="slide">
                                <span class="poposal-slide__text">
                                    <h4 class="poposal-slide_title">Земельный участок</h4>
                                    <span class="poposal-slide__txt">300 га, 5.5 млн. руб</span>
                                    <p class="poposal-slide__about">Подойдёт для постройки дома, фермы или небольшого предприятия.</p>
                                    <button class="poposal-slide__btn" type="button">Посмотреть</button>
                                </span>
                            </div>
                        </div>
                        <div class="swiper-button-next">
                            <button type="button" class="poposal-wrapper_slider__next  slider-arrow poposal-arrow_next">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/next.png" alt="next">
                            </button>
                        </div>
                        <div class="swiper-button-prev">
                            <button type="button" id="btn-prev"
                                    class="prev-brn poposal-wrapper_slider__prev arrow-feedback-mr slider-arrow poposal-arrow_prev">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/prev.png" alt="prev">
                            </button>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>


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
                        <img class="quality-items_wrapper__img img_width"
                             src="<?php echo get_template_directory_uri() ?>/assets/img/difficulties.png" alt="man-run">
                    </div>
                    <div class="quality-items_wrapper quality-items_wrapper__margin quality-items_wrapper__paper">
                        <div class="quality-items_wrapper__title">Берём <span class="span-for-color">бумаги </span>на
                            себя
                        </div>
                        <div class="quality-items_wrapper__text quality-item_txt-margin">Никому не нравится возиться с тонной бумаг, поэтому
                            сбор и подачу документов берём на себя
                        </div>
                        <img class="quality-items_wrapper__img"
                             src="<?php echo get_template_directory_uri() ?>/assets/img/paper.png" alt="man-run">
                    </div>
                    <div class="quality-items_wrapper quality-items_wrapper__car">
                        <div class="quality-items_wrapper__title">
                        
                        <span class="span-for-color">Отвезём</span> на объекты
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
                <img class="quality-expert_img"
                     src="<?php echo get_template_directory_uri() ?>/assets/img/expert-question.png"
                     alt="expert">
                <div class="quality-expert_text">
                    <div class="quality-expert_text__title">Задайте вопрос эксперту</div>
                    <p class="quality-expert_text__txt">Эксперт ответит на ваши вопросы и поможет с продажей и
                        поиском коммерческой недвижимости.</p>
                    <button id="quality-expert_text__btn" type="button" class="quality-expert_text__btn">Заказать
                        звонок
                    </button>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="feedback" id="feedback">
        <div class="container">
            <h2 class="feedback_title">Отзывы скажут больше</h2>
            <h2 class="feedback_title_mob">Отзывы</h2>
            <div class="swiper  feedback-swiper">
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
                    <button id="btn-next" type="button"
                            class="poposal-wrapper_slider__next  slider-arrow feedback_next">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/next.png" alt="next">
                    </button>
                </div>
                <div class="swiper-button-prev">
                    <button type="button" id="btn-prev"
                            class="prev-brn poposal-wrapper_slider__prev arrow-feedback-mr slider-arrow feedback_prev">
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
                <img class="call_img" src="<?php echo get_template_directory_uri() ?>/assets/img/call-expert.png"
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
    <div class="wrapper-modal" id="wrapper-modal">
        <div class="overlay" id="overlay"></div>
        <div class="modal-window-text" id="modal-window-text">
            <div class="modal-txt">
                <h4 class="modal__title">Заявка на консультацию с экспертом</h4>
                <p class="modal__about">Напишите контакты, чтобы эксперт помог вам разместить объект или подобрать
                    недвижимость.</p>
            </div>
            <div class="modal-form">
                <div class="consultant_time">
                    <img class="consultant_modal__img"
                         src="<?php echo get_template_directory_uri() ?>/assets/img/online-consultant.png"
                         alt="consultant">
                    <p class="consultant__txt">Эксперты перезвонят в течении 15 минут.</p>
                </div>
                <div class="modal-form__item">
                    <h5 class="form-quest">Как к вам обращаться?</h5>
                    <input class="form_modal__input" type="text" placeholder="Виталий">
                    <h5 class="form-quest">Куда звонить?</h5>
                    <input class="form_modal__input" type="tel" placeholder="89005553535">
                    <button type="button" class="section-help_search__btn modal__btn">Найти</button>
                    <button type="button" class="offer_btn__whatsapp btn-main modal__btn modal_btn_whats">
                        Написать <span class="offer_btn__span"> в WhatsApp</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();
