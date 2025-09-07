<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nik',
        'nama_lengkap',
        'nomor_telepon',
        'email',
        'alamat',
        'tanggal',
        'isi_pengaduan',
        'bukti_foto',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
