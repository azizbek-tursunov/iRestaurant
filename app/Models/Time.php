<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'name_ru',
        'name_uz',
    ];

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }
}
