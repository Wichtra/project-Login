<?php

namespace App\Http\Controllers;

use App\Models\akunModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class akunController extends Controller
{
    function getAll()
    {
        $data = array(
            'akun' => akunModel::all()
        );
        return view('userList_admin', $data);
    }

    function findOne($id)
    {
        $data = array(
            'akun' => akunModel::find($id)
        );
        return view('user_update', $data);
    }
    public function update(Request $request)
    {
        $akun = akunModel::find($request->id);
        $data = array(
            'akun' => $akun
        );
        if ($request->isMethod('post')) {
            $akun->username = $request->username;
            $akun->email = $request->email;
            $akun->level = $request->level;
            $akun->save();
            return redirect('/userlist')->with(['message' => 'Akun berhasil dibuat']);
        }
        return view('user_update', $data);
    }

    public function delete($id)
    {
        $akun = akunModel::find($id);
        if (!$akun) {
            return redirect()->back()->with('error', 'Akun tidak ditemukan.');
        }
        $akun->delete();
        return redirect('userlist');
    }
}
