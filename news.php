<?php
//template name: news
// Template post type: page
get_header();?>
<?php include 'template_parts/menu.php' ?>
<div class="wrap">
  <div class="contnent">
    <div class="content_news-article">
			<h2>Недавно добавленные</h2>
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
          <div class="content_news-article-inner">
            <div class="img">
              <?php the_post_thumbnail();?>
            </div>
            <div class="content_news-article-text">
              <h4><?php the_title();?></h4>
              <p>
                <?php $theContent = get_the_content();echo wp_trim_words($theContent, 30, '...'); ?>
              </p>
              <a href="<?php the_permalink() ?>">подробнее...</a>
            </div>
          </div>
      <?php } else{?>
          <div class="content_news-article-inner">
            <div class="img">
              <?php echo '<img src="'.get_template_directory_uri().'/img/noImg.png" />';?>
            </div>
            <div class="content_news-article-text">
              <h4><?php $theTitle = esc_html (get_the_title());echo wp_trim_words($theTitle, 6, '...');?></h4>
              <p>
                <?php $theContent = get_the_content();echo wp_trim_words($theContent, 30, '...'); ?>
              </p>
              <a href="<?php the_permalink() ?>">подробнее...</a>
            </div>
          </div>
      <?php } wp_reset_postdata(); endwhile; ?>
    </div>
    <?php include 'template_parts/aside_news.php' ?>
  </div>
</div>

  <?php get_footer();?>
