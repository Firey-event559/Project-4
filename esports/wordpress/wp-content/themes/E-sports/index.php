<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>
<body>

<?php wp_head(); ?>



<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>


<<<<<<< HEAD

=======
<h1>123</h1>

    
   
    <p> <?php echo get_the_content(); ?> </p>

   
    <p> <?php echo get_the_date(); ?> </p>
    <?php get_footer(); ?>
>>>>>>> b88c93f951543a11e44913875e6524450e7e1da8


<h1> <?php echo get_the_title(); ?><h1>
    
   
    <p> <?php echo get_the_content(); ?> </p>

   
    <p> <?php echo get_the_date(); ?> </p>
    <?php get_footer(); ?>

   




















    
</body>
</html>