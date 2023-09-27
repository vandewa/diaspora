<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendiri extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getPreviewImageAttribute()
    {
        $devan = asset(str_replace('public', 'storage', $this->attributes['path_foto'])) ?? asset('notfound.jpg');
        return $devan;
    }
}