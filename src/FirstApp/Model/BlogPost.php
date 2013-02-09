<?php

namespace FirstApp\Model;

use T13\Mvc\Model;

class BlogPost extends Model
{
    public function __construct()
    {
        $this->table = 'posts';
    }
}
