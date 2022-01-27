<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head()?>
</head>
<body <?php body_class()?>>
<?php 
    if(has_custom_logo()) :
        the_custom_logo();
    else :
        echo '<h1>'.get_bloginfo('name').'</h1>';
    endif;
?>