<?php

namespace App\Models;

/**
* 
*/
class Test extends Model
{
    
    function __construct(argument)
    {
        echo 'hello';
    }

    public function a()
    {
        echo 'a';
    }

    public function b()
    {
        $this->hello;
    }

    public function hello()
    {
        $this->a;
    }
}