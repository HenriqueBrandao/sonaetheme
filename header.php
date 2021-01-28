<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sonaeTheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">


<?php 
$blue_icon = get_field('blue_icon', 'option');
$green_icon = get_field('green_icon', 'option');
$orange_icon = get_field('orange_icon', 'option');
$yellow_icon_ = get_field('yellow_icon_', 'option');
$purple_icon = get_field('purple_icon', 'option');
$size = 'full'; 
?>





<header id="topnavbar">

  <nav class="navbar container-fluid" >
    <a href="<?php echo get_site_url(); ?>" class="navbar-logo">
      <img src="<?php echo get_template_directory_uri(); ?>/dist/img/logo.svg" alt="">
    </a>


    <form role="search" method="get" id="searchform"
    class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
        <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
        <input type="submit" id="searchsubmit" value="" />
        <img class="imgSearc" src="<?php echo get_template_directory_uri(); ?>/dist/img/search.svg">
  </form>
    <ul class="navbar-links">
      <li class="nav-item"><a class="nav-link" href="<?php the_field('overview_url', 'option'); ?>">
          <h6><?php the_field('overview', 'option'); ?></h6>
        </a>
      </li>
      <li class="nav-item" id="approach-link">
        <a class="nav-link linkOpenApp">
          <h6><?php the_field('ourapproach', 'option'); ?></h6>
        </a>
        <!--INICIO MEGAMENU-->
        <div class="" id="submenu-content">
          <nav class="collapse navbar-collapse d-flex align-items-start justify-content-center">
            <div class="submenu-caption">
              <div class="submenu-caption-block blue">
                <div class="submenu-caption-icon">
                <?php 
                if( $blue_icon ) {
                    echo wp_get_attachment_image( $blue_icon, $size );
                }
                ?>
                </div>
                <div class="submenu-caption-text">
                  <h5><?php the_field('climate_change_', 'option'); ?></h5>
                </div>
              </div>
              <div class="submenu-caption-block green">
                <div class="submenu-caption-icon">
                <?php 
                if( $yellow_icon_ ) {
                    echo wp_get_attachment_image( $green_icon, $size );
                }
                ?>                
                </div>
                <div class="submenu-caption-text">
                  <h5><?php the_field('nature_&_biodiversity', 'option'); ?></h5>
                </div>
              </div>
              <div class="submenu-caption-block orange">
                <div class="submenu-caption-icon">
                <?php 
                if( $orange_icon ) {
                    echo wp_get_attachment_image( $orange_icon, $size );
                }
                ?>                 
                </div>
                <div class="submenu-caption-text">
                  <h5><?php the_field('plastic_reduction_', 'option'); ?></h5>
                </div>
              </div>
              <div class="submenu-caption-block yellow">
                <div class="submenu-caption-icon">
                <?php 
                if( $yellow_icon_ ) {
                    echo wp_get_attachment_image( $yellow_icon_, $size );
                }
                ?> 
              </div>
                <div class="submenu-caption-text">
                  <h5><?php the_field('social_inclusivity', 'option'); ?></h5>
                </div>
              </div>
              <div class="submenu-caption-block purple">
                <div class="submenu-caption-icon">
                <?php 
                if( $purple_icon ) {
                    echo wp_get_attachment_image( $purple_icon, $size );
                }
                ?> 

              </div>
                <div class="submenu-caption-text">
                  <h5><?php the_field('community', 'option'); ?></h5>
                </div>
              </div>
            </div>
            <ul class="planet-menu">
              <!-- <li class="nav-item"><small class="nav-link caption white"><?php the_field('better_planet', 'option'); ?></small></li> -->
              <li data-color="blue" class="nav-item"><a class="nav-link" href="<?php the_field('co2_&_climate_change_url', 'option'); ?>">
                  <h6><?php the_field('co2_&_climate_change', 'option'); ?></h6>
                </a>
              </li>
              <li data-color="green" class="nav-item"><a class="nav-link" href="<?php the_field('nature_&_biodiversity_url', 'option'); ?>">
                  <h6><?php the_field('nature_&_biodiversity2', 'option'); ?></h6>
                </a></li>
              <li data-color="orange" class="nav-item"><a class="nav-link" href="<?php the_field('plastics_url', 'option'); ?>">
                  <h6><?php the_field('plastics', 'option'); ?></h6>
                </a></li>
              <!-- <li class="nav-item"><a class="nav-link" href="<?php the_field('our_stories_url', 'option'); ?>">
                  <small class="caption"><?php the_field('our_stories', 'option'); ?></small>
                </a></li>-->
            </ul>
            <ul class="community-menu">
              <!-- <li class="nav-item"><small class="nav-link caption white"><?php the_field('better_community', 'option'); ?></small></li> -->
              <li data-color="yellow" class="nav-item"><a class="nav-link" href="<?php the_field('social_inclusivity_url', 'option'); ?>">
                  <h6><?php the_field('social_inclusivity2', 'option'); ?></h6>
                </a></li>
              <li data-color="purple" class="nav-item"><a class="nav-link" href="<?php the_field('community_support_url', 'option'); ?>">
                  <h6><?php the_field('community_support', 'option'); ?></h6>
                </a></li>
              <li class="nav-item"><a class="nav-link" href="<?php the_field('our_stories_url', 'option'); ?>">
                  <small class="caption"><?php the_field('our_stories', 'option'); ?></small>
                </a></li>
            </ul>
          </nav>
           <div class="row" id="submenu-footer">
              <ul class="navbar-footer-left">
                <li class="nav-item">
                  <a class="nav-link" href="<?php the_field('contacts_url', 'option'); ?>">
                    <small><?php the_field('contacts', 'option'); ?></small>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php the_field('privacy_policy_url', 'option'); ?>">
                    <small><?php the_field('privacy_policy', 'option'); ?></small>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php the_field('cookies_policy_url', 'option'); ?>">
                    <small><?php the_field('cookies_policy', 'option'); ?></small>
                  </a>
                </li>




              </ul>
              <ul class="navbar-footer-right">
                  <li class="nav-item">
                  <a class="nav-link" href="https://www.linkedin.com/company/sonae/">
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/img/linkedin.svg" alt="linkedin">
                    </a>
                  </li>

                  
                  <li class="nav-item">
                  <a class="nav-link" href="https://www.youtube.com/channel/UC-qfFkxPBmdf1ArdE0kF5HQ">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path style="fill:#FFF;" d="M4.652 0h1.44l.988 3.702.916-3.702h1.454l-1.665 5.505v3.757h-1.431v-3.757l-1.702-5.505zm6.594 2.373c-1.119 0-1.861.74-1.861 1.835v3.349c0 1.204.629 1.831 1.861 1.831 1.022 0 1.826-.683 1.826-1.831v-3.349c0-1.069-.797-1.835-1.826-1.835zm.531 5.127c0 .372-.19.646-.532.646-.351 0-.554-.287-.554-.646v-3.179c0-.374.172-.651.529-.651.39 0 .557.269.557.651v3.179zm4.729-5.07v5.186c-.155.194-.5.512-.747.512-.271 0-.338-.186-.338-.46v-5.238h-1.27v5.71c0 .675.206 1.22.887 1.22.384 0 .918-.2 1.468-.853v.754h1.27v-6.831h-1.27zm2.203 13.858c-.448 0-.541.315-.541.763v.659h1.069v-.66c.001-.44-.092-.762-.528-.762zm-4.703.04c-.084.043-.167.109-.25.198v4.055c.099.106.194.182.287.229.197.1.485.107.619-.067.07-.092.105-.241.105-.449v-3.359c0-.22-.043-.386-.129-.5-.147-.193-.42-.214-.632-.107zm4.827-5.195c-2.604-.177-11.066-.177-13.666 0-2.814.192-3.146 1.892-3.167 6.367.021 4.467.35 6.175 3.167 6.367 2.6.177 11.062.177 13.666 0 2.814-.192 3.146-1.893 3.167-6.367-.021-4.467-.35-6.175-3.167-6.367zm-12.324 10.686h-1.363v-7.54h-1.41v-1.28h4.182v1.28h-1.41v7.54zm4.846 0h-1.21v-.718c-.223.265-.455.467-.696.605-.652.374-1.547.365-1.547-.955v-5.438h1.209v4.988c0 .262.063.438.322.438.236 0 .564-.303.711-.487v-4.939h1.21v6.506zm4.657-1.348c0 .805-.301 1.431-1.106 1.431-.443 0-.812-.162-1.149-.583v.5h-1.221v-8.82h1.221v2.84c.273-.333.644-.608 1.076-.608.886 0 1.18.749 1.18 1.631v3.609zm4.471-1.752h-2.314v1.228c0 .488.042.91.528.91.511 0 .541-.344.541-.91v-.452h1.245v.489c0 1.253-.538 2.013-1.813 2.013-1.155 0-1.746-.842-1.746-2.013v-2.921c0-1.129.746-1.914 1.837-1.914 1.161 0 1.721.738 1.721 1.914v1.656z"/></svg>       
                  </a>           
                  </li>

                  <li class="nav-item">
                  <a class="nav-link" href="https://twitter.com/SONAE">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path style="fill:#FFF;" d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                  </a>
                  </li>

              </ul>
            </div>
        </div>
        <!--FIM MEGAMENU-->
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php the_field('commitments_url', 'option'); ?>">
          <h6><?php the_field('commitments', 'option'); ?></h6>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php the_field('media_gallery_url', 'option'); ?>">
          <h6><?php the_field('media_gallery', 'option'); ?></h6>
        </a>
      </li>
      <li class="nav-item nav-item--download">
        <a class="nav-link" href="<?php the_field('download_file', 'option'); ?>">
          <h6><img src="<?php echo get_template_directory_uri(); ?>/dist/img/download.svg" alt="">
           <?php the_field('download', 'option'); ?></h6>
        </a>
      </li>
    </ul>


    <ul class="navbar-search">
      <li class="nav-item displaynonemobile">
        <a class="nav-link searchOpen" href="#">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/search.svg" alt="">
        </a></li>

      <li class="nav-item mobileLang">
          <?php do_action('wpml_add_language_selector'); ?>
      </li>
    </ul>

  </nav>
  <div class="mobileonly langSele">
    <span class="lang">Language</span>           
    <?php do_action('wpml_add_language_selector'); ?>
    <div class="socialMenu">

      <a href="#" target="_blank">
        <svg width="7" height="16" viewBox="0 0 7 16" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1.51222 3.52159V5.58709H0V8.11159H1.51222V15.6161H4.62066V8.11159H6.70596C6.70596 8.11159 6.90249 6.90109 6.997 5.57659H4.63266V3.85159C4.63266 3.59209 4.97171 3.24559 5.30776 3.24559H7V0.616089H4.69717C1.4357 0.616089 1.51222 3.14359 1.51222 3.52159Z" fill="white"/>
        </svg>
      </a>
      <a href="#" target="_blank">
        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5 0.616089C5.46346 0.616089 5.20788 0.624743 4.40769 0.661089C3.60923 0.697435 3.06404 0.824358 2.58692 1.00955C2.08657 1.198 1.63334 1.49333 1.25885 1.87494C0.877168 2.2496 0.581837 2.70303 0.393462 3.20359C0.208269 3.68013 0.0819231 4.22532 0.045 5.02378C0.00865388 5.82397 0 6.07955 0 8.11609C0 10.1526 0.00865388 10.4082 0.045 11.2084C0.0813462 12.0069 0.208269 12.552 0.393462 13.0286C0.585577 13.5219 0.841731 13.9401 1.25885 14.3572C1.63334 14.7389 2.08657 15.0342 2.58692 15.2226C3.06404 15.4072 3.60923 15.5342 4.40769 15.5711C5.20788 15.6074 5.46346 15.6161 7.5 15.6161C9.53654 15.6161 9.79212 15.6074 10.5923 15.5711C11.3908 15.5347 11.936 15.4078 12.4125 15.2226C12.9131 15.0343 13.3665 14.7389 13.7412 14.3572C14.1228 13.9826 14.4182 13.5292 14.6065 13.0286C14.7912 12.552 14.9181 12.0069 14.955 11.2084C14.9913 10.4082 15 10.1526 15 8.11609C15 6.07955 14.9913 5.82397 14.955 5.02378C14.9187 4.22532 14.7917 3.68013 14.606 3.20359C14.4178 2.70308 14.1226 2.24965 13.7412 1.87494C13.3665 1.49324 12.9131 1.19791 12.4125 1.00955C11.936 0.824935 11.3908 0.698012 10.5923 0.661089C9.79212 0.624743 9.53654 0.616089 7.5 0.616089ZM7.5 1.96724C9.5025 1.96724 9.73962 1.97532 10.5306 2.01109C11.2615 2.04455 11.659 2.16686 11.9233 2.26955C12.2735 2.4057 12.5233 2.56782 12.7858 2.83032C13.0483 3.09282 13.2104 3.34263 13.3465 3.69282C13.4492 3.95705 13.5715 4.35397 13.605 5.08551C13.6408 5.8759 13.6488 6.11359 13.6488 8.11609C13.6488 10.1186 13.6408 10.3557 13.605 11.1467C13.5715 11.8782 13.4492 12.2751 13.3465 12.5394C13.2264 12.8651 13.0348 13.1599 12.7858 13.4019C12.5438 13.6509 12.2491 13.8425 11.9233 13.9626C11.659 14.0653 11.2615 14.1876 10.5306 14.2211C9.74019 14.2569 9.5025 14.2649 7.5 14.2649C5.4975 14.2649 5.25981 14.2569 4.46942 14.2211C3.73788 14.1876 3.34096 14.0653 3.07673 13.9626C2.75094 13.8425 2.45621 13.6509 2.21423 13.4019C1.96525 13.1598 1.77363 12.8651 1.65346 12.5394C1.55077 12.2751 1.42846 11.8782 1.395 11.1467C1.35923 10.3563 1.35115 10.1186 1.35115 8.11609C1.35115 6.11359 1.35923 5.87647 1.395 5.08551C1.42846 4.35397 1.55077 3.95705 1.65346 3.69282C1.78962 3.34263 1.95173 3.09282 2.21423 2.83032C2.45623 2.58131 2.75095 2.38969 3.07673 2.26955C3.34096 2.16686 3.73788 2.04455 4.46942 2.01109C5.25981 1.97532 5.4975 1.96724 7.5 1.96724Z" fill="white"/>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.50038 4.07852C6.42931 4.07852 5.40211 4.504 4.64475 5.26136C3.88739 6.01872 3.46191 7.04591 3.46191 8.11698C3.46191 9.18805 3.88739 10.2152 4.64475 10.9726C5.40211 11.73 6.42931 12.1554 7.50038 12.1554C8.57144 12.1554 9.59864 11.73 10.356 10.9726C11.1134 10.2152 11.5388 9.18805 11.5388 8.11698C11.5388 7.04591 11.1134 6.01872 10.356 5.26136C9.59864 4.504 8.57144 4.07852 7.50038 4.07852ZM7.50038 10.7131C6.81183 10.7131 6.15149 10.4396 5.66462 9.95274C5.17774 9.46587 4.90422 8.80552 4.90422 8.11698C4.90422 7.42844 5.17774 6.7681 5.66462 6.28122C6.15149 5.79435 6.81183 5.52083 7.50038 5.52083C8.18892 5.52083 8.84926 5.79435 9.33613 6.28122C9.82301 6.7681 10.0965 7.42844 10.0965 8.11698C10.0965 8.80552 9.82301 9.46587 9.33613 9.95274C8.84926 10.4396 8.18892 10.7131 7.50038 10.7131ZM12.5196 4.13621C12.5196 4.25743 12.4957 4.37747 12.4493 4.48946C12.403 4.60145 12.335 4.70321 12.2492 4.78893C12.1635 4.87464 12.0618 4.94263 11.9498 4.98902C11.8378 5.03541 11.7177 5.05929 11.5965 5.05929C11.4753 5.05929 11.3553 5.03541 11.2433 4.98902C11.1313 4.94263 11.0295 4.87464 10.9438 4.78893C10.8581 4.70321 10.7901 4.60145 10.7437 4.48946C10.6973 4.37747 10.6735 4.25743 10.6735 4.13621C10.6735 3.8914 10.7707 3.65661 10.9438 3.4835C11.1169 3.31039 11.3517 3.21313 11.5965 3.21313C11.8413 3.21313 12.0761 3.31039 12.2492 3.4835C12.4224 3.65661 12.5196 3.8914 12.5196 4.13621Z" fill="white"/>
        </svg>

      </a>
      <a href="#" target="_blank">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.63219 15.6159V5.45552H0.20278V15.6159H3.63219ZM1.91761 4.06876C3.11333 4.06876 3.85792 3.28792 3.85792 2.31296C3.83557 1.31633 3.11342 0.557495 1.94031 0.557495C0.766942 0.557495 0 1.31633 0 2.31304C0 3.28792 0.744247 4.06885 1.89527 4.06885H1.91761V4.06876Z" fill="white"/>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.53027 15.616H8.96003V9.94199C8.96003 9.63835 8.98238 9.3348 9.07307 9.11816C9.32089 8.51123 9.88531 7.8828 10.8327 7.8828C12.0741 7.8828 12.5702 8.81487 12.5702 10.1805V15.6161H15.9996V9.79026C15.9996 6.66945 14.3077 5.21729 12.051 5.21729C10.2007 5.21729 9.38854 6.23583 8.93734 6.92933H8.95994V5.45559H5.53027C5.57532 6.4088 5.53027 15.616 5.53027 15.616Z" fill="white"/>
        </svg>

      </a>



    </div>
   </div>


  <div class="navbar-toggle">
    <div class="navbar-toggle-open">
      <img src="<?php echo get_template_directory_uri(); ?>/dist/img/toggle.svg" alt="">
    </div>
    <div class="navbar-toggle-close">
      <img src="<?php echo get_template_directory_uri(); ?>/dist/img/close.svg" alt="">
    </div>
  </div>
  
  <a class="navbar-download" href="<?php the_field('download_file', 'option'); ?>" target="_blank">
    <img src="<?php echo get_template_directory_uri(); ?>/dist/img/download.svg" alt="">
  </a> 
