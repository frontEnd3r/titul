<?php

/*
 * Template name: Поиск
*    Search Result Page
*/

get_header();


if ( ! empty( $_GET['category'] ) ) {
	$category = $_GET['category'];
}

if ( ! empty( $_GET['category'] ) ) {
	$price = $_GET['price'];
	$price = (int) $price;
}

if ( ! empty( $_GET['square'] ) ) {
	$square = $_GET['square'];
}
?>

    <section class="search-category">
        <div class="container">
			<?php get_search_form(); ?>
            <div class="sorting" style="display: none;">
                <span class="sorting-title">Сортировать:</span>
                <div class="sorting-items">
                    <span class="sorting-items_txt">по цене</span>
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/arrow-down.png" alt="arrow">
                </div>
                <ul class="dropdown-cost">
                    <li>по площади</li>
                    <li>по новизне</li>
                    <li>не придумал</li>
                </ul>
            </div>
            <div class="card-items__flex" style="padding-top: 100px">

				<?php
				if ( ! empty( $square ) ) {
					$args = [
						'post_type'     => 'property',
						'cat'           => $category,
						'post_per_page' => - 1,
						'meta_query'    => array(

							array(
								'key'     => 'property-square',
								'value'   => $square,
								'compare' => '<',
								'type'    => 'NUMERIC',
							),
						),
					];
				} else {
					$args = [
						'post_type'     => 'property',
						'cat'           => $category,
						'post_per_page' => - 1,
					];
				}

				$search_query = new WP_Query( $args );
				if ( $search_query->have_posts() ) {
					$counter = 0;
					while ( $search_query->have_posts() ) :$search_query->the_post();
						$current_prop_price = str_replace( " ", "", carbon_get_post_meta( $post->ID, 'property-price' ) );
						$current_prop_price = (int) $current_prop_price;
						if ( empty( $price ) ) {
							get_template_part( 'template-parts/search-card' );
							$counter += 1;
						} else if ( ! empty( $price ) && $current_prop_price < $price ) {
							get_template_part( 'template-parts/search-card' );
							$counter += 1;
						}
						?>
					<?php endwhile;
					if ( $counter === 0 ) {
						echo 'Ничего не найдено';
					}
				} else {
					echo 'Ничего не найдено';
				} ?>
            </div>
        </div>
    </section>


<?php
get_footer();
?>