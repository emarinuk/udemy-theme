<!--Keep empty-->

<!DOCTYPE html>
<html  <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE_Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class('example'); ?>>
<?php wp_body_open(); ?>
    <p>Lorem Ipsum</p>
    <?php wp_footer(); ?>
</body>
</html>