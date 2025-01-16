<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Divisi;
use Illuminate\Http\RedirectResponse;

class DivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $divisi = Divisi::orderBy('created_at', 'DESC')->paginate(5);
  
        return view('divisi.index', compact('divisi'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('divisi.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'nama_divisi'     => 'required',
            'deskripsi_divisi'   => 'required'
        ]);

        Divisi::create([
            'nama_divisi'     => $request->nama_divisi,
            'deskripsi_divisi'   => $request->deskripsi_divisi
        ]);
 
        return redirect()->route('divisi')->with('success', 'Divisi Berhasil Ditambahkan');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $divisi = Divisi::findOrFail($id);
  
        return view('divisi.show', compact('divisi'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $divisi = Divisi::findOrFail($id);
  
        return view('divisi.edit', compact('divisi'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'nama_divisi'     => 'required',
            'deskripsi_divisi'   => 'required'
        ]);

        $divisi = Divisi::findOrFail($id);
  
        $divisi->update($request->all());
  
        return redirect()->route('divisi')->with('success', 'Divisi Berhasil Diupdate');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $divisi = Divisi::findOrFail($id);
  
        $divisi->delete();
  
        return redirect()->route('divisi')->with('success', 'Divisi Telah Dihapus');
    }
}