<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function getIndex()
    {
        $data['list'] = Mahasiswa::all();
        return view('Site.profile.index', $data);
    }
    public function getCreate()
    {
        return view('site.profile.create');

    }

    public function postCreate(Request $request)
    {
        $status = 'error';
        $message = 'Error!';

        $data = [
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
        ];
        $model = Mahasiswa::create($data);
        if ($model->save()) {
            $status = 'success!';
            $message = 'Success!';

        } else {
            $status = 'error';
            $message = 'Error!';

        }
        return redirect('profile')->with($status, $message);
    }
    public function getUpdate($id)
    {
        $data['result'] = Mahasiswa::find($id);

        return view('site.profile.update', $data);
    }
    public function postUpdate(Request $request, $id)
    {
        $status = 'error';
        $message = 'Error!';

        $data = [
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
        ];
        $model = Mahasiswa::whereId($id)->update($data);
        if ($model) {
            $status = 'success!';
            $message = 'Success!';

        } else {
            $status = 'error';
            $message = 'Error!';

        }
        return redirect('profile')->with($status, $message);
    }
    public function getDelete($id)
    {
        $status = 'error';
        $message = 'Error!';

        $delete = Mahasiswa::whereId($id)->delete();
        if ($delete) {
            $status = 'success';
            $message = 'Success!';
        }

        return redirect('profile')->with($status, $message);
    }

}
