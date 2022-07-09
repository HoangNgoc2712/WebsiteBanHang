<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dongsanpham extends Model
{
    use HasFactory;
    protected $table = 'dong_san_pham';
    public function loaisp(){
        return $this->belongsTo(loaisp::class,'ma_loai');
    }
    public function thhieu(){
        return $this->belongsTo(thuonghieu::class,'ma_thuong_hieu');
    }

}
