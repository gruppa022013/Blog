<?php

namespace T13\Http;

class Request
{
    /**
     * Возвращает настоящий запрошенный путь относительно запускаемого скрипта.
     *
     * Путь всегда начинается с /.
     *
     * Например корень сайта находится по адресу /path/to/mysite на localhost:
     *
     *  * http://localhost/path/to/mysite/                          вернёт '/'
     *  * http://localhost/path/to/mysite/about                     вернёт '/about'
     *  * http://localhost/path/to/mysite/enco%20ded                вернёт '/enco%20ded'
     *  * http://localhost/path/to/mysite/about?var=1               вернёт '/about'
     *  * http://localhost/path/to/mysite/index.php/about/?var=1    вернёт '/about/'
     *
     * @return string The raw path (i.e. not urldecoded)
     *
     * @api
     */
    public function getPathInfo()
    {

    }

    /**
     * Возвращает путь от корня до запрошенного скрипта.
     *
     * Например index.php - это скрипт, который инициализует объект запроса:
     *
     *  * http://localhost/                  вернёт пустую строку
     *  * http://localhost/index.php         вернёт пустую строку
     *  * http://localhost/index.php/page    вернёт пустую строку
     *  * http://localhost/web/              вернёт '/web'
     *  * http://localhost/web/index.php     вернёт '/web'
     *  * http://localhost/we%20b/index.php  вернёт '/we%20b'
     *
     * @return string The raw path (i.e. not urldecoded)
     *
     * @api
     */
    public function getBasePath()
    {

    }

    /**
     * Вернёт корневой URL откуда был выполнен запрос.
     *
     * Никогда не оканчивается на /.
     *
     * Это подобно getBasePath(), за исключением того, что может еще включать
     * имя скрипта (например index.php), если он был явно запрошен.
     *
     *  * http://localhost/                     вернёт пустую строку
     *  * http://localhost/index.php            вернёт /index.php
     *  * http://localhost/index.php/page       вернёт /index.php
     *  * http://localhost/web/                 вернёт '/web'
     *  * http://localhost/web/index.php        вернёт '/web/index.php'
     *  * http://localhost/web/about/           вернёт '/web'
     *  * http://localhost/web/index.php/about/ вернёт '/web/index.php'
     *  * http://localhost/we%20b/index.php     вернёт '/we%20b/index.php'
     *
     * @return string The raw url (i.e. not urldecoded)
     *
     * @api
     */
    public function getBaseUrl()
    {

    }
}
