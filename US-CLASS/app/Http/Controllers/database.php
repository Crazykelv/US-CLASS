<?php

namespace App\Http\Controllers;

use App\Models\jadwal;
use App\Models\kelas;
use App\Models\pengajuan;
use App\Models\select;
use Illuminate\Http\Request;

class database extends Controller
{
    public function addKelas(Request $request) {
    
        $class = new kelas;

        $class -> namaRuangan = $request -> nama;
        $class -> lokasi = $request -> lokasi;
        $class -> fasilitas = $request -> fasilitas;

        $class->save();

        return redirect()->back();
    }

    public function select($id) {

        $check = Select::all();
        $kelas = Kelas::find($id);

        if ($check) {

            foreach (Select::all() as $item) {
                $item->delete();
            }

            $select = new Select;

            $select -> namaRuangan = $kelas -> namaRuangan;
            $select -> lokasi = $kelas -> lokasi;
            $select -> fasilitas = $kelas -> fasilitas;
            $select -> ketersediaan = $kelas -> ketersediaan;
            $select -> usedBy = $kelas -> usedBy;
            $select -> usedFor = $kelas -> usedFor;

        } else {

            $select = new Select;

            $select -> namaRuangan = $kelas -> namaRuangan;
            $select -> lokasi = $kelas -> lokasi;
            $select -> fasilitas = $kelas -> fasilitas;
            $select -> ketersediaan = $kelas -> ketersediaan;
            $select -> usedBy = $kelas -> usedBy;
            $select -> usedFor = $kelas -> usedFor;

        }

        $select->save();

        return redirect()->back();
    }

    public function addEditedKelas($id, Request $request) {

        $class = Kelas::find($id);

        $class -> lokasi = $request -> lokasi;
        $class -> ketersediaan = $request -> ketersediaan;
        $class -> usedBy = $request -> usedBy;
        $class -> usedFor = $request -> usedFor;

        $classs = kelas::all();
        $select = Select::all();

        $class->save();

        return view('operator', [
            'kelas' => $classs,
            'select' => $select
        ]);
    }

    public function sentRequest($id, Request $request) {

        $class = Kelas::find($id);
        $pengajuan = new pengajuan;

        $pengajuan -> idKelas = $class -> id;
        $pengajuan -> namaKelas = $class -> namaRuangan;
        $pengajuan -> pengaju = $request -> pengaju;
        $pengajuan -> waktu = $request -> waktu;
        $pengajuan -> usedFor = $request -> usedFor;

        $pengajuan->save();

        return redirect()->route('main');
    }

    public function accAjuan($id, Request $request) {
        
        $req = pengajuan::find($id);

        $idKelas = $req -> idKelas;
        $class = Kelas::find($idKelas);

        $jadwal = new Jadwal;

        $jadwal -> namaRuangan = $class -> namaRuangan;
        $jadwal -> fasilitas = $class -> fasilitas;
        $jadwal -> waktu = $request -> waktu;
        $jadwal -> usedBy = $request -> pengaju;
        $jadwal -> usedFor = $request -> usedFor;

        $jadwal->save();
        $req->delete();

        return redirect()->route('requestList');
    }

    public function rejAjuan($id) {

        $req = pengajuan::find($id);
        $req->delete();

        return redirect()->route('requestList');
    }

    public function confirmation($id) {

        $class = Kelas::find($id);

        $class -> ketersediaan = 0;
        $class -> lokasi = null;
        $class -> usedBy = null;
        $class -> usedFor = null;

        $class->save();

        return redirect()->back();
    }

}
