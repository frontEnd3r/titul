<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


use Carbon_Fields\Container;
use Carbon_Fields\Field;



Container::make( 'term_meta', 'Для изображений категорий на главной' )
         ->where( 'term_taxonomy', '=', 'category' )
         ->add_fields( array(
	         Field::make( 'image', 'term_thumb' ),
         ) );