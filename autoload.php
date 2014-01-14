<?php

/**
 * função autoload, para carregamento das classes
 * @param string $class nome da classe a ser instanciada
 * @throws Exception
 */
function __autoload($class)
{
    $class = WWW_ROOT. DS . str_replace('\\', DS, $class) . '.php';
    if(!file_exists($class)) {
        throw new Exception("File path: '{$class}' not found.");
    }
    
    require_once $class;
}