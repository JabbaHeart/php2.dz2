<?php

namespace App\Models;

use App\Model;

class Article extends Model
{
    protected static $table = 'news';

    protected $header;
    protected $message;

    public function getHeader()
    {
        return $this->header;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function getLink($action = null)
    {
        if (empty($action)) {
            return '/php2.dz2/Admin/article.php?id=' . $this->id;
        }
        else {
            return '/php2.dz2/Admin/article.php?action=' . $action . '&id=' . $this->id;
        }
    }

}