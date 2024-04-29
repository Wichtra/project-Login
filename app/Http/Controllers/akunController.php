<?php

namespace App\Http\Controllers;

use App\Models\akunModel;
use Illuminate\Http\Request;

class akunController extends Controller
{
    function getAll()
    {
        $data = array(
            'akun' => akunModel::all()
        );
        return view('userList_admin', $data);
    }

    function findOne($id){
        $data = array(
            'akun' => akunModel::find($id)
        );
        return view('user_update', $data);
    }
    function update(Request $request ,$id){
        $akun = akunModel::find($id);
        $akun -> update($request->all());

        return redirect('userlist');
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

