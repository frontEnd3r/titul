<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Titul
 */

?>
</main>
<footer class="footer" id="footer">
        <div class="container">
            <div class="information-all">
                <div class="information">
                    <div class="information_contacts">
                        <div class="information_contacts__item">
                            <h5 class="information_contacts__item-title">Контакты</h5>
                            <div class="information_contacts__item-flex">
                                <img class="information_contacts__item-img" src="<?php echo get_template_directory_uri()?>/assets/img/phone.svg" alt="phone">
                                <p class="information_contacts__item-txt">+7 (929) 032-33-33</p>
                            </div>
                        </div>
                        <div class="information_contacts__item">
                            <div class="information_contacts__item-flex">
                                <img class="information_contacts__item-img" src="<?php echo get_template_directory_uri()?>/assets/img/mail.svg" alt="phone">
                                <p class="information_contacts__item-txt">info@titul40.ru</p>
                            </div>
                        </div>
                        <div class="information_contacts__item"></div>
                        <div class="information_contacts__item-flex">
                            <img class="information_contacts__item-img" src="<?php echo get_template_directory_uri()?>/assets/img/map.svg" alt="phone">
                            <p class="information_contacts__item-txt">Пермь, ул. Куйбышева,
                                50, оф. 804
                                <span class="information_contacts__item-txt_span">Ост. Стадион "Динамо"</span>
                            </p>
                        </div>
                    </div>
                    <div class="information_contacts-social">
                        <p class="information_contacts-social_title">Пишите, мы онлайн</p>
                        <div class="information_contacts-social_items">
                            <img class="whatsapp media-img" src="<?php echo get_template_directory_uri()?>/assets/img/WhatsApp.svg" alt="whatsapp">
                            <img class="telegram media-img" src="<?php echo get_template_directory_uri()?>/assets/img/telegram.png" alt="telegram">
                            <img class="instagram media-img" src="<?php echo get_template_directory_uri()?>/assets/img/inst.png" alt="instagram">
                        </div>
                    </div>
                </div>

                <div class="information_contacts__item">
                    <h5 class="information_contacts__item-title">Приезжайте к нам </h5>
                    <div class="information_contacts__item-flex information_photo">
                        <img class="information_contacts__item-photo" src="<?php echo get_template_directory_uri()?>/assets/img/footer-2.png" alt="phone">
                        <img class="information_contacts__item-photo" src="<?php echo get_template_directory_uri()?>/assets/img/footer-1.png" alt="">
                        <img class="information_contacts__item-photo" src="<?php echo get_template_directory_uri()?>/assets/img/footer-3.png" alt="">
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/footer-4.png" alt="">
                    </div>
                </div>

                <div class="information_map">
                    <h5 class="information_contacts__item-title">Мы на карте </h5>
                    <div class="information_map__location">
                        <iframe
                            src="https://yandex.ru/map-widget/v1/?um=constructor%3A7fc3bde6fb6a36c3d57cfbc1a98c1b2408a103a37902d77b5de498f0cb07f3f6&amp;source=constructor"
                            width="400" height="297" frameborder="0"></iframe>
                    </div>

                </div>
            </div>

            <div class="taxi">
                <img class="taxi-img" src="<?php echo get_template_directory_uri()?>/assets/img/footer-car.png" alt="taxi">
                <div class="taxi-txt">
                    <h5 class="footer-taxi_title">
                        Вызовите такси <span class="footer-taxi_title">до офиса</span>
                    </h5>
                    <button type="button" class="quality-expert_text__btn taxi-txt_btn">Заказать звонок</button>
                    <p class="taxi-text_pay">За наш счёт*</p>
                </div>
            </div>
            <div class="politics">
                <span class="politics_txt politics-span">Калуга 2021-2022 © Все права защищены</span>
                <a href="#" class="politics_txt politics_underline">Политика конфединциальности</a>
            </div>
        </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
