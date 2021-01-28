<?php
/**
 * Template name: Homepage
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

    <?php if( get_row_layout() == 'componente_1'): 

      $titulo = get_sub_field('texto');
      $conteudo = get_sub_field('conteudo');
      $scroll_for_more = get_sub_field('scroll_for_more');
      $bg_color = get_sub_field('bg_color');
      $video_mp4 = get_sub_field('video_mp4');
      $video_webm = get_sub_field('video_webm');

      
      

    ?>

        <section class="component1 row justify-content-center" style="background-color:<?php echo $bg_color ?>; min-height:100vh;">

          <video id="videoHome" width="100%" height="100%" autoplay muted style="z-index:900;position:absolute;object-fit:cover;top: 0;">
            <source src="<?php echo  $video_mp4;?>" type="video/mp4">
            <source src="<?php echo  $video_webm;?>" type="video/webm">
          Your browser does not support the video tag.
          </video>
                  
      

          
          <div class="main-block container-fluid">
              <h1 class="wow fadeInUp" data-wow-duration=".7s">
              <?php echo $titulo; ?>
              </h1>
              <h4 class="col-sm-5 fadeInHome">
              <?php echo $conteudo; ?>
              </h4>
              <img class="fadeInHome " src="<?php echo get_template_directory_uri(); ?>/dist/img/seta-branco.svg">
            </div>




            <div class="play-block">
              <div class="play-block-content">
                <h3 class="playintro"><span>►</span> PLAY INTRO</h3>
                <h4>Discover our sustainability strategy</h4>
              </div>
            </div>


            <div class="scroll-block">
            <h6><?php echo $scroll_for_more ?></h6>
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


        <section class="container-fluid component2 wow fadeInUp" data-wow-duration=".7s" data-midnight="dark" >
          <div class="row">
              <h6 class="col-sm-2 offset-sm-5 text-center"><?php echo $overview; ?></h6>
              <h2 class="col-sm-6 offset-sm-3 text-center"><?php echo $titulo; ?></h2>
              <p class="col-sm-8 offset-sm-2 text-center"><?php echo $conteudo_texto; ?></p>
          </div>


          <div class="row">
              <a class="readbtn offset-5 text-center d-flex align-items-start justify-content-around" href="<?php echo $read_more_url; ?>">
                  <h6 class="underline"><?php echo $read_more; ?></h6>
                  <img src="<?php echo get_template_directory_uri(); ?>/dist/img/union.svg" alt="">
              </a>
          </div>

        </section>

    <?php endif; ?>




    <?php if( get_row_layout() == 'componente_3'): 
          $approach = get_sub_field('approach');
          $five_action_axes = get_sub_field('five_action_axes');

        ?>

        <section class="component3">
            <div class="container text-center " data-midnight="dark">
              <h6 class="overline"><?php echo $approach; ?></h6>
              <div class="titleblur wow fadeInUp" data-wow-duration=".7s">
                <h2><?php echo $five_action_axes; ?></h2>




                
                <img src="<?php echo get_template_directory_uri(); ?>/dist/img/titleblur1.svg">
              </div>
            </div>

            <div class="axes-row">

            <?php
            if( have_rows('axes_items') ):
                while( have_rows('axes_items') ) : the_row();

                    $imagem = get_sub_field('imagem');
                    $link_hover = get_sub_field('link_hover');
                    $imagem_hover = get_sub_field('imagem_hover');
                    $size = 'full'; // (thumbnail, medium, large, full or custom size)

                    ?>

                    <div class="axes-item">
                      <?php if( $imagem ) {
                            echo wp_get_attachment_image( $imagem, $size );
                      } 
                      if( $link_hover ) { ?>
                        <a href="<?php echo $link_hover ?>" class="axes-item-over">
                          <?php if( $imagem_hover ) {
                              echo wp_get_attachment_image( $imagem_hover, $size );
                          } ?>
                        </a>
                      <?php } ?>

                    </div>


                    <?php
                endwhile;
            else :
            endif;
            ?>


            </div>
        </section>



    <?php endif; ?>





    <?php if( get_row_layout() == 'componente_4'): 

          $calculator = get_sub_field('calculator');
          $carbonfoot = get_sub_field('carbonfoot');
          $descricaocalc = get_sub_field('descricaocalc');
          $website_carbon_foo = get_sub_field('website_carbon_foo');
          $carbon_neutral = get_sub_field('carbon_neutral');
          $for_the_planet = get_sub_field('for_the_planet');

    ?>


        <section class="component4"  data-midnight="dark">
            <div class="container-fluid text-center extraPaddingRight">
              <h6 class="overline"><?php echo $calculator; ?></h6>
              <div class="titleblur lined wow fadeInUp" data-wow-duration=".7s">
                <div class="unline">
                  <h2><?php echo $carbonfoot; ?></h2>
                  <img src="<?php echo get_template_directory_uri(); ?>/dist/img/titleblur2.svg">
                </div>
                <span class="line"></span>
              </div>
              <p><?php echo $descricaocalc; ?></p>
            </div>
            <div class="container-fluid extraPaddingRight footprint wow fadeInUp" data-wow-duration=".7s">
                <div>
                  <h6><?php echo $website_carbon_foo; ?></h6>
                  <div class="footprint1">
                    <h4>00.00</h4>
                    <div class="footprint1-block">
                      <img src="<?php echo get_template_directory_uri(); ?>/dist/img/cloud.svg">
                      <h5>Ton CO<span>2</span></h5>
                    </div>
                  </div>
                </div>
                <div class="footprint2">
                  <div>
                    <h1>100</h1>
                    <h6>1 tree = 10 Ton CO<span>2</span></h6>
                  </div>
                  <div class="footprint2-block">
                    <h3 class="hand">trees</h3>
                    <h3>planted <br><span class="underline">ipsum sit</span></h3>
                  </div>
                  <img src="<?php echo get_template_directory_uri(); ?>/dist/img/tree.svg">
                </div>
            </div>
            <div class=" container-fluid extraPaddingRight">
              <div class="visitors">
                <div class="row">
                  <div class="col-md-4 visitors-item">
                    <h6>Number of visitors</h6>
                    <img class="visitor-icon" src="<?php echo get_template_directory_uri(); ?>/dist/img/visitors1.svg">
                    <img class="visitor-blur" src="<?php echo get_template_directory_uri(); ?>/dist/img/blur1.svg">
                    <h2>5739</h2>
                  </div>
                  <div class="col-md-4 visitors-item">
                    <h6>time of visit</h6>
                    <img class="visitor-icon" src="<?php echo get_template_directory_uri(); ?>/dist/img/visitors2.svg">
                    <img class="visitor-blur" src="<?php echo get_template_directory_uri(); ?>/dist/img/blur1.svg">
                    <h2>06:30”</h2>
                  </div>
                  <div class="col-md-4 visitors-item">
                    <h6>carbon emissions generated</h6>
                    <img class="visitor-icon" src="<?php echo get_template_directory_uri(); ?>/dist/img/visitors3.svg">
                    <img class="visitor-blur" src="<?php echo get_template_directory_uri(); ?>/dist/img/blur1.svg">
                    <h2>0.00 <span>Ton CO<span>2</span></span></h2>
                  </div>
                </div>

              </div>

            </div>
            <div class="container planet">
              <h3 class="wow fadeInUp" data-wow-duration=".7s"><?php echo $carbon_neutral; ?></h3>
              <h2 class="wow fadeInUp" data-wow-duration=".7s"><?php echo $for_the_planet; ?></h2>
            </div>
        </section>





   <?php endif; ?>


















  <?php endwhile ?>
 <?php endif; ?>









	</main><!-- #main -->

<?php
get_footer();
