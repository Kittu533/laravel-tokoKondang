<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product'; // Menyesuaikan nama tabel
    protected $primaryKey = 'id_product'; // Menyesuaikan nama primary key
    protected $fillable = [
        'name_product',
        'price_product',
        'description_product',
        'stock_product',
        'image_product',
    ];
}

