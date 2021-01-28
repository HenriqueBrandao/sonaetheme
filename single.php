<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package sonaeTheme
 */

get_header();
?>

	<main id="primary" class="site-main">


  <?php if(have_rows('flexible_fields')): ?>
    <?php while (have_rows('flexible_fields')) : the_row(); 
        $size = 'full'; 
    ?>


  





<?php if( get_row_layout() == 'componente_17'): 

$overline = get_sub_field('overline');
$titulo_componente_17 = get_sub_field('titulo_componente_17');
$subtitulo_componente = get_sub_field('subtitulo_componente');
$subtitulo_componente2 = get_sub_field('subtitulo_componente2');
$imagem_componente = get_sub_field('imagem_componente');
$backgroundcolor = get_sub_field('background-color');
$video_file = get_sub_field('video_file');


?>



  <section class="component17" style="background-color:<?php echo $backgroundcolor; ?>">
  <div class="panel-title wow fadeInUp" data-wow-duration=".7s">
  <h6 class="overline"><?php echo $overline; ?></h6>
  <h2><?php echo $titulo_componente_17; ?></h2>
  <p>
    <span class="underline">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </span>
  </p>
  <div class="panel-block">
    <h6><span><?php echo $subtitulo_componente; ?></span></h6>
    <small><?php echo $subtitulo_componente2; ?></small>
  </div>
  </div>


  <div class="panel-image ">
    <div class="video-wrap">
      <video class="video" src="<?php echo $video_file; ?>" poster="<?php echo esc_url($imagem_componente['url']); ?>">
      </video>
      <div class="playpause"></div>
    </div>
  </div>

  
  </section>



<?php endif; ?>









    <?php if( get_row_layout() == 'componente_16'): 
      $goals = get_sub_field('2025_goals');
      $margin_top3 = get_sub_field('margin_top3');
      $margin_bottom3 = get_sub_field('margin_bottom3');
      ?>


      <section class="component16" style="<?php if( $margin_top3 ) {?>padding-top:<?php echo $margin_top3; } ?>;<?php if( $margin_bottom3 ) {?>padding-bottom:<?php echo $margin_bottom3; } ?>">
        <div class="info-block bg-green">
          <div class="container text-center">
            <h2><?php echo $goals ?></h2>
            <div class="charts">
              <div class="row">

                <?php
                if( have_rows('item') ): 
                while( have_rows('item') ) : the_row();

                $numero_percentagem = get_sub_field('numero_percentagem');
                $descricao_2 = get_sub_field('descricao_2');
                $percentagem_chart = 100 - get_sub_field('numero_percentagem');

                ?>


                <div class="col-lg-4 charts-item  wow fadeInUp" data-wow-duration=".7s">
                <svg class="circle-chart" viewbox="0 0 70 70" width="200" height="200" xmlns="http://www.w3.org/2000/svg">
                            <circle class="circle-chart__background" stroke="#ffffff" stroke-width="19" fill="none" cx="35" cy="35" r="15.91549431" />
                            <circle class="circle-chart__circle" stroke="#66E8E9" stroke-width="19" stroke-dasharray="<?php echo $percentagem_chart ?>,100" stroke-linecap="butt" fill="none" cx="35" cy="35" r="15.91549431" />
                          </svg>
                  <div>
                    <h1><?php echo $numero_percentagem ?>%</h1>
                    <h6><?php echo $descricao_2 ?></h6>
                  </div>
                </div>



                <?php
                endwhile;
                else :
                endif;
                ?>





              </div>
            </div>
          </div>
        </div>

      </section>










