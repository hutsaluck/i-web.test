<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo __('Coffee Shop', 'i-web') ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&family=Josefin+Sans:wght@600&family=Open+Sans:ital,wght@0,400;1,400&family=Open+Sans:ital,wght@0,600;1,600&family=Open+Sans:ital,wght@0,700;1,700&family=Poppins&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="<?php echo LINK_THEME ?>/assets/images/favicon.svg" type="image/x-icon">
    <?php wp_head() ?>
</head>
<body>
<header>
    <img src="<?php echo LINK_THEME ?>/assets/images/logo.svg" alt="logo">
    <p class="menu"></p>
    <nav>
        <li><img src="<?php echo LINK_THEME ?>/assets/images/menu-close.svg" alt="menu"></li>
        <li class="current"><a href="#"><?php echo __('Home', 'i-web') ?></a></li>
        <li><a href="#"><?php echo __('About Us', 'i-web') ?></a></li>
        <li><a href="#"><?php echo __('Menu', 'i-web') ?></a></li>
        <li><a href="#"><?php echo __('Review', 'i-web') ?></a></li>
        <li><a href="#"><?php echo __('Contact', 'i-web') ?></a></li>
    </nav>
</header>