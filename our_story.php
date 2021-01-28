<?php
/**
 * Template name: Our Story
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

	<main id="primary" class="site-main">
  
  



<?php if(have_rows('flexible_fields')): ?>
    <?php while (have_rows('flexible_fields')) : the_row(); ?>







    <?php if( get_row_layout() == 'componente_15'): 
      $out__stories = get_sub_field('out__stories');
      $caption = get_sub_field('caption');
      $bg_color = get_sub_field('bg_color');
    ?>

      <section class="component15" style="background-color:<?php echo $bg_color ?>">
          <div class="panel-title wow fadeInUp" data-wow-duration=".7s">
            <h6 class="overline"><?php echo $out__stories ?></h6>
            <h2><?php the_title(); ?></h2>
            <h6 class="caption"><?php echo $caption ?></h6>
          </div>
          <div class="panel-image">
            <?php 
              the_post_thumbnail( 'full' );
            ?>
          </div>
          <div class="scroll-block">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/scroll.svg">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/wave.svg">
          </div>
      </section>

    <?php endif; ?>








<?php if( get_row_layout() == 'componente_2'): 
      $overview = get_sub_field('overview');
      $titulo = get_sub_field('titulo');
      $conteudo_texto = get_sub_field('conteudo_texto');
      $read_more = get_sub_field('read_more');
      $read_more_url = get_sub_field('read_more_url');
    ?>


        <section class="container-fluid component2 single wow fadeInUp" data-wow-duration=".7s" data-midnight="dark">
          <div class="row">

          <div class="titleblur">
            <?php if( $overview ) { ?>
              <h6 class=" text-center"><?php echo $overview; ?></h6>
            <?php } ?>
            <?php if( $titulo ) { ?>
              <h2 class=" text-center"><?php echo $titulo; ?></h2>
            <?php } ?>
            <?php if( $overview ) { ?>
            <?php } else {?>
              <img src="<?php echo get_template_directory_uri(); ?>/dist/img/titleblur2.svg">
            <?php } ?>

          </div>
          <p class="col-sm-8 offset-sm-2 text-center"><?php echo $conteudo_texto; ?></p>  
          </div>

          <?php 
              if( $read_more ) {
                  ?>
                <div class="row">
                    <a class="readbtn offset-5 text-center d-flex align-items-start justify-content-around" href="<?php echo $read_more_url; ?>">
                        <h6 class="underline"><?php echo $read_more; ?></h6>

                       <?php if( $read_more_url ) { ?>

                        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/union.svg" alt="">

                        <?php } ?>
                    </a>
                </div>

              <?php } 
          ?>




        </section>

    <?php endif; ?>


    <?php endwhile ?>
  <?php endif; ?>







<section class="component18" data-midnight="dark">
  <div class="container">

    <div class="blog-header">
      <div class="row">
        <div class="blog-header-title">
          
        </div>


        <div class="blog-header-filter filtro1 wow fadeInUp" data-wow-duration=".7s">
            <h6><?php the_field('filterby', 'option'); ?></h6>


            <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
            <div class="imgCat"></div>

            <ul class="categoryfilter" name="categoryfilter">
                <?php
                  if( $terms = get_terms( array(
                    'taxonomy' => 'category', // to make it simple I use default categories
                    'orderby' => 'name'
                    // 'parent' => '4'
                ) ) ) : 
                  // if categories exist, display the dropdown
                  echo '<select id="seleFilter" name="categoryfilter">';
                  foreach ( $terms as $term ) :


                    $image = get_field('imagem_filtro', 'category_' . $term->term_id . '' );



                    echo '<option image_cat="'. $image . '" value="' . $term->term_id . '">' . $term->name . '</option>'; // ID of the category as an option value
                  endforeach;
                  echo '</select>';
                endif;
                ?>

                <input type="hidden" name="action" value="myfilter">
              </ul>
            </form>
        </div>
      </div>
    </div>




<div id="response" style="width:100%;float:left;">
<div class="row blog-grid" >

    <?php 
       $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => -1, 
        'orderby' => 'date',
        /* 'tax_query' => [
          [
              'taxonomy' => 'category',
              'field'    => 'term_id',
             // 'terms'    => '4',
          ], 
      ],
*/
        );
        $related_items = new WP_Query( $args );
        if ($related_items->have_posts()) :
        while ( $related_items->have_posts() ) : $related_items->the_post();
        ?>

          <div class="col-sm-6 col-md-4 blog-grid-item wow fadeInUp" data-wow-duration=".7s">
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


        <?php
        endwhile;
        endif;
        wp_reset_postdata();
        ?>
      </div>
    </div>



      </div>

