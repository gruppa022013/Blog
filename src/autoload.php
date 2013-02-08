<?php
/**
 * Здесь будет описан автозагрузчик классов.
 */
function autoload($class)
{
    // @todo тут надо описать автозагрузку с поддержкой пространств имён.
    require_once ('src/'.$class.'.php');
}

spl_autoload_register('autoload');
