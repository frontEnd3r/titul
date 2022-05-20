<?php
if (!defined('ABSPATH')) {
	exit;
}


use Carbon_Fields\Container;
use Carbon_Fields\Field;


Container::make('post_meta', "Заполнение информации о странице ")
         ->show_on_page(26)

         ->add_tab(('Первый блок'), [

	         Field::make('textarea', 'index-first-title', 'Главный заголовок')
		         ->help_text('Подчеркнутый текст вносится внутрь тега <(span class="section-help_title__commercial"></span)> без круглых скобок, Выделенный текст пишется в теге <(span class="section-help_title__day"></span)> '),
	         Field::make('textarea', 'index-first-description', 'Текст под заголовком')
	              ->set_rows(5)
	              ->help_text('Принудительный перенос строки задается через "<(br/)>" без круглых скобок в конце строки, если требуется'),
	         Field::make('image', 'index-first-image', 'Главное изображение на фоне')
	              ->set_value_type('url'),
         ])

		->add_tab(('Слайдер'), [
			Field::make('complex', 'slider-slides', 'Слайдер')
				->add_fields('slides', [
					Field::make('text', 'object-name', 'Название объекта')
					     ->set_width(30),
					Field::make('text', 'object-main-title', 'Главная информация')
					     ->set_width(30),
					Field::make('textarea', 'object-main-subtitle', 'Доп. Описание')
					     ->set_width(30),
				]),
		]);