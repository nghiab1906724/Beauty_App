<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class ThuongHieuModel extends Model
{
    use HasFactory;
    protected $table='thuong_hieu';
    protected $primaryKey='maTH';
    protected $keyType='Integer';
    // Nếu khóa chính không phải số và không Auto_Increment thì phải thêm dòng dưới
    public $incrementing=false;

    // Do không có create-at và update_at nên phải thêm dòng dưới
    public $timestamps = false;

    public function layThongTin(){
       //DB::table($this->table)->get();
    }
}
