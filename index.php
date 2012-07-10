<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

get_header(); ?>

<div id="main" class="aligncenter" role="main">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

      <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
        <header>
          <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
          <time datetime="<?php the_time('Y-m-d')?>"><?php the_time('F jS, Y') ?></time>
          <span class="author">by <?php the_author() ?></span>
        </header>
        <?php the_content('Read the rest of this entry &raquo;'); ?>
        <footer>
          <?php the_tags('Tags: ', ', ', '<br />'); ?> 
          Posted in <?php the_category(', ') ?>
          | <?php edit_post_link('Edit', '', ' | '); ?>
          <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
        </footer>
      </article>

    <?php endwhile; ?>

<?php $args = array(
  'depth'        => 0,
  'show_date'    => '',
  'date_format'  => get_option('date_format'),
  'child_of'     => 0,
  'exclude'      => '',
  'include'      => '',
  'title_li'     => __(''),
  'echo'         => 1,
  'authors'      => '',
  'sort_column'  => 'menu_order, post_title',
  'link_before'  => '',
  'link_after'   => '',
  'walker'       => '',
  'post_type'    => 'page',
        'post_status'  => 'publish' 
); ?>
<?php wp_list_pages($args); ?> 



    <nav>
      <div><?php next_posts_link('&laquo; Older Entries') ?></div>
      <div><?php previous_posts_link('Newer Entries &raquo;') ?></div>
    </nav>

  <?php else : ?>

    <h2>Not Found</h2>
    <p>Sorry, but you are looking for something that isn't here.</p>
    <?php get_search_form(); ?>

  <?php endif; ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>


