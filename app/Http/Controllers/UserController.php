<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = User::all();

        return view(
            'users.index',
            compact('datas'),
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new User;
        return view('users.create', compact(
            'model'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request) // menjalankan create
    {
        $model = new User;
        $model->nim = $request->nim;
        $model->name = $request->name;
        $model->prodi = $request->prodi;
        $model->email = $request->email;
        $model->phone_number = $request->phone_number;
        $model->address = $request->address;
        $model->save(); // simpan

        // ketika berhasil, akan beralih halaman (redirect)
        return redirect('user')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // fungsi nya hampir sama dengan create
        $model = User::find($id); // menemukan data berdasarkan id nya
        return view('users.edit', compact(
            'model'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        // fungsi nya hampir sama dengan store
        $model = User::find($id);
        $model->nim = $request->nim;
        $model->name = $request->name;
        $model->prodi = $request->prodi;
        $model->email = $request->email;
        $model->phone_number = $request->phone_number;
        $model->address = $request->address;
        $model->save(); // simpan

        // ketika berhasil, akan beralih halaman (redirect)
        return redirect('user')->with('success', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // untuk menghapus data
        $model = User::find($id);
        $model->delete();

        return redirect('user')->with('success', 'Data berhasil dihapus');
    }
}
