<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\HasFactory;
=======
>>>>>>> adbd3e70a3c725fac0464c3e8b7cda961f5beb2d
use Illuminate\Database\Eloquent\Model;

class DetailPeriksa extends Model
{
<<<<<<< HEAD
    use HasFactory;

    protected $fillable = [
        'id_periksa',
        'id_obat',
    ];

    public function periksa()
    {
        return $this->belongsTo(Periksa::class, 'id_periksa');
    }

    public function obat()
    {
        return $this->belongsTo(Obat::class, 'id_obat');
    }
=======
    //
>>>>>>> adbd3e70a3c725fac0464c3e8b7cda961f5beb2d
}
