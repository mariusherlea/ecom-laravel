<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'stock',
        'photo_id'
    ];

    public function photo()
    {
        return $this->belongsTo(Photo::class);
    }

}
