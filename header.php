<!DOCTYPE html>
<html lang="en" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' );?>">
	<title><?php
        /*Con este código agregamos a wordpress un titulo que cambia dependiendo
        * del lugar donde te encuentres en el blog. También puede utilizar <?php bloginfo('name'); ?>
        * Muestra en la etiqueta <title> el nombre de lo que esta viendo, la forma en la que lo estamos creando
        * es mucho más amigable para los navegadores ya que muestra información de cada lugar que estés.
        */
        global $page, $paged;
        wp_title( '|', true, 'right' );
        // Agrega el nombre del blog.
        bloginfo( 'name' );
        // Agrega la descripción del blog, en la página principal.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
        echo " | $site_description";
        // Agrega el número de página si es necesario:
        if ( $paged >= 2 || $page >= 2 )
        echo ' | ' . sprintf( __( 'Page %s', 'Verano en Malaga' ), max( $paged, $page ) );
        
        ?>
	</title>
	<!--[if IE]>
   		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
   	<![endif]-->
   	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" /> 
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/public/css/semantic.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/public/css/main.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic|Cinzel+Decorative:400,700' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="container-full">
    
