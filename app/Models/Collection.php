<!-- /* 
6706220142
RIEFKY AHMAD RAMADHAN
D3IF-4603
*/ -->

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model {
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'namaKoleksi',
        'jenisKoleksi',
        'jumlahKoleksi',
        'namaPengarang',
        'tahunTerbit'
    ];
}
