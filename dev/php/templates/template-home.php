<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
			<div class="Slider">
	        <?php
	            $args = array(
	                'post_type' => 'slides',
	                'posts_per_page'=>999
	            );
	            $slides = new WP_Query( $args );
	            $num = count($slides);
	            $counter = 0;
	            if( $slides->have_posts() ) {
	                while( $slides->have_posts() ) {
	                    $slides->the_post();
	                    $counter++;
	                    ?>
	                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
	                          $image_url = $image[0];
	                    ?>
	                    <div class="slide" style="">
	                        <img src="<?php echo $image_url; ?>" />
	                    </div>
	                    <?php
	                }
	            }
	        ?>
	    	</div>
<div class="backgroundheaderklein"></div>
	<div class="u-gridContainer">
		<div class="u-gridRow">
			<div class="u-gridCol9">&nbsp;</div>
			<div class="u-gridCol3">
				<div class="slidermenu">
					
				</div>
			</div>
		</div>
	</div>
<div class="backgroundcontent"></div>
<div class="backgroundfooter"><div>
	<div class="u-gridContainer">
		<div class="u-gridRow">
			<div class="u-gridCol9">
				<div class="tylerthecreator">
					<div class="thecontent">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<article class="Content Content--home" id="post-<?php the_ID(); ?>">
								<b><?php the_title(); ?></b>
								<div>
									<?php the_content(); ?>
									<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
								</div>
							</article>
						<?php endwhile; endif; ?>
					</div>
				</div>
			</div>
			<div class="u-gridCol3">
				<div>
					<a href="">
						<div class="telebutton">
							<span class="textwhite">06 25 39 32 45</span>
						</div>
					</a>
				</div>
				<div>
					<a href="">
						<div class="mailbutton">
							<span class="textwhite">Mail ons</span>
						</div>
					</a>
				</div>
				<div class="footerlogo">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/jmfooter.png">
					<span>lottestraat 14 2021 TG Haarlem</span>
				</div>
			</div>
		</div>
	</div> 
</div>
<?php get_footer(); ?>
 