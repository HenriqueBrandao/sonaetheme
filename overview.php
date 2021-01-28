<?php
/**
 * Template name: Overview
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
    <?php while (have_rows('flexible_fields')) : the_row(); 
    $size = 'full';
    ?>


    <?php if( get_row_layout() == 'componente_5'): 
      $over = get_sub_field('over');
      $title = get_sub_field('title');
      $hand_font = get_sub_field('hand_font');
      $panel_image = get_sub_field('panel_image');
      $scroll = get_sub_field('scroll');
    ?>

      <section class="component5">
          <div class="container-fluid">
            <div class="panel-title wow fadeInUp" data-wow-duration=".7s">
              <div style="position:relative;" class="">
              <div class="cover-arrow2">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/img/cover-arrow.svg">
              </div>
                <h6 class="overline"><?php echo $over; ?></h6>
                <h1><?php echo $title; ?></h1>
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
            <h6><?php echo $scroll; ?></h6>
            <img src="<?php echo get_template_directory_uri(); ?>/dist/img/scroll.svg">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/img/wave.svg">
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
                  <video class="video" src="<?php echo $panel_image2; ?>" poster="<?php echo $imagePoster; ?>">
                  </video>
                  <div class="playpause"></div>
                </div>
              </div>
            </div>
          </div>
      </section>

    <?php endif; ?>



    <?php if( get_row_layout() == 'componente_7'): 
      $profile_image = get_sub_field('profile_image');
      $profile_caption = get_sub_field('profile_caption');
      $overline = get_sub_field('overline');
      $small = get_sub_field('small');
      $main_text_overline = get_sub_field('main_text_overline');
      $main_text_title = get_sub_field('main_text_title');
      $main_text = get_sub_field('main_text');
      $imagem_lado_direito = get_sub_field('imagem_lado_direito');
    ?>


      <section class="component7 <?php 
        if($imagem_lado_direito){
          echo 'componente9'; 
        }
      ?>" data-midnight="dark">
          <div class="container">
            <div class="row d-flex align-items-start">
              <div class="col-md-4 profile wow fadeInUp" data-wow-duration=".7s">
                <div class="alignFixOve">
                <img class="profile-picture" src="<?php echo $profile_image; ?>" alt="<?php echo $profile_caption; ?>">
                <div class="profile-info">
                  <small class="caption"><?php echo $profile_caption; ?></small>
                  <h6 class="overline"><?php echo $overline; ?></h6>
                  <small><?php echo $small; ?></small>
                </div>
                 </div>

              </div>
              <div class="col-md-8 maintext wow fadeInUp" data-wow-duration=".7s">
                <h6 class="overline"><?php echo $main_text_overline; ?></h6>
                <h2><?php echo $main_text_title; ?></h2>
                <p><?php echo $main_text; ?></p>
              </div>

            </div>
          </div>

      </section>

    <?php endif; ?>



    <?php if( get_row_layout() == 'componente_8'): 
      $titulo_componente = get_sub_field('titulo_componente');
      $quote = get_sub_field('quote');
      $nome_quote = get_sub_field('nome_quote');
      $in_quote = get_sub_field('in_quote');
      $image_bgss =  get_sub_field('image_bgss');

    ?>

      <section class="component8" data-midnight="dark">
          <div class="container text-center">
            <div class="titleblur wow fadeInUp" data-wow-duration=".7s">
              <h3 class="hand"><?php echo $titulo_componente ?></h3>
              <?php 
              if( $image_bgss ) {
                  echo wp_get_attachment_image( $image_bgss, $size );
              } 
              ?>
              <img src="<?php echo get_template_directory_uri(); ?>/dist/img/blur5.svg">
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





    <?php if( get_row_layout() == 'componente_10'): 
      $componente_title = get_sub_field('componente_title');
      $imagem_titulo = get_sub_field('imagem_titulo');
    ?>

     


      <section class="component10">
          <div class="container text-center" data-midnight="dark">
            <div class="blackSep overview">
            </div>
            <div class="titleblur wow fadeInUp" data-wow-duration=".7s">
              <div>
                <h2><?php echo $componente_title ?></h2>
                  <?php 
                    if( $imagem_titulo ) {
                        echo wp_get_attachment_image( $imagem_titulo, $size );
                    } 
                    ?>
              </div>
            </div>
          </div>
          <div class="figures">
            <div class="container-fluid">
              <div class="row no-gutters">



                      <?php
                      if( have_rows('repeater_') ): 
                      while( have_rows('repeater_') ) : the_row();

                        $numero = get_sub_field('numero');
                        $descricao = get_sub_field('descricao');
                        $imagem_23231 = get_sub_field('imagem_23231');

                        ?>

                        <div class="col-lg-6 figures-block">
                        <img src="<?php echo $imagem_23231 ?>">

                          <h2 class="counter"><?php echo $numero ?></h2>
                          <h6><?php echo $descricao ?></h6>
                        </div>


                      <?php
                      endwhile;
                      else :
                      endif;
                      ?>



              </div>
              <div class="row">

              </div>
            </div>


            <div class="container charts">
              <div class="row">



                      <?php
                      if( have_rows('charts') ): 
                      while( have_rows('charts') ) : the_row();

                        $percentagem = get_sub_field('percentagem');
                        $percentagem_chart = 100 - get_sub_field('percentagem');


                        $desscricao_chart = get_sub_field('desscricao_chart');

                        ?>


                        <div class="col-lg-4 charts-item wow">
                          <svg class="circle-chart" viewbox="0 0 70 70" width="200" height="200" xmlns="http://www.w3.org/2000/svg">
                            <circle class="circle-chart__background" stroke="#ffffff" stroke-width="19" fill="none" cx="35" cy="35" r="15.91549431" />
                            <circle class="circle-chart__circle" stroke="#66E8E9" stroke-width="19" stroke-dasharray="<?php echo $percentagem_chart ?>,100" stroke-linecap="butt" fill="none" cx="35" cy="35" r="15.91549431" />
                          </svg>
                          <div>
                            <h1><?php echo $percentagem ?>%</h1>
                            <h6><?php echo $desscricao_chart ?></h6>
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

      </section>







    <?php endif; ?>








    <?php if( get_row_layout() == 'componente_11'): 
      $bloco_direito = get_sub_field('bloco_direito');
      $titulo_bloco = get_sub_field('titulo_bloco');
      $conteudo_bloco = get_sub_field('conteudo_bloco');

    ?>




<section class="component11" data-midnight="dark">
    <div class="container">
      <div class="row">
        <div class="col-md-6 block-left">
          <div class="repeaWra">



          <?php

          if( have_rows('seccao_repeater') ):


              while( have_rows('seccao_repeater') ) : the_row();
                  $titulo_sec = get_sub_field('titulo_sec');
                  $imagem_titulo = get_sub_field('imagem_titulo');
                  $caption = get_sub_field('caption');
              ?>


            <div class="titleblur wow fadeInUp" data-wow-duration=".7s">

              <h3 class="hand"><?php echo $titulo_sec ?></h3>
              <?php 
                    if( $imagem_titulo ) {
                        echo wp_get_attachment_image( $imagem_titulo, $size );
                    } 
                    ?>
              <small class="caption"><?php echo $caption ?></small>
            </div>

              <?php
              endwhile;
          else :
          endif;

          ?>






          </div>
        </div>
        <div class="col-md-6 block-right wow fadeInUp" data-wow-duration=".7s">
          <h6 class="overline"><?php echo $bloco_direito ?></h6>
          <h2><?php echo $titulo_bloco ?></h2>
          <p><?php echo $conteudo_bloco ?></p>
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
