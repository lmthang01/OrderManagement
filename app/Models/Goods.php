<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    use HasFactory;
    protected $table = 'goods'; // Tên table trong database
    protected $guarded = ['']; // Tùy chỉnh mọi dữ liệu

    // public function order()
    // {
    //     return $this->belongsTo(Order::class, 'order_id','code_order'); // Liên kết 1-1, 1 hàng hóa thuộc 1 đơn hàng
    // }
    public function unit()
    {
        return $this->belongsTo(Unit::class, 'unit_id');
    }

}
