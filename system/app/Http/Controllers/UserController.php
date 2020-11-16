<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{

    // menampilkan seluruh data
    function index()
    {
        $data['list_user'] = user::all();
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
        $user->password = bcrypt(request('password'));
        $user->email = request('email');

        $user->save();
        // ->with('success',) ini merupakan alert
        return redirect('admin/user')->with('success', 'Data Berhasil Ditambahkan');
    }
    // menampilkan satu data/detail data
    function show(user $user)
    {
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
        if (request('password')) $user->password = bcrypt(request('password'));
        $user->save();

        return redirect('admin/user')->with('warning', 'Data Berhasil Diubah');
    }
    // proses menghapus
    function destroy(user $user)
    {
        $user->delete();
        return redirect('admin/user')->with('danger', 'Data Berhasil Dihapus');
    }
}
