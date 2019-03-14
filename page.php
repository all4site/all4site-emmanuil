<?php get_header();?>
<?php include 'template_parts/menu.php'?>
	<div class="singlepage_thumbnaul" >
		<?php
			if(has_post_thumbnail()){?>

				<div class="singlepage_thumbnaul__img" style="background-image: url(<?php the_post_thumbnail_url();?>);">
				<div class="singlepage_thumbnaul__title">
				<h2><?php the_title(); ?></h2>
				</div>
				</div>
		<?php	} else {?>
			<div class="singlepage_thumbnaul__img" style="background-image: url(<?php echo get_template_directory_uri().'/img/noimg_background.jpg'?>);">
				<div class="singlepage_thumbnaul__title">
				<h2>Упс...Тут нет картинки, надо бы добавить :)</h2>
				</div>
			</div>
		<?php } ?>
	</div>
<div class="wrap">
	<div class="contnent">
		<div class="content_single">
		<?php
		while ( have_posts() ) : the_post();
			the_content();
endwhile;
		?>
		</div>
<?php include 'template_parts/aside_single.php'?>
	</div>
</div>
<?php get_footer();?>