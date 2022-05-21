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


?>

<form action="<?php echo site_url(); ?>/search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>"
      class="section-help_search__form">
    <div class="section-help_search__form-input form-input_border input-bg">
        <span class="type-span input-dropdown input-span">Тип объекта</span>
        <!-- <input class="section-help_search__form-item " type="text" name="type"> -->
        <div class="dropdown">
            <button class="dropbtn">Выберите категорию</button>
            <div class="dropdown-content">
				<?php
				echo '<a class="dropdown__item" href="#" data-category="8" >Все объекты</a>';
				if ( $categories ) {
					foreach ( $categories as $cat ) {
						echo '<a class="dropdown__item" href="#" data-category="' . $cat->cat_ID . '" >' . $cat->name . '</a>';
					}
				}

				?>
            </div>
        </div>
        <input id="category-input" type="text" name="category" value="<?php echo get_search_query() ?>" hidden>
    </div>
    <div class="section-help_search__form-input input-bg">
                            <span class="price-span_img">
                                <span class="price-span input-span">Цена до</span>
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/p.png" alt="m">
                            </span>
        <input class="section-help_search__form-item " type="text" name="price" value="">
    </div>
    <div class="section-help_search__form-input input-bg">
                            <span class="plaza-span_img">
                                <span class="plaza-span input-span">Площадь до</span>
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/м.png" alt="m">
                            </span>
        <input class="section-help_search__form-item " type="text" name="square">
    </div>
    <button type="submit" class="section-help_search__btn">Найти</button>
</form>