<?php endif; ?>



























    <?php if( get_row_layout() == 'componente_2'): 
      $overview = get_sub_field('overview');
      $titulo = get_sub_field('titulo');
      $conteudo_texto = get_sub_field('conteudo_texto');
      $read_more = get_sub_field('read_more');
      $read_more_url = get_sub_field('read_more_url');
      $imagem_separador = get_sub_field('imagem_separador');

      

      $margin_top = get_sub_field('margin_top');
      $margin_bottom = get_sub_field('margin_bottom');

      
    ?>


        <section data-midnight="dark" class="container-fluid component2 single" style="<?php if( $margin_top ) {?>padding-top:<?php echo $margin_top; } ?>;<?php if( $margin_bottom ) {?>padding-bottom:<?php echo $margin_bottom; } ?>">
          <div class="row  wow fadeInUp" data-wow-duration=".7s">

          <div class="titleblur">
            <?php if( $overview ) { ?>
              <h6 class=" text-center"><?php echo $overview; ?></h6>
            <?php } ?>
            <?php if( $titulo ) { ?>
              <h2 class="col-sm-6 offset-sm-3 text-center"><?php echo $titulo; ?></h2>
            <?php } ?>
            <?php if( $overview ) { ?>
            <?php } else {?>
              <?php 
              if( $imagem_separador ) {
                  echo wp_get_attachment_image( $imagem_separador, $size );
              } 
              ?>
            <?php } ?>

          </div>
          <p class="col-sm-8 offset-sm-2 text-center"><?php echo $conteudo_texto; ?></p>  
          </div>

          <?php 
              if( $read_more ) {
                 


                if($read_more = ' '){
                  echo  '<div class="blackSep single2"></div>';
                } else{
                ?>
                                <div class="row">
                                    <a class="readbtn offset-5 text-center d-flex align-items-start justify-content-around" href="<?php echo $read_more_url; ?>">
                                        <h6 class="underline"><?php echo $read_more; ?></h6>

                                      <?php if( $read_more_url ) { ?>

                                        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/union.svg" alt="">

                                        <?php } ?>
                                    </a>
                                </div>
                <?php
                }

                ?>


              <?php } 
              else{
                echo '<div class="blackSep single"></div>';
              }
          ?>




        </section>

    <?php endif; ?>






    <?php if( get_row_layout() == 'componente_15'): 
      $out__stories = get_sub_field('out__stories');
      $caption = get_sub_field('caption');
      $bg_color = get_sub_field('bg_color');
    ?>

      <section class="component15" style="background-color:<?php echo $bg_color ?>">
          <div class="panel-title  wow fadeInUp" data-wow-duration=".7s">
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








    <?php if( get_row_layout() == 'componente_8'): 
      $titulo_componente = get_sub_field('titulo_componente');
      $quote = get_sub_field('quote');
      $nome_quote = get_sub_field('nome_quote');
      $in_quote = get_sub_field('in_quote');
      $image_bgss =  get_sub_field('image_bgss');
      $cor_quote =  get_sub_field('cor_quote');

      
      $margin_top2 = get_sub_field('margin_topop');
      $margin_bottom2 = get_sub_field('margin_bottompp');


    ?>

      <section class="component8" data-midnight="dark" style="<?php if( $margin_top2 ) {?>padding-top:<?php echo $margin_top2; } ?>;<?php if( $margin_bottom2 ) {?>padding-bottom:<?php echo $margin_bottom2; } ?>">
          <div class="container text-center">
            <div class="titleblur  wow fadeInUp" data-wow-duration=".7s">
              <h3 class="hand"><?php echo $titulo_componente ?></h3>
              <?php 
              if( $image_bgss ) {
                  echo wp_get_attachment_image( $image_bgss, $size );
              } 
              ?>
            </div>
            <?php
            if($quote){
              ?>
              <p class="quotes" <?php if($cor_quote){?>style="color:<?php echo $cor_quote; ?>"<?php }?>>“</p>
              <h5><?php echo $quote ?></h5>
              <div class="footnote">
              <small class="caption"><?php echo $nome_quote ?></small>
              <h6 class="overline"><?php echo $in_quote ?></h6>
            </div>
              <?php
            }
            ?>


          </div>
      </section>





    <?php endif; ?>









          <?php if( get_row_layout() == 'componente_19'): ?>   
            
            



            <section class="component19" data-midnight="dark">
              <div class="container-fluid blog-list">



              <?php
                $i = 1;
                if( have_rows('coluna_conteudo') ): 


                while( have_rows('coluna_conteudo') ) : the_row();

                $imagem_destaque = get_sub_field('imagem_destaque');
                $titulo_2 = get_sub_field('titulo_2');
                $subtitulo = get_sub_field('subtitulo');
                $texto = get_sub_field('texto');
                

                if($i % 2 == 0 ): ?>

                <div class="row blog-list-right  wow fadeInUp" data-wow-duration=".7s">
                  <div class="col-md-5 offset-md-1 blog-list-text">
                  <h4><?php echo $titulo_2; ?></h4>
                  <small><?php echo $subtitulo; ?></small>
                  <p><?php echo $texto; ?></p>

                  </div>
                  <div class="col-md-5 offset-md-1 blog-list-img">
                  <?php if( $imagem_destaque ) {
                            echo wp_get_attachment_image( $imagem_destaque, $size );
                      } ?>                  </div>
                </div>




              <?php else : ?>
                
                <div class="row blog-list-left  wow fadeInUp" data-wow-duration=".7s">
                  <div class="col-md-5 blog-list-img">
                  <?php if( $imagem_destaque ) {
                            echo wp_get_attachment_image( $imagem_destaque, $size );
                      } ?>
                  </div>
                  <div class="col-md-5 offset-md-1 blog-list-text">
                    <h4><?php echo $titulo_2; ?></h4>
                    <small><?php echo $subtitulo; ?></small>
                    <p><?php echo $texto; ?></p>
                  </div>
                </div>

              <?php endif;


                $i++;
                endwhile;
                else :
                endif;
              ?>
















 

              </div>
            </section>


    <?php endif; ?>




    <?php if( get_row_layout() == 'artigos_relacionados'): 
      $titulo_secao12 = get_sub_field('titulo_secao12');
      $descricao_secao232 = get_sub_field('descricao_secao232');
      $imagem_titulo = get_sub_field('imagem_titulo');



    ?>


