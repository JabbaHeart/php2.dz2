<?php

use \App\Models\Article;

require __DIR__ . '/../autoload.php';

$records = Article::findAll();

$newRecord = new Article;

include __DIR__ . '/../App/Templates/news.php';





