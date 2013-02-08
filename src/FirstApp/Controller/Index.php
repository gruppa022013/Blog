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
        return new Response('Main page');
    }
}
