<?php

// Фильтр от спама
add_filter('init', 'verify_spam');
function verify_spam($commentdata) {
  $spam_test_field = trim($_POST['comment']);
  if(!empty($spam_test_field)) wp_die('Спаму нет!');
  $comment_content = trim($_POST['real-comment']);
  $_POST['comment'] = $comment_content;
  return $commentdata;
}

// Меню
register_nav_menus(array(
    'top'    => 'Верхнее меню',
    'bottom' => 'Нижнее меню'
));

// Вывод загрузки миниатюр в записи
add_theme_support( 'post-thumbnails' );

?>