<?php

get_header();

?>
<h1>This page is not found issue</h1>

<?php
//get_search_form();
    wp_get_archives( array( 'type' => 'postbypost', 'limit' => 10, 'format'=> 'custom', 'before' => '', 'after' => '<br />'));
    
?>



<?php

get_footer();
?>