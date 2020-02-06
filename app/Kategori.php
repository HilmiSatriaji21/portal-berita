<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable = ['nama', 'slug'];
    public $timestamps = true;

    public function artikel()
    {
        // Model Kategori Bisa Memiliki Banyak Data
        // Dari Model Artikel Melalui Kategori_id
        return $this->hasMany('App\Artikel', 'kategori_id');
    }
}
