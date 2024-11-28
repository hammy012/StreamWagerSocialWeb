<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $disk = 'public';

    protected $table = 'payments'; // Specify the table name

    protected $fillable = ['trx_id', 'user_id'];
}
