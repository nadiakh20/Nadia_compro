<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Setting::get();
        $title = "Data Setting";
        return view('setting.index', compact('datas', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Setting";
        return view('setting.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pp = $request->file('profile_picture');
        $ppCustom = time()."_".$pp->getClientOriginalName();
        $path = 'uploads';
        $pp->move($path, $ppCustom);
        
        Setting::create([
            'profile_picture' => $ppCustom,

        ]);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit = Setting::find($id);
        $title = "Edit Data " . $edit->name;
        return view('experience.edit', compact('edit', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        Setting::where('id', $id)->update([
            'job' => $request->job,
            'company' => $request->company,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'last_date' => $request->last_date,
        ]);
        return redirect()->to('admin/experience')->with('message', 'Data Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Setting::where('id', $id)->delete();
        return redirect()->to('admin/experience')->with('message', 'Data berhasil dihapus');
    }
}
