<?php
/**
 * Здесь будет описан автозагрузчик классов.
 */
function autoload($class)
{
    require_once ('src/'.$class.'.php');
}

spl_autoload_register('autoload');
