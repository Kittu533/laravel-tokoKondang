<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $table = 'product'; // Pastikan tabel yang dirujuk adalah 'product'

    protected $primaryKey = 'id_product'; // Pastikan primary key yang dirujuk adalah 'id_product'

    protected $fillable = [
        'name_product',
        'price_product',
        'description_product',
        'stock_product',
        'image_product',
    ];

}

