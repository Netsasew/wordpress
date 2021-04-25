<h1>This is page php</h1>
<?php

get_header();

if(have_posts())
{
    while(have_posts())
    {
        the_post();
        ?>
        <a href="<?php the_permalink()?>"><?php the_title()?></a>
        <?php
        the_excerpt();
    }
}

get_sidebar();
get_footer();
?>
