<?php

define('WWW_ROOT', dirname(__FILE__));
define('DS', DIRECTORY_SEPARATOR);

require_once WWW_ROOT . DS . 'autoload.php';

// chamando o foo
use Classes\Foo;

// instanciando o foo
$foo = new Foo();

// instanciando o foo usando namespace
$bar = new Classes\Bar();

//usando namespace com apelido
use Classes\Bar as barApelido;
$bar2 = new barApelido();

echo '<br /><br />';

use Classes\Database\Database;

$db = new Database();