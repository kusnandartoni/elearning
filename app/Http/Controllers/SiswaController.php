<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\SiswaRequest;

use App\Siswa;
use App\Kelas;
use App\Telepon;
use App\Hobi;
use Storage;
use Session;
//use Validator;

class SiswaController extends Controller
{
    public function index()
    {
    	$siswa_list = Siswa::orderBy('nisn','desc')->paginate(2);
        $jumlah_siswa = Siswa::count();
		return view('siswa.index', compact('siswa_list','jumlah_siswa'));
    }
    public function create()
    {
    	return view('siswa.create');
    }
    public function store(SiswaRequest $req)
    {
        $input = $req->all();

        if ($req->hasFile('foto')) {
           $input['foto'] = $this->uploadFoto($req);  
        }

        $siswa = Siswa::create($input);
        $telepon = new Telepon;
        $telepon->nomor_telepon = $req->input('nomor_telepon');
        $siswa->telepon()->save($telepon);
        $siswa->hobi()->attach($req->input('hobi'));
        Session::flash('flash_message', 'Data Siswa Berhasil Disimpan');
    	return redirect('siswa');
    }
    public function show(Siswa $siswa)
    {
        return view('siswa.show',compact('siswa'));
    }
    public function edit(Siswa $siswa)
    {
        $siswa->nomor_telepon = isset($siswa->telepon->nomor_telepon)?$siswa->telepon->nomor_telepon:'';
        return view('siswa.edit',compact('siswa'));
    }
    public function update(Siswa $siswa, SiswaRequest $req)
    {
        $input = $req->all();

        if ($req->hasFile('foto')) {
           $this->hapusFoto($siswa);
           $input['foto'] = $this->uploadFoto($req);  
        }
        $siswa->update($input);
        $telepon = $siswa->telepon; //buat update one to one gak perlu bikin instance baru
        $telepon->nomor_telepon = $req->input('nomor_telepon');
        $siswa->telepon()->save($telepon);
        if(null!=($req->input('hobi'))){$siswa->hobi()->sync($req->input('hobi'));} // buat relasi many to many ga bisa sync kalo null
        Session::flash('flash_message', 'Data Siswa Berhasil Diupdate');
        return redirect('siswa');
    }
    public function destroy(Siswa $siswa)
    {
        $this->hapusFoto($siswa);
        $siswa->delete();
        Session::flash('flash_message', 'Data Siswa Berhasil Dihapus');
        Session::flash('penting', true);
        return redirect('siswa');
    }

    private function uploadFoto(SiswaRequest $req)
    {
        $foto=$req->file('foto');
        $ext = $foto->getClientOriginalExtension();
        if ($req->file('foto')->isValid()) {
            $foto_name = date('YmdHis').".$ext";
            $upload_path='fotoupload';
            $req->file('foto')->move($upload_path,$foto_name);
           return $foto_name;
        }
        return false;
    }
    private function hapusFoto(Siswa $siswa)
    {
        $exist = Storage::disk('foto')->exists($siswa->foto);
        if (isset($siswa->foto) && $exist) {
            $delete = Storage::disk('foto')->delete($siswa->foto);
            if($delete){
                return true;
            }
            return false;
        }
    }
    public function cari(Request $req)
    {
        $kata_kunci = $req->input('kata_kunci');
        if (!empty($kata_kunci)) {
            $jenis_kelamin = $req->input('jenis_kelamin');
            $id_kelas = $req->input('id_kelas');
            //query
            $query = Siswa::where('nama_siswa','Like','%'.$kata_kunci.'%');
            (!empty($jenis_kelamin))?$query->JenisKelamin($jenis_kelamin):'';
            (!empty($id_kelas))?$query->Kelas($id_kelas):'';
            $siswa_list=  $query->paginate(2);
            //url linnk pagination
            $pagination = (!empty($jenis_kelamin))?$siswa_list->appends(['jenis_kelamin'=>$jenis_kelamin]):'';
            $pagination = (!empty($id_kelas))?$siswa_list->appends(['id_kelas'=>$id_kelas]):'';
            $pagination = $siswa_list->appends(["kata_kunci"=>$kata_kunci]);

            $jumlah_siswa = $siswa_list->total();
            return view('siswa.index',compact('siswa_list','kata_kunci','pagination','jumlah_siswa','id_kelas','jenis_kelamin'));
        }
        return redirect('siswa');
    }
}