<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = "event";

    protected $fillable = [
        'nama_event',
        'tanggal',
        'deskripsi',
        'gambar',
        'id_location',
    ];

    public function location()
    {
        return $this->belongsTo(Location::class, 'id_location');
    }

    public $timestamps = false;
}
