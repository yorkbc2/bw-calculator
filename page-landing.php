<?php
/**
 * Template Name: Landing
 **/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
    
	<!-- <title><?php wp_title(); ?></title> -->
	<link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/favicon.ico" type="image/x-icon" />

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<header class="page-header">
        <div class="page-header__title">
            <h2>
                <?php echo get_bloginfo('name'); ?>
            </h2>
        </div>
        <div class="page-header__logo">
            <?php get_default_logo_link(); ?>
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" /> -->
        </div>
    </header>

    <div class="js-container">
    <?php get_template_part('loops/content', 'page'); ?>
    </div>


    <footer class="page__footer js-footer">
        <div class="page__footer_socials">
            <?php foreach (get_social() as $social):?>
                <a href="<?php echo $social['url'] ?>" target="_blank" class="page__footer_socials_item">
                    <div>
                        <?php if (!empty($social['icon-html'])): echo $social['icon-html']; 
                                else: echo '<i class="'.$social['icon'].'"></i>';
                                endif; ?>
                        
                    </div>
                    <div>
                        <?php echo $social['text']; ?>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </footer>

<?php wp_footer(); ?>

</body>
</html>
