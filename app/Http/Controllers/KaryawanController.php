<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Karyawan;
use App\Models\Divisi;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $karyawan = Karyawan::with('divisi')->orderBy('created_at', 'DESC')->paginate(5);

        return view('karyawan.index', compact('karyawan'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $divisi = divisi::all();
        return view('karyawan.create', compact('divisi'));
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'nama_karyawan' => 'required',
            'nip' => 'required',
            'email' => 'required|email|unique:karyawans,email',
            'telepon' => 'required',
            'alamat' => 'required',
        ]);

        Karyawan::create([
            'nama_karyawan' => $request->nama_karyawan,
            'nip' => $request->nip,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
            'divisi_id'=> $request->divisi_id,
        ]);
 
        return redirect()->route('karyawan')->with('success', 'Karyawan Berhasil Ditambahkan'); 
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $karyawan = Karyawan::findOrFail($id);

        return view('karyawan.show', compact('karyawan'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $divisi = divisi::all();
        $karyawan = Karyawan::with('divisi')->findOrFail($id);
  
        return view('karyawan.edit', compact('karyawan','divisi'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'nama_karyawan' => 'required',
            'nip' => 'required',
            'email' => 'required|email',
            'telepon' => 'required',
            'alamat' => 'required',
        ]);

        $karyawan = Karyawan::findOrFail($id);
  
        $karyawan->update($request->all());
  
        return redirect()->route('karyawan')->with('success', 'Karyawan Berhasil Diupdate');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $karyawan = Karyawan::findOrFail($id);
  
        $karyawan->delete();
  
        return redirect()->route('karyawan')->with('success', 'Karyawan Telah Dihapus');
    }
}