<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class thongsokythuat extends Model
{
    use HasFactory;
    protected $table = 'thong_so_ky_thuat';
    public function spham(){
        return $this->belongsTo(sanpham::class,'id_sanpham');
    }
   
}
