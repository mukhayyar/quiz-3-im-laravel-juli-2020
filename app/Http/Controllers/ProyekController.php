<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyek;
use Illuminate\Support\Facades\DB;

class ProyekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyek = Proyek::orderBy('created_at','asc')->get();
        return view('proyek',compact('proyek'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $manager = DB::table('karyawan')->where([['jabatan', 'manager'],['proyek_id',null]])->orderBy('nama')->get();
        // dd($manager);
        return view('create_proyek',compact('manager'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proyek = new Proyek;
        $proyek->nama_proyek = $request->nama_proyek;
        $proyek->deskripsi_proyek = $request->deskripsi_proyek;
        $proyek->tanggal_dimulai = $request->tanggal_dimulai;
        $proyek->tanggal_deadline = $request->tanggal_deadline;
        $proyek->manager_id = $request->manager_id;
        $proyek->save();

        $manager = DB::table('karyawan')
              ->where('id', $request->manager_id)
              ->update(['proyek_id' => $proyek->id]);

        return redirect('/proyek');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Proyek $proyek)
    {
        $karyawan = DB::table('karyawan')->where('proyek_id',$proyek->id)->get();
        // dd($karyawan);
        return view('show_proyek', compact('proyek','karyawan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Proyek $proyek)
    {
        return view('edit_proyek', compact('proyek'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proyek $proyek)
    {
        $proyek->nama_proyek = $request->nama_proyek;
        $proyek->deskripsi_proyek = $request->deskripsi_proyek;
        $proyek->tanggal_dimulai = $request->tanggal_dimulai;
        $proyek->tanggal_deadline = $request->tanggal_deadline;
        $proyek->update();

        return redirect('/proyek');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proyek $proyek)
    {
        $proyek->delete();

        return redirect('/proyek');
    }
    public function daftarStaff(Proyek $proyek)
    {
        $karyawan = DB::table('karyawan')->where([['jabatan', 'staff'],['proyek_id',null]])->orderBy('nama')->get();
        // dd($manager);
        return view('tambah_karyawan',compact('karyawan','proyek'));
    }

    public function postStaff(Request $request, Proyek $proyek)
    {
        $karyawan = DB::table('karyawan')
              ->where('id', $request->karyawan_id)
              ->update(['proyek_id' => $proyek->id]);

        return redirect('/proyek');
    }
}
