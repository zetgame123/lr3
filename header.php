<?php
date_default_timezone_set('Europe/Moscow');

$menu = [
    'Обо мне'   => 'index.php',
    'Навыки'    => 'skills.php',
    'Увлечения' => 'hobby.php',
];

$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
  <div class="logo">Моя страница</div>
  <ul class="menu">
    <?php foreach ($menu as $menu_name => $menu_link): ?>
      <li><a href="<?php
        echo $menu_link;
      ?>"<?php
        if ($menu_link === $current_page) echo ' class="selected_menu"';
        echo '>' . $menu_name;
      ?></a></li>
    <?php endforeach; ?>
  </ul>
</header>

<main>
