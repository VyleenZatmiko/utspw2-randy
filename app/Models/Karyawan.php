<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Karyawan extends Model
{
    use HasFactory;

    protected $table = "karyawans";

    protected $primaryKey = "id";
 
    protected $fillable = [
        'nama_karyawan',
        'nip',
        'email',
        'telepon',
        'alamat',
        'divisi_id'
    ];

    public function divisi()
    {
        return $this->belongsTo(Divisi::class);
    }
}