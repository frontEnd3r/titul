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
