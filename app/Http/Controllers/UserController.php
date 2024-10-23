<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $userModel;
    public $kelasModel;

    public function __construct(){
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    public function index(){
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser(),
        ];

        return view('list_user', $data);
    }

    public function create(){
        $kelasModel = new Kelas();


        $kelas = $kelasModel->getKelas();

        $data = [
            'title' => 'Create User',
            'kelas' => $kelas,
        ];

        return view('create_user', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kelas_id' => 'required',
            'ipk' => 'required|numeric',
        ], [
            'nama.required' => 'Nama perlu diisi.',
            'kelas_id.required' => 'Kelas perlu dipilih.',
            'ipk.required' => 'IPK perlu diisi.',
            'ipk.numeric' => 'IPK harus berupa angka.',
        ]);

        $ipk = str_replace(',', '.', $request->input('ipk'));

        // Simpan user baru
        $user = $this->userModel->create([
            'nama' => $request->input('nama'),
            'kelas_id' => $request->input('kelas_id'),
            'ipk' => $ipk,
        ]);
        
        return redirect()->route('user.show', $user->id)->with('success', 'User berhasil dibuat');
    }


    public function edit($id){
        $user = UserModel::findOrFail($id);
        $kelasModel = new Kelas();
        $kelas = $kelasModel->getKelas();
        $title = 'Edit User';
        return view('edit_user', compact('user', 'kelas', 'title'));
    }

    public function update(Request $request, $id){
        $user = UserModel::findOrFail($id);


        $request->validate([
            'nama' => 'required',
            'kelas_id' => 'required',
            'ipk' => 'required|numeric',
        ]);


        $user->nama = $request->nama;
        $user->kelas_id = $request->kelas_id;
        $user->ipk = $request->ipk;


        if ($request->hasFile('foto')) {

            $oldFilename = $user->foto;


            if ($oldFilename) {
                $oldFilePath = public_path('storage/uploads/' . $oldFilename);

                if (file_exists($oldFilePath)) {
                    unlink($oldFilePath);
                }
            }


            $file = $request->file('foto');
            $newFilename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('uploads', $newFilename, 'public');


            $user->foto = $newFilename;
        }


        $user->save();

        return redirect()->route('user.list')->with('success', 'User Berhasil di Update');
    }

    public function destroy($id){
        $user = UserModel::findOrFail($id);
        $user->delete();

        return redirect()->to('/')->with('success', 'User Berhasil di Hapus');
    }

    public function show($id) {
        $user = UserModel::findOrFail($id);
        return view('show_user', [
            'title' => 'Show User',
            'user' => $user,
        ]);
    }
}
