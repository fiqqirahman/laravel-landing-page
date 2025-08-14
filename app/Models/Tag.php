<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $table = 'tags';

    protected $fillable = [
        'nama',
        'slug',
    ];

    public function berita()
    {
        return $this->belongsToMany(Berita::class, 'berita_tag', 'id_tag', 'id_berita');
    }
}
