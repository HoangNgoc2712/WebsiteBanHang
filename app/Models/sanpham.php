<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    use HasFactory;
    protected $table = 'san_pham';
    public function dongsp(){
        return $this->belongsTo(dongsanpham::class,'ma_dong');
    }
    public function nhacc(){
        return $this->belongsTo(nhacungcap::class,'ma_ncc');
    }

}
