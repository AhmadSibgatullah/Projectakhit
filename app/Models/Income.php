<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemesananBarang extends Model
{
    use HasFactory;
    protected $table = "PemesananBarangs";
    protected $fillable = ['name', 'amount', 'account', 'description'];
}
