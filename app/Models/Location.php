<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $table = "location";

    protected $fillable = [
        'nama_lokasi',
        'gambar',
    ];

    public function event()
    {
        return $this->hasMany(Event::class, 'id_location');
    }

    public $timestamps = false;
}
