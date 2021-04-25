<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="<?php bloginfo('template_url') ?>/assets/css/bootstrap.min.css" rel="stylesheet" >
    <link href="<?php bloginfo('template_url') ?>/assets/css/style1.css" rel="stylesheet" >
    <title><?php bloginfo('name')?></title>
    <?php wp_head() ?>
</head>
<body <?php body_class() ?>>
    <div class="heading">
        <header class="title1">
            <h1 class="title2"><a href="<?php echo home_url() ?>"></a><?php bloginfo('name') ?></h1>
            <h4><?php bloginfo('description')?></h4>
        </header>
    <nav>
        <?php
        wp_nav_menu( array ( 'theme_location' => 'top-nav'))
    
        ?>
    </nav>
    </div>
    
    
    
    
    
    
</body>
</html>