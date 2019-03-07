<section class=aside>
	<div class="rcomended">
		<h4>Рекомендуемые</h4>
		<div class="categiry-inner-recommend aside_inner">
			<?php
				$posts = get_posts(array(
				'category_name' => 'recommend',
				'numberposts' => 3,
				));
				foreach ($posts as $post) {setup_postdata($post);
			?>
			<div class="recomendedBloc">
				<p><?php the_title(); ?></p>
				<a href="<?php the_permalink(); ?>" class="more"><span>подробнее...</span></a>
			</div>

		<?php
				}
				wp_reset_postdata();
			?>
		</div>
	</div>
		<div class="popular">
			<h4>Попоулярные</h4>
				<div class="categiry-inner-popular aside_inner">
					<?php
						$posts = get_posts(array(
								'numberposts' => 5,
								'meta_key' => 'views',
								'orderby' => 'meta_value_num',
						));
						foreach ($posts as $post) {setup_postdata($post);
					?>
						<div class="img-thumb">
						<a href="<?php the_permalink();?>">
						<?php the_post_thumbnail(); ?>
						</a>
						</div>
						<span>
							<a href="<?php the_permalink();?>">
							<?php $theTitle = esc_html(get_the_title()); echo mb_strimwidth($theTitle, 0,50, '...');?>
							</a>
						</span>
					<?php } wp_reset_postdata(); ?>

				</div>
		</div>
		<div class="category">
			<h4>Рубрики</h4>
				<div class="categiry-inner aside_inner">
				<?php
							$categories = get_categories(array(
							'orderby' 	=> 'name',
							'order' 		=> 'DESC',
							'number' 		=> 10,
							'orderby' 	=> 'count'
							));
						foreach ($categories as $category) {
						?>
							<span>
								<a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?>
								</a>
							</span>
							<span class="count"><?php echo $category->category_count; ?></span>
						<?php } ?>
				</div>
		</div>

</section>