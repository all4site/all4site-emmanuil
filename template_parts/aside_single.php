<section class="aside aside_singlepage">

		<div class="category">
			<h4>Рекомендуемые</h4>
				<div class="singlepage_category  aside_inner">
				<?php
					global $post;
					$categories = get_the_category();
					$count = count($categories);
					$currentPage = get_query_var('paged');
					$postperpage = 5;
					$cat = $categories[$count - 1]->cat_ID;

					$wp_query = new WP_Query(array(
							'post_type'					=> 'post',
							'posts_per_page'		=> $postperpage,
							'paged' 						=> $currentPage,
							'cat'								=> $cat,
							'meta_key' 					=> 'views',
							'orderby' 					=> 'meta_value_num',
					));
				while ($wp_query->have_posts()): $wp_query->the_post();?>
					<div class="singlepage_categoty_inner">
						<p><?php the_title(); ?></p>
						<a href="<?php the_permalink(); ?>" class="more"><span>подробнее...</span></a>
					</div>

			<?php wp_reset_postdata();endwhile;?>
				</div>
		</div>
<div class="rcomended">
		<h4>Популярные</h4>
		<div class="categiry-inner-recommend aside_inner">
			<?php
				$posts = get_posts(array(
				'numberposts' => 5,
				'meta_key' => 'views',
				'orderby' => 'meta_value_num',
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

</section>
