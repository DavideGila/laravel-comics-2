<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    //protected $guarded = [];
    protected $fillable = ['description', 'thumb', 'price', 'title', 'sale_date', 'series', 'type'];
}
