<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers'; 
    protected $guarded = ['']; 

    public function category(){
        return $this->belongsTo(Category::class, 'category_id'); // Liên kết 1-1, 1 khách hàng thuộc 1 danh mục
    }
}

