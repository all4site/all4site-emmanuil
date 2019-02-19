<?php get_header();?>
<nav class="navtop">
  <div class="logo grid"><img src="https://dummyimage.com/100x50.png" alt=""/></div><?php wp_nav_menu(array(
	'menu'						=>	'Главное',
	'container'				=>	'div',
	'container_class' =>	'wrapmenu grid',
	'menu_class'			=>	'menu grid',
	'menu_id'					=>	'menu'
));?>
  <div class="social grid"><a href="#!" class="icon">
      <div class="fas fa-headphones"></div></a><a href="#!" class="icon">
      <div class="fab fa-youtube"></div></a><a href="#!" class="icon">
      <div class="fab fa-twitter"></div></a><a href="#!" class="icon">
      <div class="fab fa-facebook-f"></div></a><a href="#!" class="icon">
      <div class="donate grid"></div></a></div>
  <div class="btn grid"><a href="#!">поддержать</a></div>
</nav>
<section class="contnent">
  <div class="wrap">
    <h1>test</h1>
  </div>
</section><?php get_footer();?>