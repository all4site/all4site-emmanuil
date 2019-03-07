<?php get_header();?>

<?php  include 'template_parts/menu.php';?>

<!-- START CONTENT -->
	<div class="wrap">
		<section class="contnent">
				<div class="content-inner">
					<h2>главные новости</h2>
					<?php include 'template_parts/content_1920.php'; ?>
					<?php include 'template_parts/content_1280.php'; ?>
					<?php include 'template_parts/content_992.php'; ?>
		<!-- START PAGINATION -->
					<div class="pagination">
						<div class="pagination-inner"><?php all4site_pagination();?></div>
					</div>
			<!-- END PAGINATION -->
				</div>
		<!-- STRT ASIDE -->
			<!-- END ASIDE -->
		<?php include 'template_parts/aside.php'; ?>
		<?php include 'template_parts/bottom-block.php'; ?>
		</section>
	</div>
	<section class="volonter">
		<h2>Поддержать деятельность Ассоциации «Еммануил»</h2>
		<a href="#!">
			<button class="btn-donate btn">Помочь финансово</button>
		</a>
		<a href="#!">
			<button class="btn-volonter btn">Волонтерство</button>
		</a>
	</section>
<!-- END CONTENT -->

<?php get_footer();?>