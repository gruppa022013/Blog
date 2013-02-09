<?php
namespace FirstApp\Controller;

use T13\Http\Response;
use T13\Mvc\Controller;

class Blog extends Controller
{
    /**
     * Вывод списка статей.
     */
    public function index()
    {

    }

    /**
     * Отображение запрошенной новости.
     *
     * @param integer $id
     */
    public function show($id)
    {
        $post = $this->getModel('FirstApp\Model\BlogPost')->find($id);

        return $this->render('blog_post.html.php', [
            'title' => $post->getTitle(),
            'content' => $post->getContent()
        ]);
    }
}
