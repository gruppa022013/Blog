<?php

namespace FirstApp\Controller;

use T13\Http\Response;
use T13\Mvc\Controller;

class Team extends Controller
{
    /**
     * Главная.
     */
    public function index()
    {
        $page_title = 'Команда';
        $content = 'Вот такие вот мы ;)';

        return $this->render('team.html.php', [
            'page_title' => $page_title,
            'content' => $content,
        ]);
    }
}
