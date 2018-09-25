<?php
$booksJson = file_get_contents('books.json');

$books = json_decode($booksJson, true);

#dump($book['The Bell Jar']['author']);


