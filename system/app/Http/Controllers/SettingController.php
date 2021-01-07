<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Auth;

class SettingController extends Controller
{
    function store()
    {
        if (request('current')) {
            if (Auth::guard('pembeli')->check()) {
                $user = Auth::guard('pembeli')->user();
            } else {
                $user = AUth::guard('penjual')->user();
            }

            $check = Hash::check(request('current'), $user->password);
            if ($check) {
                if (request('new') == request('confirm')) {
                    $user->password = bcrypt(request('new'));
                    $user->save();

                    return back()->with('success', 'Password berhasil rubah');
                } else {
                    return back()->with('danger', 'Ulangi password baru anda dengan benar');
                }
            } else {
                return back()->with('danger', 'Password lama anda salah, ulangi password dengan benar');
            }
        } else {
            return back()->with('danger', 'Password lama harus diisi terlebih dahulu');
        }
    }

    function index()
    {
        if (Auth::guard('pembeli')->check()) {
            $data['user'] = Auth::guard('pembeli')->user();
        } else {
            $data['user'] = AUth::guard('penjual')->user();
        }

        return view('setting.index', $data);
    }
}
