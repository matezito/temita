<?php 
    if(has_custom_logo()) :
        the_custom_logo();
    else :
        echo '<h1>'.get_bloginfo('name').'</h1>';
    endif;
?>