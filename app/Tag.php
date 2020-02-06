<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model

{
    Protected $fillable = ['nama','slug'];
    public $timestamps = true;

    public function artikel()
    {
        // Model Tag Memiliki Relasi Many(BelongsToMany)
        // Terhadap Model 'Artikel' Yang Terhubung Oleh Table 'artikel_tag'
        // Masing-masing Sebagai 'artikel.id' Dan 'tag_id'
        return $this->belongsToMany('App\Artikel', 'artikel_tag','tag_id','artikel_id');
    }
}
