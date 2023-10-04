<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;

class Kegiatan extends Model implements Viewable
{
    use HasFactory, Sluggable;
    use InteractsWithViews;
    protected $guarded = [];

    public function video()
    {
        return $this->hasOne(File::class, 'kegiatan_id');
    }

    public function dibuat()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }

}