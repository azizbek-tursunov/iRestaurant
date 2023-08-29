<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }
}
