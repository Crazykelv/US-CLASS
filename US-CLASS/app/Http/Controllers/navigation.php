<?php

namespace App\Http\Controllers;

use App\Models\jadwal;
use App\Models\kelas;
use App\Models\pengajuan;
use App\Models\select;
use Illuminate\Http\Request;

class navigation extends Controller
{
    public function main() {

        $class = kelas::all();
        $select = Select::all();

        return view('main', [
            'kelas' => $class,
            'select' => $select
        ]);
    }

    public function class() {

        return view('class');
    }

    public function operator() {

        $class = kelas::all();
        $select = Select::all();

        return view('operator', [
            'kelas' => $class,
            'select' => $select
        ]);
    }

    public function buatKelas() {

        return view('buat');
    }

    public function editKelas($id) {

        $class = Kelas::find($id);

        return view('edit', [
            'kelas' => $class
        ]);
    }

    public function userRequest() {

        $class = kelas::all();

        return view('request-user', [
            'kelas' => $class
        ]);
    }

    public function classRequest($id) {

        $class = kelas::find($id);

        return view('choose-classRequest', [
            'kelas' => $class
        ]);
    }

    public function requestList() {

        $class = pengajuan::all();

        return view('request-admin', [
            'kelas' => $class
        ]);
    }

    public function detailRequest($id) {

        $class = pengajuan::find($id);

        return view('detail-request', [
            'kelas' => $class
        ]);
    }

    public function jadwalA() {

        $jadwalSenin = jadwal::where('waktu', 'like', '%Senin%')->get();
        $jadwalSelasa = jadwal::where('waktu', 'like', '%Selasa%')->get();
        $jadwalRabu = jadwal::where('waktu', 'like', '%Rabu%')->get();
        $jadwalKamis = jadwal::where('waktu', 'like', '%Kamis%')->get();
        $jadwalJumat = jadwal::where('waktu', 'like', '%Jumat%')->get();
        $jadwalSabtu = jadwal::where('waktu', 'like', '%Sabtu%')->get();
        $jadwalMinggu = jadwal::where('waktu', 'like', '%Minggu%')->get();

        return view('jadwal-admin', [
            'senin' => $jadwalSenin,
            'selasa' => $jadwalSelasa,
            'rabu' => $jadwalRabu,
            'kamis' => $jadwalKamis,
            'jumat' => $jadwalJumat,
            'sabtu' => $jadwalSabtu,
            'minggu' => $jadwalMinggu
        ]);
    }

    public function jadwalU() {

        $jadwalSenin = jadwal::where('waktu', 'like', '%Senin%')->get();
        $jadwalSelasa = jadwal::where('waktu', 'like', '%Selasa%')->get();
        $jadwalRabu = jadwal::where('waktu', 'like', '%Rabu%')->get();
        $jadwalKamis = jadwal::where('waktu', 'like', '%Kamis%')->get();
        $jadwalJumat = jadwal::where('waktu', 'like', '%Jumat%')->get();
        $jadwalSabtu = jadwal::where('waktu', 'like', '%Sabtu%')->get();
        $jadwalMinggu = jadwal::where('waktu', 'like', '%Minggu%')->get();

        return view('jadwal-user', [
            'senin' => $jadwalSenin,
            'selasa' => $jadwalSelasa,
            'rabu' => $jadwalRabu,
            'kamis' => $jadwalKamis,
            'jumat' => $jadwalJumat,
            'sabtu' => $jadwalSabtu,
            'minggu' => $jadwalMinggu
        ]);
    }

    public function c1($id) {

        $class = Kelas::find($id);

        return view('class.c1', [
            'kelas' => $class
        ]);
    }

    public function remind($id) {

        $class = Kelas::find($id);

        return view('class.c1remind', [
            'kelas' => $class
        ]);
    }

}
