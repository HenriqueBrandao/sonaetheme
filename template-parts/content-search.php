<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sonaeTheme
 */

?>

<div class="col-sm-6 col-md-4 blog-grid-item">
            <div class="imageWrapper">
              <?php the_post_thumbnail('large'); ?>

            </div>
            <!-- <img class="blog-grid-item-img" src="<?php echo get_template_directory_uri(); ?>/dist/img/photos/blog.png"> -->
            <div class="blog-grid-item-text">
              <h6><?php the_title(); ?></h6>
              <small>
              <?php the_excerpt(); ?>
              </small>
            </div>
            <a class="blog-grid-item-more" href="<?php the_permalink(); ?>">
              <h6 class="caption"><?php the_field('read_more', 'option'); ?></h6>
              <img src="<?php echo get_template_directory_uri(); ?>/dist/img/union.svg" alt="">
            </a>
          </div>