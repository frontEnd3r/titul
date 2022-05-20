<?php
if (!defined('ABSPATH')) {
	exit;
}


use Carbon_Fields\Container;
use Carbon_Fields\Field;


Container::make('theme_options', 'Информация о компании')
         ->set_icon('dashicons-text-page')
         ->add_tab(('Шапка сайта'), [
	         Field::make('textarea', 'header-info', 'Текст в заголовке')
	              ->set_width(25)
	              ->help_text('Текст слева в шапке сайта. Принудительный перенос на новую строку через тег br'),
	         Field::make('image', 'header-logo', 'Логотип')
	              ->set_width(25)
	              ->set_value_type('url'),
			 Field::make('text', 'header-company-address', 'Адрес компании в шапке')
				 ->set_width(25),
	         Field::make('Text', 'header-phone-first', 'Первый телефон в шапке')
	              ->set_width(25),
	         Field::make('Text', 'header-phone-second', 'Второй телефон в шапке')
	              ->set_width(25),
         ]);