<?php

namespace App\Http\Controllers;



use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function __construct(){
        $this -> middleware('auth');
        $this -> middleware('verified');
        // $this -> middleware('is_admin');
    }

    
    public function index(Request $request) {
        
        if($request-> has('search')){
            $data = Employee::where('name','LIKE','%'.$request->search.'%')->orderBy('created_at', 'desc')->paginate(5);
        }else{
            $data = Employee::orderBy('created_at', 'desc')->paginate(5);
        }
        
        // $data = Employee :: orderBy('created_at', 'desc')->get();
        
        return view('datasiswa',compact('data'));
    }

    public function tambahsetoran(){
        return view('tambahdata');
    }

    

    public function insertdata(Request $request){

        $request->validate([
            'name' => ['required'],
            'status' => ['required:Berhasil,Gagal'],
            'surat' => ['required']
        ],[
            'name.required' => 'Nama penyetor harus diisi',
            'status.required' => 'Status penyetor harus diisi',
            'surat.required' => 'Surat yang di setor harus diisi',
        ]);
        
        
        Employee::create($request->all());
        return redirect('/docs')->with('success','Data Berhasil Di Tambahkan');
    }

    public function tampilkandata($id){
        
        $data = Employee::find($id);
        return view('tampilkandata', compact('data'));
    }

    public function updatedata(Request $request,$id){

        $request->validate([
            'name' => ['required'],
            'status' => ['required'],
            'surat' => ['required']
        ],[
            'name.required' => 'Nama penyetor harus di isi',
            'status.required' => 'Status penyetor harus di isi',
            'surat.required' => 'Surat yang di setor harus di isi',
        ]);
        
        $data = Employee::find($id);
        $data ->update();
        return redirect('/docs')->with('update','Data Berhasil Di Ubah');

    }
    
    public function deletedata($id){
        $data = Employee::find($id);
        $data ->delete();
        return redirect('/docs')->with('deleted','Data Berhasil Di Hapus');

    }

    public function home(){
        return view('home');
    }

}