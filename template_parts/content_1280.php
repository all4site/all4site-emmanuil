<!-- START CONTENT 1280 -->
<div class="content-article wh-1280">
	<?php
		$currentPage = get_query_var('paged');
		$postperpage = 8;
		$wp_query = new WP_Query(array(
			'post_type'      					=> 'post',
			'posts_per_page' 					=> $postperpage,
			'paged'          					=> $currentPage,
			//- 'cat'											=> array('-2, -8')
		));
		while ($wp_query->have_posts()): $wp_query->the_post();
			if( has_post_thumbnail() ) {
			?>
				<div class="content-article-inner">
					<div class="img">
						<a href="<?php the_permalink();?>">
							<?php the_post_thumbnail();?>
						</a>
					</div>
					<a class='text' href="<?php the_permalink();?>">
						<span><?php $theTitle = esc_html (get_the_title());echo wp_trim_words($theTitle, 6, '...');?>
						</span>
					</a>
				</div>
			<?php } else{?>
				<div class="content-article-inner">
					<?php echo '<img src="'.get_template_directory_uri().'/img/noImg.png" />';?>
						<a class='text' href="<?php the_permalink();?>">
							<span><?php $theTitle = esc_html (get_the_title());echo wp_trim_words($theTitle, 6, '...');?>
							</span>
						</a>
				</div>
		<?php } wp_reset_postdata(); endwhile; ?>
</div>
<!-- END CONTENT 1280 -->
