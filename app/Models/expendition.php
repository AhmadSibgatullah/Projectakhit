<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class expendition extends Model
{
    use HasFactory;
    protected $table = "expenditions";
    protected $fillable = ['name', 'amount', 'account', 'description'];
}
