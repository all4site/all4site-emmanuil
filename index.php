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
    <h1>test</h1>
  </div>
</section><?php get_footer();?>