<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    function showBeranda()
    {
        return view('template.base');
    }

    function showProduct()
    {
        return view('template.product');
    }

    function showDiscount()
    {
        return view('template.discount');
    }

    function showDetail()
    {
        return view('template.detail');
    }
}
