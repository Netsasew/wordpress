<h1>This is single php</h1>
<?php

get_header();

if(have_posts())
{
    while(have_posts())
    {
        the_post();
        ?>
        <div class="container">
            <div class= "row">
                <div class="col-md-3">
                </div>
        <a href="<?php the_permalink()?>"><?php the_title()?></a>
        <?php
        the_content();
    }
}

get_sidebar();

get_footer();
?>
