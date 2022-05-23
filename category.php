<?php

$taxonomy = 'category';

$category = get_queried_object();
$number = $category->term_id;

get_header();

?>

    <section class="search-category">
        <div class="container">
	        <?php
	        if ( function_exists('yoast_breadcrumb') ) {
		        yoast_breadcrumb( '<ul class="nav-one-item" id="breadcrumbs">','</ul>' );
	        }
	        ?>
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

				$args = [
					'post_type'      => 'property',
					'cat'            => $number,
					'post_status'    => 'publish',
					'posts_per_page' => - 1,
				];


				$search_query = new WP_Query( $args );
				if ( $search_query->have_posts() ) {
					while ( $search_query->have_posts() ) :$search_query->the_post();
						get_template_part( 'template-parts/search-card' );

					endwhile;
				} else {
					echo 'Ничего не найдено';
				} ?>
            </div>
        </div>
    </section>


<?php
get_footer();
?>