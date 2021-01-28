<?php
/**
 * Template name: We are
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







  <?php if(have_rows('flexible_fields')):
        while (have_rows('flexible_fields')) : the_row(); 
        $size = 'full';
        ?>




        <?php if( get_row_layout() == 'componente_12'): 

          $we_are_title = get_sub_field('we_are_title');
          $hand_font = get_sub_field('hand_font');
          $panel_image = get_sub_field('panel_image');
          $scroll_for_more = get_sub_field('scroll_for_more');
          $margem_bottom = get_sub_field('margem_bottom');
          $margem_topo = get_sub_field('margem_topo');
          $big_icon = get_sub_field('big_icon');
          $background_color = get_sub_field('background_color');

          
          
        ?>

        <style>

.quotes,
.component6 h3{
  color:<?php echo $background_color; ?> !important;
}
        </style>

          <section class="component12" style="background-color:<?php echo $background_color; ?>">
              <div class="container">
                <div class="panel-title">
                  <div class="panel-title-left wow fadeInUp" data-wow-duration=".7s">
                    <h1><?php echo $we_are_title; ?></h1>
                  </div>
                  <h1 class="hand"><?php echo $hand_font; ?></h1>
                </div>
                <div class="panel-image">
                            <?php if( $panel_image ) {
                                  echo wp_get_attachment_image( $panel_image, $size );
                            } ?>  
                </div>
              </div>
              <div class="scroll-block">
                <h6><?php echo $scroll_for_more; ?></h6>
                <img src="<?php echo get_template_directory_uri(); ?>/dist/img/scroll.svg">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/img/wave.svg">
              </div>
              <div class="cover-arrow">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/img/cover-arrow.svg">
              </div>
          </section>

          <style>
            .component12 {
              background-image: url(<?php echo $big_icon; ?>);
            }
          </style>



        <?php endif; ?>





        <?php if( get_row_layout() == 'componente_8'): 
      $titulo_componente = get_sub_field('titulo_componente');
      $quote = get_sub_field('quote');
      $nome_quote = get_sub_field('nome_quote');
      $in_quote = get_sub_field('in_quote');
      $image_bgss =  get_sub_field('image_bgss');

    ?>

      <section class="component8">
          <div class="container text-center">
            <div class="titleblur wow fadeInUp" data-wow-duration=".7s">
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
              <p class="quotes">“</p>
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




    <?php if( get_row_layout() == 'componente_2'): 
      $overview = get_sub_field('overview');
      $titulo = get_sub_field('titulo');
      $conteudo_texto = get_sub_field('conteudo_texto');
      $read_more = get_sub_field('read_more');
      $read_more_url = get_sub_field('read_more_url');

      $margem_bottom = get_sub_field('margem_bottom');
      $margem_topo = get_sub_field('margem_topo');
      $imagem_sep1 = get_sub_field('imagem_sep1');

      



    ?>


        <section class="container-fluid component2 single" data-midnight="dark" style="<?php if( $margem_topo ) {?>padding-top:<?php echo $margem_topo; } ?>;<?php if( $margem_bottom ) {?>padding-bottom:<?php echo $margem_bottom; } ?>">

          <div class="row">

          <div class="titleblur wow fadeInUp" data-wow-duration=".7s">
            <?php if( $overview ) { ?>
              <h6 class=" text-center"><?php echo $overview; ?></h6>
            <?php } ?>
            <?php if( $titulo ) { ?>
              <h2 class="col-sm-6 offset-sm-3 text-center"><?php echo $titulo; ?></h2>
            <?php } ?>
            <?php if( $overview ) { ?>
            <?php } else {?>


   
              
              
              <img src="<?php echo $imagem_sep1; ?>">
            <?php } ?>

          </div>
          <p class="col-sm-8 offset-sm-2 text-center wow fadeInUp" data-wow-duration=".7s"><?php echo $conteudo_texto; ?></p>  
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



   


      <?php if( get_row_layout() == 'componente_14'): 
        $titulo_seccao = get_sub_field('titulo_seccao');
        $imagem_titulo = get_sub_field('imagem_titulo');
        $categoria_slider_ = get_sub_field('categoria_slider_');
        $margem_bottom2 = get_sub_field('margem_bottom2');
        $margem_topo2 = get_sub_field('margem_top2');
  
      ?>





        <section class="component14" data-midnight="dark" style="<?php if( $margem_topo2 ) {?>padding-top:<?php echo $margem_topo2; } ?>;<?php if( $margem_bottom2 ) {?>padding-bottom:<?php echo $margem_bottom2; } ?>">
          <div class="container text-center">
            <div class="titleblur wow fadeInUp" data-wow-duration=".7s">
              <h2><?php echo $titulo_seccao; ?></h2>
              <?php if( $imagem_titulo ) {
                            echo wp_get_attachment_image( $imagem_titulo, $size );
                      } 
              ?>
            </div>
          </div>

          <div id="cases-carousel" class="slider">
            
            <?php 
            $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'orderby' => 'date',
            'tax_query' => array(
                array(
                    'taxonomy' => 'category',
                    'field' => 'id',
                    'terms' => $categoria_slider_
                )
            )
            );
            $related_items = new WP_Query( $args );
            // loop over query
            if ($related_items->have_posts()) :
            while ( $related_items->have_posts() ) : $related_items->the_post();
            ?>

              <div class="slider-item">
                <div class="row d-flex justify-content-start">
                  <div class="col-md-4 slider-text">
                    <h6 class="overline"><?php the_field('categoria_visivel_sliders'); ?></h6>
                    <h4><?php the_title(); ?></h4>
                    <small>
                    <?php the_excerpt(); ?>
                    </small>
                    <a class="readbtn d-flex align-items-start justify-content-start" href="<?php the_permalink(); ?>">
                        <h6 class="underline"><?php the_field('read_more', 'option'); ?></h6>
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/union.svg" alt="">
                    </a>
                  </div>
                  <div class=" col-md-6 slider-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/img/photos/slideshow1.png">
                  </div>
                </div>
              </div>

            <?php
            endwhile;
            endif;
            wp_reset_postdata();
            ?>
            
            

          </div>
        </section>


      <?php endif; ?>



      <?php if( get_row_layout() == 'componente_19'): 
            
        $titulo_separador = get_sub_field('titulo_separador');
        $imagem_separador = get_sub_field('imagem_separador');

        ?>   




        
        

            <section class="component19" data-midnight="dark">

              <div class="container">
              <div class="titleblur wow fadeInUp" data-wow-duration=".7s">

                <?php if( $titulo_separador ) {

                  ?><h2 class="col-sm-6 offset-sm-3 text-center"><?php echo $titulo_separador; ?></h2>

                    <?php if( $imagem_separador ) {
                                echo wp_get_attachment_image( $imagem_separador, $size );
                    } ?>

                  <?php

                } ?>




              </div>
              </div>
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

                <div class="row blog-list-right">
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
                
                <div class="row blog-list-left">
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





    <?php if( get_row_layout() == 'componente_6'): 
      $title2 = get_sub_field('title2');
      $subtitle = get_sub_field('subtitle');
      $title2_texto = get_sub_field('title2_texto');
      $panel_image2 = get_sub_field('panel_image');
      $imagePoster = get_sub_field('imagePoster');
    ?>

      <section class="component6" data-midnight="dark">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 wow fadeInUp" data-wow-duration=".7s">
                <h3><?php echo $title2; ?></h3>
                <h6><?php echo $subtitle; ?></h6>
                <p><?php echo $title2_texto; ?></p>
              </div>
              <div class="col-lg-8 wow fadeInUp" data-wow-duration=".7s">
                <div class="video-wrap">
                  <video src="<?php echo $panel_image2; ?>" poster="<?php echo $imagePoster; ?>">
                  </video>
                  <div class="playpause"></div>
                </div>
              </div>
            </div>
          </div>
      </section>

    <?php endif; ?>






      <?php if( get_row_layout() == 'componente_13'): 
        $titulo_13 = get_sub_field('titulo_13');
        $imagem_sep2 = get_sub_field('imagem_sep2');

        
      ?>





<section class="component13" data-midnight="dark">
    <div class="container text-center">
      <div class="titleblur wow fadeInUp" data-wow-duration=".7s">
        <h2><?php echo $titulo_13; ?></h2>
        <img src="<?php echo $imagem_sep2; ?> ">
      </div>
    </div>
    <div id="stats-carousel" class="slider">





      <?php

      if( have_rows('slider_repeater_13') ):
          while( have_rows('slider_repeater_13') ) : the_row();

              $titulo_slider_13 = get_sub_field('titulo_slider_13');
              $arrow_image = get_sub_field('arrow_image');
              $icon1 = get_sub_field('icon1');
              $icon2 = get_sub_field('icon2');
              $numero_1 = get_sub_field('numero_1');
              $avoided_text = get_sub_field('avoided_text');
              $underline = get_sub_field('underline');
              $imagens_lado_esquerdo_ou_direito = get_sub_field('imagens_lado_esquerdo_ou_direito');
              $cor_slider_ = get_sub_field('cor_slider_');
              $size = 'full'; // (thumbnail, medium, large, full or custom size)
              ?>

                <div class="slider-item">

                <?php 
                if( $imagens_lado_esquerdo_ou_direito  == "esquerdo"){
                  ?>
                  <div class="info-block" style="background-color:<?php echo $cor_slider_; ?>">
                    <div class="container-fluid  text-center">
                      <h2><?php echo $titulo_slider_13; ?></h2>
                      <img class="statsarrow" src="<?php echo $arrow_image; ?>">
                      <div class="row d-flex justify-content-center align-items-center info-block-data">
                      <?php 
                        if( $icon1 ) {
                            echo wp_get_attachment_image( $icon1, $size );
                        }

                        if( $icon2 ) {
                          echo wp_get_attachment_image( $icon2, $size );
                      }
                      ?>
                    
                        <h2><?php echo $numero_1; ?></h2>
                        <h3><?php echo $avoided_text; ?><br>
                            <span class="underline">
                            <?php echo $underline; ?>
                            </span>
                        </h3>
                      </div>
                    </div>
                  </div>

                <?php
                }

                else{
                 ?>
        <div class="info-block" style="background-color:<?php echo $cor_slider_; ?>">
          <div class="container text-center">
            <h2><?php echo $titulo_slider_13; ?></h2>
            <img class="statsarrow" src="<?php echo $arrow_image; ?>">
            <div class="row d-flex justify-content-center align-items-center info-block-data">
              <h2><?php echo $numero_1; ?></h2>
              <div>
                <h3>
                <?php echo $avoided_text; ?>
                  <br>
                  <span class="underline">
                  <?php echo $underline; ?>
                  </span>
                </h3>
              </div>
                        <?php 
                        if( $icon1 ) {
                            echo wp_get_attachment_image( $icon1, $size );
                        }
                        ?>
            </div>
          </div>
        </div>
                 
                 <?php
                }
                ?>






                </div>


          <?php
          endwhile;

      else :
      endif;
      ?>
















    </div>
    <div id="slider-nav">
      <div class="slider-count">

      </div>
    </div>
</section>















    <?php endif; ?>









    <?php endwhile ?>
  <?php endif; ?>











	</main><!-- #main -->

<?php
get_footer();
