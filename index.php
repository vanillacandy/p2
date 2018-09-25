<?php
require 'helper.php';
require 'logic.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hello World</title>
    <meta charset='utf-8'>

    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
          crossorigin="anonymous">
    <link rel='stylesheet' href='/styles/app.css'>
</head>

<body>
<h1>Hello</h1>

<ul class='books'>
    <?php foreach ($books as $title => $book) : ?>
        <li class='book'>
            <div class='title'><?= $title ?></div>
            <div class='author'>
                 by <?= $book['author'] ?>
            </div>
            <img src='<?= $book['cover_url'] ?>' alt='Cover photo for the book <?= $title ?>'>
            
        </li>
    <?php endforeach ?>
</ul>

</body>
</html>
