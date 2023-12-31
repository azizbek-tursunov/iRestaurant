<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'image',
    ];

    public function shortBody()
    {
        return Str::words(strip_tags($this->body), 25);
    }
}