</header>


<div class="lateralCaptions">
<?php
while( have_rows('items_menu_lateral', 'option') ) : the_row();
$titulo_eixo = get_sub_field('titulo_eixo');
?>

<li>
  <p class="infoEixo"><?php echo $titulo_eixo; ?></p>
</li>

<?php
endwhile;
?>
</div>





        <?php
        if( have_rows('items_menu_lateral', 'option') ):
        

?>

<nav class="sidebar">

	<div class="">
		<ul class="eixoSide">
      

        <?php


            while( have_rows('items_menu_lateral', 'option') ) : the_row();
            $icone = get_sub_field('icone');
            $url = get_sub_field('url');
            ?>


            <li>




              <a href="<?php echo $url; ?>">
                  <?php if( $icone ) {
                      echo wp_get_attachment_image( $icone, $size );
                  } ?>
              </a>
            </li>

          <?php
            endwhile;
        else :
        endif;

        ?>

		</ul>
	</div>

  <div class="backtop">
  <svg width="23" height="26" viewBox="0 0 23 26" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M11.3417 0.283036L0.296534 11.8368L6.92177 11.8368L6.92177 25.6973L15.7617 25.6973L15.7239 11.8368L22.387 11.8368L11.3417 0.283036Z" fill="#1A1A1A"/>
  </svg>
		BACK TO TOP
  </div>

</nav>



<div class="searchHeader">

<div class="closeSearch">
<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M18 6.73375L6 18.7337" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M6 6.73375L18 18.7337" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</div>
<form role="search" method="get" id="searchform"
    class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
        <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
        <input type="submit" id="searchsubmit" value="" />
        <img class="imgSearc" src="<?php echo get_template_directory_uri(); ?>/dist/img/search.svg">
  </form>
</div>