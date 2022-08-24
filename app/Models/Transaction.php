<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = ['employee_id', 'transaction_amount'];

    public function employees(){
        return $this->belongsTo('App\Models\Employee', 'employee_id');
    }
}
