<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    private $dataMahasiswa = [
        ['nim' => '242520001', 'nama' => 'Maulana Ifandika', 'ipk' => 3.85],
        ['nim' => '242520002', 'nama' => 'Rafif Dzaky Y', 'ipk' => 3.50],
        ['nim' => '242520003', 'nama' => 'Deva Aditya L', 'ipk' => 3.20],
        ['nim' => '242520004', 'nama' => 'Berliana Eka P', 'ipk' => 2.90],
        ['nim' => '242520005', 'nama' => 'Rofiq Muallif', 'ipk' => 1.80],
    ];

    public function profil()
    {
        $nama = "Rofiq Muallif";
        $nim = "242520005";
        $prodi = "Teknologi Informasi";

        return view('mahasiswa.profil', compact('nama', 'nim', 'prodi'));
    }

    public function daftar()
    {
        $mahasiswa = $this->dataMahasiswa;
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function detail($nim)
    {
        $mhs = collect($this->dataMahasiswa)->firstWhere('nim', $nim);

        if (!$mhs) {
            abort(404);
        }

        return view('mahasiswa.detail', compact('mhs'));
    }
}