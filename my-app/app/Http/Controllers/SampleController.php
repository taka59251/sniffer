<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function test()
    {
        $a=[
            '1' => 'ok',
            '2' => 'ng'
        ];

        $b = array('ok', 'ng');

        print_r($a);
        print_r($b);
    }
}
