<?php

namespace T13\Mvc;

use T13\Http\Response;

abstract class Controller implements ControllerInterface
{
    protected $container;

    /**
     * Отрисовка шаблона
     *
     * @return Response
     */
    public function render($tpl)
    {
        // @todo поиск шабонов в заданных путях.
        $content = new View(file_get_contents($tpl));
        return new Response($content);
    }

    /**
     * Внедряем в котроллер контейнер сервисов.
     *
     * @param object $container
     */
    final public function setContainer($container)
    {
        $this->container = $container;
    }

    /**
     * Возвражает объект модели из который можно сделать выборки данных.
     */
    public function getModel($class)
    {
        $model = new $class();
        $model->setContainer($this->container);

        return $model;
    }
}
