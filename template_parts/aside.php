<section class=aside>
	<div class="container">
		<div class="category">
			<h4>Рубрики</h4>
				<div class="categiry-inner">

				<?php
							$categories = get_categories(array(
							'orderby' 	=> 'name',
							'order' 		=> 'DESC',
							'number' 		=> 20,
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
		<div class="popular"></div>
		<div class="rcomended"></div>
	</div>

</section>