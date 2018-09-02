<?php

use \App\Models\Article;

require __DIR__ . '/../autoload.php';

if(isset($_GET['action'])) {
    $condition = $_GET['action'];
} else {
    $condition = null;
}

if (!empty($_GET['id'])) {
    $record = Article::findById($_GET['id']);
}   else {
    $record = new Article;
}

switch ($condition) {

    case 'update':
    case 'create':

        $record->saveFromPost();
        $record->save();
        header('Location: /php2.dz2/Admin/');
        break;

    case 'delete':

        $record->delete();
        header('Location: /php2.dz2/Admin/');
        break;

    default:

        if (!$record->isNew()) {
            $action = 'update';
        } else {
            $action = 'create';
        }
        include __DIR__ . '/../App/Templates/article.php';
        break;

}


