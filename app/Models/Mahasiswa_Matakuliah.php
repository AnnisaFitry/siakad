<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa_Matakuliah extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa_matakuliah';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nilai',
    ];
    public function matakuliah()
    {
        return $this->belongsTo(Matakuliah::class,'matakuliah_id');
    }

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiwa::class,'mahasiswa_id',);
    }

    public function mahasiswa_matakuliah()
    {
        return $this->belongsToMany(Mahasiwa::class, Mahasiswa_Matakuliah::class, 'mahasiswa_id', 'matakuliah_id');
    }
}
