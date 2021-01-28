<?php
/**
 * Template name: Media Gallery
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sonaeTheme
 */

get_header();
?>
		<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/featherlight.min.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/featherlight.gallery.min.css" />
    


	<main id="primary" class="site-main">
  
<!-- 


  <section class="component18">
    <div class="container">
    <div class="row blog-grid " >

<?php
                  if( have_rows('media_gallery') ): 
                  while( have_rows('media_gallery') ) : the_row();

                    $imagem = get_sub_field('imagem');

                    ?>

  
                        

                      <div class="col-sm-6 col-md-4 blog-grid-item">
                        <div class="imageWrapper">
                        <?php
                          if( !empty( $imagem ) ): ?>

                          <a class="gallery" href="<?php echo esc_url($imagem['url']); ?>"><img alt="<?php echo esc_attr($imagem['alt']); ?>" src="<?php echo esc_url($imagem['url']); ?>" /></a>

                          <?php endif; ?>

                        </div>
            
                      </div>


                  <?php
                  endwhile;
                  else :
                  endif;
                  ?>




  </div>

    </div>

  </section>
  -->







  <section class="component18" data-midnight="dark">
  <div class="container">

    <div class="blog-header">
      <div class="row">
        <div class="blog-header-title">
         Gallery
        </div>


        <div class="blog-header-filter filtro1 wow fadeInUp" data-wow-duration=".7s">
            <h6><?php the_field('filterby', 'option'); ?></h6>
            <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filterMedia">
            <div class="imgCat"></div>

            <ul class="categoryfilter" name="categoryfilter">
                <?php
                  if( $terms = get_terms( array(
                    'taxonomy' => 'media_category', // to make it simple I use default categories
                    'orderby' => 'name',
                ) ) ) : 
                  echo '<select id="seleFilterMedia" name="categoryfilter">';
                  foreach ( $terms as $term ) :

                    $image = get_field('imagem_filtro', 'category_' . $term->term_id . '' );



                    echo '<option image_cat="'. $image . '" value="' . $term->term_id . '">' . $term->name . '</option>'; // ID of the category as an option value
                  endforeach;
                  echo '</select>';
                endif;
                ?>

                <input type="hidden" name="action" value="myfilterMedia">
              </ul>
            </form>
        </div>
      </div>
    </div>




<div id="response" style="width:100%;float:left;">
<div class="row blog-grid" >

    <?php 
       $args = array(
        'post_type' => 'media_page',
        'post_status' => 'publish',
        'posts_per_page' => 6, 
        'orderby' => 'date',

        );
        $related_items = new WP_Query( $args );
        if ($related_items->have_posts()) :
        while ( $related_items->have_posts() ) : $related_items->the_post();

        $featured_img_url2 = get_the_post_thumbnail_url($postID, 'full  ');


        ?>

          <div class="col-sm-6 col-md-4 blog-grid-item wow fadeInUp" data-wow-duration=".7s">
            <div class="imageWrapper">
              <a download href="<?php the_field('media_file'); ?>" class="gallery"><?php the_post_thumbnail('large'); ?></a>

            </div>
            <!-- <img class="blog-grid-item-img" src="<?php echo get_template_directory_uri(); ?>/dist/img/photos/blog.png"> -->
            <div class="blog-grid-item-text">
              <h6><?php the_title(); ?></h6>
              <small>
              <?php the_excerpt(); ?>
              </small>
            </div>
            <a class="blog-grid-item-more" download href="<?php the_field('media_file'); ?>">
              <h6 class="caption">Download</h6>
              <img src="<?php echo get_template_directory_uri(); ?>/dist/img/union.svg" alt="">
            </a>
          </div>


        <?php
        endwhile;
        endif;
        wp_reset_postdata();
        ?>
      </div>
    </div>



      </div>

</section>










	</main><!-- #main -->





<?php
get_footer();
?>


<script>


/* 
(function($) {
	






				$('.gallery').featherlightGallery({
					gallery: {
						fadeIn: 300,
						fadeOut: 300
					},
					openSpeed:    300,
					closeSpeed:   300
				});


	
})( jQuery );
*/



(function($) {
	




  jQuery(function($){
  




  $('#seleFilterMedia').change(function(){
    var filter = $('#filterMedia');
    var option = $('option:selected', this).attr('image_cat');
    $('.imgCat').html('<img src="'+ option +'"></img>');
    $.ajax({
      url:filter.attr('action'),
      data:filter.serialize(), // form data
      type:filter.attr('method'), // POST
      beforeSend:function(xhr){
      },
      success:function(data){
        $('#response').html(data); // insert data
      }
    });

    return false;
  });




  




});

	
})( jQuery );





</script>