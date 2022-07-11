<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(int $p1, int $p2)
    {
        echo "A soma de $p1 e $p2 é: ".($p1 + $p2);
    }
}
