<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EndProduct extends Model
{
    use HasFactory;

    protected $table = 'endproducts';

    protected $fillable = [
        'product_no',
        'version',
        'description'
    ];
}

