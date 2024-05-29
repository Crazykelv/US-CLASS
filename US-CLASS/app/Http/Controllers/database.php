<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\kelas;
use App\Models\jadwal;
use App\Models\select;
use App\Models\pengajuan;
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

        $dateString = $request->tanggalm;
        $date = Carbon::parse($dateString);
        $dayOfWeek = $date->format('l');

        if ($dayOfWeek == 'Sunday') {
            $dayOfWeek = 'Minggu';
        } elseif ($dayOfWeek == 'Monday') {
            $dayOfWeek = 'Senin';
        } elseif ($dayOfWeek == 'Tuesday') {
            $dayOfWeek = 'Selasa';
        } elseif ($dayOfWeek == 'Wednesday') {
            $dayOfWeek = 'Rabu';
        } elseif ($dayOfWeek == 'Thursday') {
            $dayOfWeek = 'Kamis';
        } elseif ($dayOfWeek == 'Friday') {
            $dayOfWeek = 'Jumat';
        } elseif ($dayOfWeek == 'Saturday') {
            $dayOfWeek = 'Sabtu';
        }

        $pengajuan -> waktu = ($dayOfWeek . ' ' . $request->tanggalm . ', Pukul : ' . $request->waktum . '-' . $request->waktus);
        $pengajuan -> usedFor = $request -> usedFor;

        $pengajuan->save();

        return redirect()->route('main');
    }

    public function sentRequestc1($id, Request $request) {

        $class = Kelas::find($id);
        $pengajuan = new pengajuan;

        $pengajuan -> idKelas = $class -> id;
        $pengajuan -> namaKelas = $class -> namaRuangan;
        $pengajuan -> pengaju = $request -> pengaju;

        $dateString = $request->tanggalm;
        $date = Carbon::parse($dateString);
        $dayOfWeek = $date->format('l');

        if ($dayOfWeek == 'Sunday') {
            $dayOfWeek = 'Minggu';
        } elseif ($dayOfWeek == 'Monday') {
            $dayOfWeek = 'Senin';
        } elseif ($dayOfWeek == 'Tuesday') {
            $dayOfWeek = 'Selasa';
        } elseif ($dayOfWeek == 'Wednesday') {
            $dayOfWeek = 'Rabu';
        } elseif ($dayOfWeek == 'Thursday') {
            $dayOfWeek = 'Kamis';
        } elseif ($dayOfWeek == 'Friday') {
            $dayOfWeek = 'Jumat';
        } elseif ($dayOfWeek == 'Saturday') {
            $dayOfWeek = 'Sabtu';
        }

        $pengajuan -> waktu = ($dayOfWeek . ' ' . $request->tanggalm . ', Pukul : ' . $request->waktum . '-' . $request->waktus);
        $pengajuan -> usedFor = $request -> usedFor;

        $pengajuan->save();

        return redirect()->route('c1', $class);
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
