<!-- START BOTTOM BLOCK -->
<div class="content-bottom">
	<div class="block-one">
		<h4>БОГ / РЕЛИГИЯ</h4>
		<div class="block-inner">
			<?php
				$posts = get_posts(array(
				'category_name' => 'religion',
				'numberposts' => 1,
				));
				foreach ($posts as $post) {setup_postdata($post);
			?>
			<div class="content-bottom-img">
					<a href="<?php the_permalink(); ?>">
						<div class="img">
							<?php the_post_thumbnail(); ?>

						</div>
					<span>
						<?php the_title(); ?>
					</span>
				</a>
			</div>

		<?php	}	wp_reset_postdata();?>
			<?php
				$posts = get_posts(array(
				'category_name' => 'religion',
				'numberposts' => 4,
				));
				foreach ($posts as $post) {setup_postdata($post);
			?>
			<div class="content-bottom-txt">
				<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
				</a>
			</div>

		<?php
				}
				wp_reset_postdata();
			?>
		</div>
	</div>
	<div class="block-two">
		<h4>СЕМЬЯ / ВОСПИТАНИЕ</h4>
		<div class="block-inner">
			<?php
				$posts = get_posts(array(
				'category_name' => 'religion',
				'numberposts' => 1,
				));
				foreach ($posts as $post) {setup_postdata($post);
			?>
		<div class="content-bottom-img">
					<a href="<?php the_permalink(); ?>">
						<div class="img">
							<?php the_post_thumbnail(); ?>

						</div>
					<span>
						<?php the_title(); ?>
					</span>
				</a>
			</div>

		<?php
				}
				wp_reset_postdata();
			?>
			<?php
				$posts = get_posts(array(
				'category_name' => 'religion',
				'numberposts' => 4,
				));
				foreach ($posts as $post) {setup_postdata($post);
			?>
			<div class="content-bottom-txt">
				<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
				</a>
			</div>

		<?php
				}
				wp_reset_postdata();
			?>
		</div>
	</div>
	<div class="block-three">
		<h4>КУЛЬТУРА</h4>
		<div class="block-inner">
			<?php
				$posts = get_posts(array(
				'category_name' => 'religion',
				'numberposts' => 1,
				));
				foreach ($posts as $post) {setup_postdata($post);
			?>
	<div class="content-bottom-img">
					<a href="<?php the_permalink(); ?>">
						<div class="img">
							<?php the_post_thumbnail(); ?>

						</div>
					<span>
						<?php the_title(); ?>
					</span>
				</a>
			</div>

		<?php
				}
				wp_reset_postdata();
			?>
			<?php
				$posts = get_posts(array(
				'category_name' => 'religion',
				'numberposts' => 4,
				));
				foreach ($posts as $post) {setup_postdata($post);
			?>
			<div class="content-bottom-txt">
				<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
				</a>
			</div>

		<?php
				}
				wp_reset_postdata();
			?>
		</div>
	</div>
</div>
<!-- END BOTTOM BLOCK -->