<?php
	global $wp_query;
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	
	get_header(); 
	$term = get_queried_object();
?>
<div id="universal">
		<?php
        if(have_posts()) :
            while(have_posts()) :
            the_post();
        ?>
            <div class="wrapper">
                <div class="heading">
                    <div class="col2">
                        <div class="titleBox">
                            <h2>Kana,<br /><?php echo $term->name; ?> Portfolio.<br />
<br />
</h2>
                        </div><!-- END .titleBox -->
                    </div><!-- END .col2 -->
                    <div class="col2">
                        <div class="titleBox">
                            <div class="entry">
                                <p>We believe trust comes from measurable results. Here's some examples on how brands have successfully made it.</p>
                            </div>
                        </div><!-- END .titleBox -->
                    </div><!-- END .col2 -->
                </div><!-- END .heading -->
            </div><!-- END .wrapper -->
            <div id="section-clients">
                <div class="wrapper">
                	<div class="grid">
                    <?php 
						$args = array(
							'post_type' => 'game',
							'game_cat' => $term->slug
						);
						$query = new WP_Query( $args );
					?>
                    <?php $queryObject = new WP_Query( 'showposts=1000' );
                    // The Loop!
                    if ($queryObject->have_posts()) { ?>
                        <?php while ($queryObject->have_posts()) { $queryObject->the_post(); ?>
                            <?php $game_summary = get_post_meta( $post->ID, '_cmb_game_summary', true );
                                  $game_url = get_post_meta( $post->ID, '_cmb_game_url', true );
                                  $game_thumbnail = get_post_meta( $post->ID, '_cmb_game_thumbnail', true );
                             ?>
                        <div class="smallThumb2">
                            <a class="effectGame" href="<?php the_permalink(); ?>">
                            	<img src="<?php echo $game_thumbnail; ?>" alt="<?php the_title(); ?>" />
                                <div class="gameCaption">
                               		<h3 class="gameTitle"><?php the_title(); ?></h3>
                                </div>			
                           </a>
                        </div><!-- END .smallThumb2 -->
                        <?php } ?>
                    <?php } else { ?>   
                    <?php } ?>
                    </div><!-- END .grid -->
                </div><!-- END .wrapper -->
    		</div><!-- END #section-peoples -->
			<?php the_content(); ?>
         <?php endwhile; ?>
        <?php endif; ?>
</div><!-- END #universal -->


<?php get_footer(); ?>