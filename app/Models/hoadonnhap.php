<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hoadonnhap extends Model
{
    use HasFactory;
    protected $table = 'hoa_don_nhap';
    public function nhvien(){
        return $this->belongsTo(nhanvien::class,'ma_nv');
    }
    public function nhacc(){
        return $this->belongsTo(nhacungcap::class,'ma_ncc');
    }
}
