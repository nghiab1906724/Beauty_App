<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class TaiKhoan extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table='tai_khoan';
    protected $primaryKey='sdt';
    // protected $keyType='';
    // Nếu khóa chính không phải số và không Auto_Increment thì phải thêm dòng dưới
    public $incrementing=false;

    // Do không có create-at và update_at nên phải thêm dòng dưới
    public $timestamps = false;
    protected $fillable = [
        'sdt',
        'mk',
        'loaiTK',
        'trangThai',
    ];

    public function getAuthPassword()
    {
        return $this->mk;
    }

}