<section class="component18" data-midnight="dark">
  <div class="container">

  <div class="blackSep singleRelated"></div>
          <div class="titleblur  wow fadeInUp" data-wow-duration=".7s">
              <h2 class="col-sm-6 offset-sm-3 text-center"><?php echo $titulo_secao12; ?></h2>

              <?php 
              if( $imagem_titulo ) {
                  echo wp_get_attachment_image( $imagem_titulo, $size );
              } 
              ?>


          </div>
          <h5 class="text-center relatedTitle"><?php echo $descricao_secao232; ?></h5>  




<div class="row blog-grid singlePst">

<?php 
$custom_taxterms = wp_get_object_terms( $post->ID, 'category', array('fields' => 'ids') );

   $args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 3, 
    'orderby' => 'date',
    'post__not_in' => array ($post->ID),
    'tax_query' => [
      [
          'taxonomy' => 'category',
          'field'    => 'term_id',
          'terms'    => $custom_taxterms,
      ],
    ],
    );
    $related_items = new WP_Query( $args );
    if ($related_items->have_posts()) :
    while ( $related_items->have_posts() ) : $related_items->the_post();
    ?>

      <div class="col-sm-6 col-md-4 blog-grid-item  wow fadeInUp" data-wow-duration=".7s">
        <div class="imageWrapper">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
        </div>
        <!-- <img class="blog-grid-item-img" src="<?php echo get_template_directory_uri(); ?>/dist/img/photos/blog.png"> -->
        <div class="blog-grid-item-text">
          <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
          <small>
          <?php the_excerpt(); ?>
          </small>
        </div>
       
        
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




    <?php endif; ?>








    <?php endwhile ?>
  <?php endif; ?>














 



























	</main><!-- #main -->

<?php
get_footer();
