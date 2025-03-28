<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tin extends Model
{
    use HasFactory;

    protected $table = 'tins'; // Tên bảng trong database
    protected $fillable = ['tieude', 'noidung', 'ngaydang'];
}
