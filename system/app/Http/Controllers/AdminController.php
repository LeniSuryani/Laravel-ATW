<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{

    function showAdminBeranda()
    {
        return view('template.admin.beranda');
    }
    function showAdminKategori()
    {
        return view('template.admin.kategori');
    }
    function showAdminPromo()
    {
        return view('template.admin.promo');
    }
    function showAdminMaster()
    {
        return view('template.admin.master');
    }
    function showAdminProduk()
    {
        return view('template.admin.produk');
    }
    function showAdminRegistrasi()
    {
        return view('template.registrasi');
    }
    function showAdminLeni()
    {
        return view('template.admin.leni');
    }
}
