<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class slip_gajih extends Model
{
   

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
         'tanggal',
         'jenis_pekerjaan',
         'pembayaran',
         'makan',
         'transport',
         'parkir',
         'total',
         'status',

    ];
    public function User(){
        return $this->belongsTo(User::class);
    }
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
