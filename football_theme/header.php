<!DOCTYPE html>
<html lang="ru">
<head>
 <meta charset="utf-8">
 <title>ФК Герта Берлин</title>
 <link href="http://herthabsc.ru/wp-content/themes/football_theme/css/style.css" rel="stylesheet">
 <link href='https://fonts.googleapis.com/css?family=Lobster&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

 <? wp_head(); ?>
</head>
<body>
  <div id="wrapper">
   <div id="header"><a href="index.html"><img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="Эмблема клуба" width="624px" height="300px"></a>
   </div>

   <?php
   wp_nav_menu( array(
    'menu_id'=>'nav',
    'theme_location'=>'top'
    ) );
    ?>

  <div id="content">
