<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDetail;

class UserController extends Controller
{

    // menampilkan seluruh data
    function index()
    {
        //withCount digunakan untuk menghitung jumlah produk yg diinput oleh user tersebut
        $data['list_user'] = user::withCount('produk')->get();
        return view('user.index', $data); //mengarahkan ke folder view yg mana si file nya
    }
    // menampilkan form untuk input data baru
    function create()
    {
        return view('user.create');
    }
    // proses menyimpan data ke database
    function store()
    {
        // produk ini sama dengan model
        $user = new user;
        // // kiri= nama (database), kanan= nama(codingan view)
        $user->nama = request('nama');
        $user->username = request('username');
        $user->password = request('password'); //tidak perlu pakai bcrypt karena sudah diwakilkan di model user
        $user->email = request('email');
        $user->save();

        // relasi one to one
        $UserDetail = new UserDetail;
        $UserDetail->id_user = $user->id;
        $UserDetail->no_hp = request('no_hp');
        $UserDetail->save();

        // ->with('success',) ini merupakan alert
        return redirect('admin/user')->with('success', 'Data Berhasil Ditambahkan');
    }
    // menampilkan satu data/detail data
    function show($user)
    {
        $user = user::findOrFail($user);
        $loggedUser = request()->user();
        if ($loggedUser->id != $user->id) return abort(403);

        $data['user'] = $user;
        return view('user.show', $data);
    }
    // menampilkan form edit/update
    function edit(user $user)
    {
        $data['user'] = $user;
        return view('user.edit', $data);
    }
    //proses mengupdate
    function update(user $user)
    {
        // // kiri= nama (database), kanan= nama(codingan view)
        $user->nama = request('nama');
        $user->username = request('username');
        $user->email = request('email');
        // khusus untuk update password agak berbeda syntax nya, ini berguna apabila user tidak ingin mengupdate password nya maka jika tidak di isi tidak apa2
        if (request('password')) $user->password = (request('password')); //tidak perlu pakai bcrypt karena sudah diwakilkan di model user
        $user->save();

        // relasi one to one
        // $UserDetail = new UserDetail;
        // $UserDetail->id_user = $user->id;
        $user->detail->no_hp = request('no_hp');
        $user->detail->save();
        return redirect('admin/user')->with('warning', 'Data Berhasil Diubah');
    }
    // proses menghapus
    function destroy(user $user)
    {
        $user->delete();
        return redirect('admin/user')->with('danger', 'Data Berhasil Dihapus');
    }
}
