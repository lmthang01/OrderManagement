<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contacts'; // Tên table trong database
    protected $guarded = ['']; // Tùy chỉnh mọi dữ liệu
}
