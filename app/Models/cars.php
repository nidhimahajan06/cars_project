<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cars extends Model
{
    use HasFactory;
    protected $table="cars_info";
    protected $fillable=['image','brand','price','description','mileage','seats'];
    
}
