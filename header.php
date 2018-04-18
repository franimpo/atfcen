<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Departamento_de_Ciencias_de_la_Atmosfera
 */

?>
    <!doctype html>
    <html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
 
        
        <?php wp_head(); ?>   
        
        <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js" integrity="sha256-ghmTf7XUDqNyD7VnAcX1W0YqD3exkHQZCy0VJCxcrq8=" crossorigin="anonymous"></script>
<![endif]-->
        
    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="site">
            <a class="skip-link screen-reader-text" href="#content">
                <?php esc_html_e( 'Skip to content', 'dcao' ); ?>
            </a>



            <!-- HEADER
	=================================================================== -->
            <header>
                <div id="cabecera">
                    <div class="container">
                        <a href="<?php echo home_url(); ?>" class="logocabecera"><img class="logo1" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logofcao.png" alt="Departamento de Ciencias de la Atmósfera y los Océanos"><img class="logo2" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo2.png" alt="Departamento de Ciencias de la Atmósfera y los Océanos"></a>
                         </div>
                </div>

                <!-- NAVBAR
		=================================================================== -->
                <div class="navbar-wrapper">

            <nav class="navbar navbar-inverse navbar-top">
 <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <div class="button-bars"><span class="icon-bar"></span>
                <span class="icon-bar"></span>
                    <span class="icon-bar"></span></div><span class="button-label">MENU</span>
                            <span id="botoncerrar" class="hidden">CERRAR</span>
              </button>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                       
                            
                          <?php /* Primary navigation */
wp_nav_menu( array(
  'theme_location' => 'header',
  'depth' => 2,
  'container' => false,
  'menu_class' => 'nav navbar-nav',
  //Process nav menu using our custom nav walker
  'walker' => new wp_bootstrap_navwalker())
);
?>
              
              <div id="sb-search" class="sb-search">
						<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
							<input class="sb-search-input" placeholder="Ingrese su búsqueda aquí" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s">
							<input class="sb-search-submit" type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>">
							<span class="ion-ios-search-strong"></span>
						</form>
					</div>     
                        
                    </div>
            
            </nav>
        </div>
            </header>
