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
} else {
	$price = 0;
}

if ( ! empty( $_GET['square'] ) ) {
	$square = $_GET['square'];
} else {
	$square = 0;
}
?>

    <section class="search-category">
        <div class="container">
			<?php get_search_form(); ?>
            <div class="sorting">
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
            <div class="card-items__flex">

				<?php
				if ( ! empty( $price ) && empty( $square ) ) {
					$args = [
						'post_type'     => 'post',
						'cat'           => $category,
						'post_per_page' => - 1,
						'meta_query'    => array(
							array(
								'key'     => 'property-price',
								'type'    => 'numeric',
								'value'   => $price,
								'compare' => '<',
							),
						),
					];
				} else if ( ! empty( $price ) && ! empty( $square ) ) {
					$args = [
						'post_type'     => 'post',
						'cat'           => $category,
						'post_per_page' => - 1,
						'meta_query'    => array(
							array(
								'key'     => 'property-price',
								'type'    => 'numeric',
								'value'   => $price,
								'compare' => '<',
							),
							array(
								'key'     => 'property-square',
								'value'   => $square,
								'compare' => '<',
							),
						),
					];
				} else if ( empty( $price ) && ! empty( $square ) ) {
					$args = [
						'post_type'     => 'post',
						'cat'           => $category,
						'post_per_page' => - 1,
						'meta_query'    => array(

							array(
								'key'     => 'property-square',
								'value'   => $square,
								'compare' => '<',
							),
						),
					];
				} else {
					$args = [
						'post_type'     => 'post',
						'cat'           => $category,
						'post_per_page' => - 1,
					];
				}

				$search_query = new WP_Query( $args );
				if ( $search_query->have_posts() ) {
					while ( $search_query->have_posts() ) :$search_query->the_post();

						?>
                        <div class="card-items">
                            <div class="card-items-thumb">
								<?php echo get_the_post_thumbnail( $post->ID, 'medium' ); ?>
                            </div>
                            <div class="card-items_text">
                                <h5 class="card-items_text__title"><?php echo $post->post_title; ?></h5>
                                <p class="card-items_text__about"><?php echo the_excerpt(); ?></p>
                            </div>
                            <div class="card-items_about">
								<?php
								$obj_square  = carbon_get_post_meta( $post->ID, 'property-square' );
								$obj_squares = carbon_get_post_meta( $post->ID, 'property-squares' );
								$obj_price   = carbon_get_post_meta( $post->ID, 'property-price' );

								if ( $obj_square ) {
									echo '<div class="card-items_about__num"><span class="card-items_about__num-title">Площадь помещения (в м2): </span>' . $obj_square . '</div>';
								}
								if ( $obj_squares ) {
									echo '<div class="card-items_about__num"><span class="card-items_about__num-title">Земля (в сотках): </span>' . $obj_squares . '</div>';
								}
								if ( $obj_price ) {
									echo '<div class="card-items_about__num"><span class="card-items_about__num-title">Цена: </span>' . $obj_price . 'р</div>';
								}
								?>
                            </div>
                        </div>
					<?php endwhile; ?>
				<?php } else {
					echo 'Ничего не найдено';
				} ?>


            </div>
        </div>
    </section>


<?php
get_footer();
?>