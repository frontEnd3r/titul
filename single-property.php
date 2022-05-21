<?php
/*
Template Name: Карточка объекта
Template Post Type: property
*/

get_header();

$post_id    = get_the_ID();
$post_data  = get_post( $post_id );
$post_title = $post_data->post_title;
$post_info  = [
	'city'         => carbon_get_post_meta( $post_id, 'property-city' ),
	'gallery'      => carbon_get_post_meta( $post_id, 'property-gallery' ),
	'district'     => carbon_get_post_meta( $post_id, 'property-district' ),
	'square'       => carbon_get_post_meta( $post_id, 'property-square' ),
	'squares'      => carbon_get_post_meta( $post_id, 'property-squares' ),
	'price'        => carbon_get_post_meta( $post_id, 'property-price' ),
	'phone'        => carbon_get_post_meta( $post_id, 'property-phone' ),
	'phone-digits' => substr_replace( preg_replace( "/[^0-9]/", '', carbon_get_post_meta( $post_id, 'property-phone' ) ), '+7', 0, 1 ),
	'owner'        => carbon_get_post_meta( $post_id, 'property-owner' ),
	'coordinates'  => carbon_get_post_meta( $post_id, 'property-coordinates' ),
	'description'  => apply_filters( 'the_content', carbon_get_post_meta( $post_id, 'property-description' ) ),
];
?>
<script>
    const coords = '<?php echo $post_info['coordinates']; ?>';
</script>
<section class="photo">
    <div class="container">
        <ul class="nav-one-item">
            <li class="nav-one-item_link"><a href="#">Главная ·</a></li>
            <li class="nav-one-item_link"><a href="#">Земельные участки ·</a></li>
            <li class="nav-one-item_link"><a href="#">Производственная база</a></li>
        </ul>

        <div class="flex-for-section">
            <div class="photo-galery">
                <h1 class="photo-galery_title"><?php echo $post_title; ?></h1>
				<?php
				$counter = 0;
				$images  = $post_info['gallery'];

				if ( count( $images ) > 1 ) : ?>
                    <div class="swiper mySwiper2 galery-swiper galery-mySwiper2">
                        <div class="swiper-wrapper galery-swiper-wrapper">
							<?php foreach ( $images as $image ) : ?>
                                <div class="swiper-slide galery-swiper-slide">
                                    <img src="<?php echo wp_get_attachment_url( $image ); ?>"/>
                                </div>
							<?php endforeach; ?>
                        </div>
                    </div>
                    <div thumbsSlider="" class="swiper mySwiper galery-swiper galery-mySwiper">
                        <div class="swiper-wrapper galery-swiper-wrapper">
							<?php foreach ( $images as $image ) : ?>
                                <div class="swiper-slide galery-swiper-slide">
                                    <img src="<?php echo wp_get_attachment_url( $image ); ?>"/>
                                </div>
							<?php endforeach; ?>
                        </div>
                    </div>

				<?php else : ?>
                    <div class="swiper mySwiper2 galery-swiper galery-mySwiper2">
                        <div class="swiper-wrapper galery-swiper-wrapper">
							<?php foreach ( $images as $image ) : ?>
                                <div class="swiper-slide galery-swiper-slide">
                                    <img src="<?php echo wp_get_attachment_url( $image ); ?>"/>
                                </div>
							<?php endforeach; ?>
                        </div>
                    </div>
				<?php endif;
				?>


                <div class="galery_about">
                    <div class="galery_about__title">О помещении</div>
                    <div class="galery_about-num">
						<?php if ( $post_info['city'] ) : ?>
                            <span class="galery_about-num__txt">
                                <span class="galery_about-num_title">Населенный пункт:</span><?php echo $post_info['city']; ?></span>
						<?php endif; ?>
						<?php if ( $post_info['district'] ) : ?>
                            <span class="galery_about-num__txt">
                                <span class="galery_about-num_title">Район:</span><?php echo $post_info['district']; ?></span>
						<?php endif; ?>
						<?php if ( $post_info['square'] ) : ?>
                            <span class="galery_about-num__txt">
                                <span class="galery_about-num_title">Площадь помещения (в м2):</span><?php echo $post_info['square']; ?>
                            </span>
						<?php endif; ?>
						<?php if ( $post_info['squares'] ) : ?>
                            <span class="galery_about-num__txt">
                                <span class="galery_about-num_title">Земля (в сотках):</span> <?php echo $post_info['squares']; ?>
                            </span>
						<?php endif; ?>
                    </div>
                </div>

                <div class="map">
					<?php if ( $post_info['coordinates'] ) : ?>
                        <div class="galery_about__title">Расположение</div>
                        <div id="ymap" class="gallery-map" style="width: 100%; height: 450px;">
                        </div>
					<?php endif; ?>
                    <div class="object">
                        <div class="galery_about__title">Описание объекта</div>
						<?php echo $post_info['description']; ?>
                    </div>
                </div>

                <div class="cost">
                    <h3 class="cost_title"><?php echo $post_info['price']; ?> ₽</h3>
                    <div class="btn-flex">
                        <a href="tel:<?php echo $post_info['phone-digits']; ?>" type="button"
                           class="quality-expert_text__btn taxi-txt_btn cost-btn">Позвонить
                            <span class="cost_btn__span"><?php echo $post_info['phone']; ?></span></a>
                        <button type="button" class="offer_btn__order-call btn-main cost-btn btn-write">Написать
                            сообщение
                        </button>
                    </div>
                    <div class="cost-name">
						<?php echo $post_info['owner']; ?>
                    </div>
                    <div class="cost-question">
                        <h5 class="cost-question_title">Есть вопросы?</h5>
                        <p class="cost-question_txt">Запишитесь на консультацию к нашему эксперту. Расскажем про
                            окупаемость объектов и поможем подобрать подходящий.</p>
                    </div>
                    <div class="cost-consultant">
                        <button type="button" class="offer_btn__order-call btn-main btn-cons">Консультация</button>
                        <div class="section-help_title__consultant">
                            <img class="section-help_title__consultant-img cost-img"
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
            </div>
        </div>
</section>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
<?php get_footer(); ?>

