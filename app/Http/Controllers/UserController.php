<?php

namespace App\Http\Controllers;

use App\Models\LevelModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    //Menampilkan halaman user
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'User',
            'list'  => ['Home', 'User']
        ];

        $page = (object) [
            'title' => 'Data user yang terdaftar dalam sistem',
        ];

        $activeMenu = 'user'; //set menu yang sedang aktif

        return view('user.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }

    //Ambil data user dalam bentuk iso untuk datables
    public function list(Request $request)
    {
        $users = UserModel::select('user_id', 'username', 'nama', 'level_id')
                          ->with('level'); // ← titik koma di sini sekarang sudah benar
    
        return DataTables::of($users)
            // menambahkan kolom index / no urut (default nama kolom: DT_RowIndex)
            ->addIndexColumn()
            ->addColumn('aksi', function ($users) { //menambahkan kolom aksi
                $btn  = '<a href="' . url('/user/' . $users->user_id) . '" class="btn btn-info btn-sm">Detail</a>';
                $btn .= '<form class="d-inline" method="POST" action="' . url('/user/' . $users->user_id) . '">';
                $btn .= csrf_field();
                $btn .= method_field("DELETE");
                $btn .= '<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah anda yakin akan menghapus data ini?\')">Hapus</button>';
                $btn .= '</form>';
                return $btn;
            })
            ->rawColumns(['aksi']) // memberitahu bahwa kolom aksi adalah html
            ->make(true);
    }

    // Menampilkan halaman form tambah user
public function create() {
    $breadcrumb = (object) [
        'title' => 'Tambah User',
        'list' => ['Home', 'User', 'Tambah']
    ];
    

    $page = (object) [
        'title' => 'Tambah user baru'
    ];

    $level = LevelModel::all(); // ambil data level untuk ditampilkan di form
    $activeMenu = 'user'; // set menu yang sedang aktif

    return view('user.create', ['breadcrumb' => $breadcrumb,'page' => $page,'level' => $level,'activeMenu' => $activeMenu]);
}
// Menyimpan data user baru
public function store(Request $request) {
    $request->validate([
        'username' => 'required|string|min:3|unique:users,username',
        'name' => 'required|string|max:100',
        'password' => 'required|string|min:5',
        'level_id' => 'required|integer'
    ]);

    UserModel::create([
        'username' => $request->username,
        'name' => $request->name,
        'password' => bcrypt($request->password),
        'level_id' => $request->level_id
    ]);

    return redirect('/user')->with('success', 'Data user berhasil disimpan');
}

// Menampilkan detail user
public function show(string $id) {
    $user = UserModel::with('level')->find($id);

    $breadcrumb = (object) [
        'title' => 'Detail User',
        'list' => ['Home', 'User', 'Detail']
    ];

    $page = (object) [
        'title' => 'Detail User'
    ];

    $activeMenu = 'user';

    return view('user.show', [
        'breadcrumb' => $breadcrumb,'page' => $page,'user' => $user,'activeMenu' => $activeMenu]);
}

// Menampilkan halaman form edit user
public function edit(string $id)
{
    $user = UserModel::find($id);
    $level = LevelModel::all();

    $breadcrumb = (object) [
        'title' => 'Edit User',
        'list' => ['Home', 'User', 'Edit'],
    ];

    $page = (object) [
        'title' => 'Edit user',
    ];

    $activeMenu = 'user'; // set menu yang sedang aktif

    return view('user.edit', ['breadcrumb' => $breadcrumb,'page' => $page,'user' => $user,'level' => $level,'activeMenu' => $activeMenu]);
}

// Menyimpan perubahan data user
public function update(Request $request, string $id)
{
    $request->validate([
        //username harus diisi, berupa string, minimal 3 karakter,
        //dan bernilai unik di tabel m_user kolom username kecuali untuk user dengan id
        'username' => 'required|string|min:3|unique:users,username,' . $id,
        'name' => 'required|string|max:100',
        'password' => 'nullable|string|min:5',
        'level_id' => 'required|integer' // level_id harus diisi dan berupa angka
    ]);

    $user = UserModel::find($id);

    $user->update([
        'username' => $request->username,
        'name' => $request->name,
        'password' => $request->password ? bcrypt($request->password) : $user->password,
        'level_id' => $request->level_id
    ]);

    return redirect('/user')->with('success', 'Data user berhasil diubah');
}

// Menghapus data user
public function destroy(string $id)
{
    $check = UserModel::find($id);
    if (!$check) {  // untuk mengecek apakah data user dengan id layar yang dimaksud ada atau tidak
        return redirect('/user')->with('error', 'Data user tidak ditemukan');
    }

    try {
        UserModel::destroy($id); //hapus data level

        return redirect('/user')->with('success', 'Data user berhasil dihapus');
    } catch (\Illuminate\Database\QueryException $e) {

        //jika terjadi error ketika menghapus data, redirect kembali ke halaman dengan membawa pesan error
        return redirect('/user')->with('error', 'Data user gagal dihapus karena masih terdapat tabel lain yang terkait dengan data ini');
    }
}
}