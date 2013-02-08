<?php

namespace FirstApp\Controller;

use T13\Http\Response;
use T13\Mvc\Controller;

class Index extends Controller
{
    /**
     * Главная.
     */
    public function index()
    {
        return new Response('Эта строка выводится из: <b>' . __FILE__ . '</b>' . ': ' . __LINE__);
    }
}
