<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;

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

    function testAjax()
    {
        $data['list_provinsi'] = Provinsi::all();
        return view('test-ajax', $data);
    }
}
