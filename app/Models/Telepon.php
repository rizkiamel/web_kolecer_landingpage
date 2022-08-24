<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telepon extends Model
{
    use HasFactory;
    protected $table = 'telepon';
    protected $primaryKey = 'id_users';
    protected $fillable = ['id_users', 'nomor_telepon'];

    public function users(){
        //return $this->belongsTo(User::class, 'id_users');
        //memanggil tabel user lewat telepon
        return $this->belongsTo('App\Models\User', 'id_users');
    }
}




