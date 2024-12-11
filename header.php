<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo __("Coffee Shop — найкраща кав'ярня у вашому місті", 'i-web') ?></title>
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="description" content="<?php echo __("Скуштуйте найсмачнішу каву та десерти у кав'ярні Coffee Shop. Затишна атмосфера та найкраще обслуговування – чекаємо на вас!", 'i-web') ?>">

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
    <img src="<?php echo LINK_THEME ?>/assets/images/menu.svg" class="menu" alt="menu">
    <img src="<?php echo LINK_THEME ?>/assets/images/menu-close.svg" class="close" alt="close">
    <nav>
        <li class="current"><a href="#home"><?php echo __('Home', 'i-web') ?></a></li>
        <li><a href="#best_offer"><?php echo __('Best Offer', 'i-web') ?></a></li>
        <li><a href="#gallery"><?php echo __('Gallery', 'i-web') ?></a></li>
        <li><a href="#follow"><?php echo __('Follow Us', 'i-web') ?></a></li>
        <li><a href="#about"><?php echo __('About Us', 'i-web') ?></a></li>
        <li><a href="#contact"><?php echo __('Contact', 'i-web') ?></a></li>
    </nav>
</header>