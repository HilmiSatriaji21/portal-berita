<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    Protected $fillable = ['judul','slug','deskripsi','foto','user_id','kategori_id'];

    public $timestamps = true;

    public function kategori()
    {
        // Model Kategori Bisa Memiliki Banyak Data
        // Dari Model Artikel Melalui Kategori_id
        return $this->hasMany('App\Kategori', 'kategori_id');
    }

    public function user()
    {
        // Model User Bisa Memiliki Banyak Data
        // Dari Model Artikel Melalui kategori_id
        return $this->hasMany('App\User', 'user_id');
    }

    public function tag()
    {
        // Model Tag Memiliki Relasi Many(BelongsToMany)
        // Terhadap Model 'Artikel' Yang Terhubung Oleh Table 'artikel_tag'
        // Masing-masing Sebagai 'artikel.id'
        return $this->belongsToMany('App\Tag', 'artikel_tag','artikel_id','tag_id');
    }
}
