<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;

    protected $table = 'items';

    protected $primaryKey = 'item_id';

    protected $fillable = [
        'name',
        'description',
        'price',
        'quantity',
    ];
}
