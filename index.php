<?php get_header();?>

<?php  include 'template_parts/menu.php';?>

<!-- START CONTENT -->
	<section class="contnent wrap">
			<div class="content-inner">
				<h2>главные новости</h2>
	<?php include 'template_parts/content_1920.php'; ?>
	<?php include 'template_parts/content_1280.php'; ?>
	<!-- START PAGINATION -->
				<div class="pagination">
					<div class="pagination-inner"><?php all4site_pagination();?></div>
				</div>
		<!-- END PAGINATION -->
			</div>
	<!-- STRT ASIDE -->
	<?php include 'template_parts/aside.php'; ?>
		<!-- END ASIDE -->
	</section>
<!-- END CONTENT -->

<?php get_footer();?>