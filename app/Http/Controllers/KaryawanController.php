<?php
namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use App\Models\User;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawans = Karyawan::all();
        return view('karyawan.index', compact('karyawans'));
    }

    public function create()
    {
        return view('karyawan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required|unique:karyawans',
            'nama' => 'required',
            'pangkat' => 'required',
            'divisi' => 'required',
            'dealer' => 'required',
            'posisi' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        // Simpan data karyawan
        $karyawan = Karyawan::create($request->all());

        // Buat user baru
        User::create([
            'nik' => $karyawan->nik,
            'nama' => $karyawan->nama,
            'pangkat' => $karyawan->pangkat,
            'divisi' => $karyawan->divisi,
            'dealer' => $karyawan->dealer,
            'posisi' => $karyawan->posisi,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Enkripsi password
        ]);

        return redirect()->route('karyawan.index')->with('success', 'Data karyawan dan user berhasil ditambahkan.');
    }
}
