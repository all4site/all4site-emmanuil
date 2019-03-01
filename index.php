<?php get_header();?>
<nav class="navwrapper">
  <div class="wrap">
    <div class="navtop">
      <div class="logo grid"><img src="<?php echo get_template_directory_uri()?>/img/cbn-blue-logo.png" alt=""/></div><?php wp_nav_menu(array(
	'menu'						=>	'Главное',
	'container'				=>	'div',
	'container_class' =>	'wrapmenu grid',
	'menu_class'			=>	'menu grid',
	'menu_id'					=>	'menu'
));?>
      <div class="socialwrap grid">
        <div class="social grid"><a href="#!" class="icon">
            <div class="fas fa-headphones"></div></a><a href="#!" class="icon">
            <div class="fab fa-youtube"></div></a><a href="#!" class="icon">
            <div class="fab fa-twitter"></div></a><a href="#!" class="icon">
            <div class="fab fa-facebook-f"></div></a></div>
      </div>
      <div class="donate grid">
        <div class="btn grid"><a href="#!">поддержать</a></div>
      </div>
    </div>
    <div class="navtop-small">
      <div class="logo grid"><img src="<?php echo get_template_directory_uri()?>/img/cbn-blue-logo.png" alt=""/></div>
      <div class="cross">
        <div class="hamburger hamburger--slider">
          <div class="hamburger-box">
            <div class="hamburger-inner"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="nav-top-hide">
    <div class="navtop-small-inside"><?php wp_nav_menu(array(
	'menu'						=>	'Главное',
	'container'				=>	'div',
	'container_class' =>	'wrapmenu grid',
	'menu_class'			=>	'menu grid',
	'menu_id'					=>	'menu',
));?>
      <div class="socialwrap grid">
        <div class="social grid"><a href="#!" class="icon">
            <div class="fas fa-headphones"></div></a><a href="#!" class="icon">
            <div class="fab fa-youtube"></div></a><a href="#!" class="icon">
            <div class="fab fa-twitter"></div></a><a href="#!" class="icon">
            <div class="fab fa-facebook-f"></div></a></div>
      </div>
      <div class="donate grid">
        <div class="btn grid"><a href="#!">поддержать</a></div>
      </div>
    </div>
  </div>
</nav>
<section class="contnent">
  <div class="wrap">
    <div class="content-inner">
      <h2>главные новости</h2>
			<div class="content-article">
			<?php
			$currentPage = get_query_var('paged');
			$postperpage = 9;
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
          <div class="img"><a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a></div><a href="<?php the_permalink();?>"><span><?php $theTitle = esc_html (get_the_title());
echo wp_trim_words($theTitle, 6, '...');?></span></a>
        </div><?php }
else{?>
        <div class="content-article-inner"><?php echo '<img src="'.get_template_directory_uri().'/img/noImg.png" />';?><a href="<?php the_permalink();?>"><span><?php $theTitle = esc_html (get_the_title());
echo wp_trim_words($theTitle, 6, '...');?></span></a>
        </div><?php }?><?php wp_reset_postdata();
endwhile;

?>
      </div>
      <div class="pagination">
        <div class="pagination-inner"><?php all4site_pagination();?>
        </div>
      </div>
    </div>
  </div>
</section><?php get_footer();?>