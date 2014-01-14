<?php

namespace Classes;

class Foo extends Bar
{
    public function __construct()
    {
        parent::__construct();
        echo 'Foo carregado. <br />';
    }
}