<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nhanhieu extends Model
{
    use HasFactory; public function sanpham()
    {
        return $this->hasMany(Sanpham::class);
    }
}
