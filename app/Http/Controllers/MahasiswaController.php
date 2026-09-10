<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{

    public function Mahasiswa(): View
    {
        $users = DB::table('mahasiswa')->get();
       
        return view('mahasiswa', ['users' => $users]);
           }

    public function tambah(): View
    {
        return view('tambah');
    }

    public function edit($id): View
    {
    
        $mahasiswa = DB::table('mahasiswa')->where('id', $id)->first();

        return view('edit', ['mahasiswa' => $mahasiswa]);
    }
    
    public function insert(Request $request)
    {
  
    
        DB::table('mahasiswa')->insert([
        ['Nim' => $request->Nim, 'nama' => $request->nama, 'programstudi' => $request->programstudi, 'alamat' => $request->alamat, 'nomortelpon' => $request->nomortelpon, 'email' => $request->email, 'tempat_lahir' =>$request->tempat_lahir, 'tanggal_lahir' =>$request->tanggal_lahir, 'jenis_kelamin' =>$request->jenis_kelamin]
    ]);
    
    return redirect('/mahasiswa');
    }

  
  public function update($id, Request $request)
    {
        // dd($request);

        $affected = DB::table('mahasiswa')
        ->where('id', $id)
        ->update(['Nim' => $request->Nim, 'nama' => $request->nama, 'programstudi' => $request->programstudi, 'alamat' => $request->alamat, 'nomortelpon' => $request->nomortelpon, 'email' => $request->email, 'tempat_lahir' =>$request->tempat_lahir, 'tanggal_lahir' =>$request->tanggal_lahir, 'jenis_kelamin' =>$request->jenis_kelamin]
    );
        return redirect('/mahasiswa');
    }

        public function delete($id)
    {
        //dd($request);
        
        $deleted = DB::table('mahasiswa')->where('id', $id)->delete();
        
        return redirect('/mahasiswa');
    }
}




