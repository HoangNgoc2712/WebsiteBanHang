<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hoadonban extends Model
{
    use HasFactory;
    protected $table = 'hoa_don_ban';
    public function khach(){
        return $this->belongsTo(khachhang::class,'ma_kh');
    }
}

