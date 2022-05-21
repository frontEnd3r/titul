<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'post_meta', "Заполнение информации об объекте " )
         ->where( 'post_type', '=', 'property' )
         ->add_tab( ( 'Основная информация' ), [

	         Field::make( 'media_gallery', 'property-gallery' )
	              ->set_type( array( 'image' ) ),
         ] )
         ->add_tab( ( 'О помещении' ), [

	         Field::make( 'text', 'property-city', 'Населенный пункт' )
	              ->set_width( 33 ),
	         Field::make( 'text', 'property-district', 'Район' )
	              ->set_width( 33 ),
	         Field::make( 'text', 'property-square', 'Площадь помещения' )
	              ->set_width( 33 ),
	         Field::make( 'text', 'property-squares', 'Площадь в сотках' )
	              ->set_width( 33 ),
	         Field::make( 'text', 'property-price', 'Цена' )
	              ->set_width( 33 ),
	         Field::make( 'text', 'property-phone', 'Телефон ответственного' )
	              ->set_width( 33 ),
	         Field::make( 'text', 'property-owner', 'Имя контакта' )
	              ->set_width( 33 ),
         ] )
         ->add_tab( ( 'Расположение' ), [

	         Field::make( 'text', 'property-coordinates', 'Координаты объекта на яндекс карте' )
	              ->set_width( 33 )
	              ->help_text( 'Вставить координаты в виде: 41.788834, 44.754414' ),
         ] )
         ->add_tab( ( 'Описание объекта' ), [

	         Field::make( 'rich_text', 'property-description', 'Отредактируйте описание' )
	              ->set_rows( 10 ),
         ] );