</section>




<!--

<section class="component18" data-midnight="dark">
  <div class="container">

    <div class="blog-header">
      <div class="row">
        <div class="blog-header-title">
        <?php the_field('better_planet', 'option'); ?>
        </div>


        <div class="blog-header-filter filtro2 wow fadeInUp" data-wow-duration=".7s">
            <h6><?php the_field('filterby', 'option'); ?></h6>


            <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter2">
              <ul class="categoryfilter2" name="categoryfilter">
                <div class="imgCat2"></div>
                <?php
                  if( $terms = get_terms( array(
                    'taxonomy' => 'category', // to make it simple I use default categories
                    'orderby' => 'name',
                    'parent' => '3'
                ) ) ) : 
                  // if categories exist, display the dropdown
                  echo '<select id="seleFilter2" name="categoryfilter">';
                  foreach ( $terms as $term ) :


                    $image = get_field('imagem_filtro', 'category_' . $term->term_id . '' );

                    

                    echo '<option image_cat="'. $image . '" value="' . $term->term_id . '">' . $term->name . '</option>'; // ID of the category as an option value
                  endforeach;
                  echo '</select>';
                endif;
                ?>

                <input type="hidden" name="action" value="myfilter">
              </ul>
            </form>
        </div>
        </div>
        </div>




<div id="response2" style="width:100%;float:left;">
<div class="row blog-grid">

    <?php 
       $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 6, 
        'orderby' => 'date',
        'tax_query' => [
          [
              'taxonomy' => 'category',
              'field'    => 'term_id',
              'terms'    => '3',
          ],
        ],
        );
        $related_items = new WP_Query( $args );
        if ($related_items->have_posts()) :
        while ( $related_items->have_posts() ) : $related_items->the_post();
        ?>

          <div class="col-sm-6 col-md-4 blog-grid-item wow fadeInUp" data-wow-duration=".7s">
            <div class="imageWrapper">
              <?php the_post_thumbnail('large'); ?>

            </div>
             <img class="blog-grid-item-img" src="<?php echo get_template_directory_uri(); ?>/dist/img/photos/blog.png"> 
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


        <?php
        endwhile;
        endif;
        wp_reset_postdata();
        ?>
      </div>
    </div>



      </div>
    </div>



  </div>
</section>

-->











	</main><!-- #main --> 





<?php
get_footer();
?>




<script>
(function($) {
	




  jQuery(function($){
  

    var optionInicial = $('.filtro1 option:selected').attr('image_cat');
    var optionInicia2 = $('.filtro2 option:selected').attr('image_cat');

    $('.imgCat').html('<img src="'+ optionInicial +'"></img>');
    $('.imgCat2').html('<img src="'+ optionInicia2 +'"></img>');




  $('#seleFilter').change(function(){
    var filter = $('#filter');
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

  $('#seleFilter2').change(function(){
    var filter = $('#filter2');


    
    var option2 = $('option:selected', this).attr('image_cat');
    $('.imgCat2').html('<img src="'+ option2 +'">');



    $.ajax({
      url:filter.attr('action'),
      data:filter.serialize(), // form data
      type:filter.attr('method'), // POST
      beforeSend:function(xhr){
      },
      success:function(data){
        $('#response2').html(data); // insert data
      }
    });

    return false;
  });


  




});

	
})( jQuery );





</script>
