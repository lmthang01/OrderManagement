<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    use HasFactory;
    protected $table = 'goods'; // Tên table trong database
    protected $guarded = ['']; // Tùy chỉnh mọi dữ liệu
}
